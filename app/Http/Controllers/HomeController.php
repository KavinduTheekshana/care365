<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\SuccessStory;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_public', true)
                    ->orderBy('date', 'desc')
                    ->take(3)
                    ->get();
        
        // Get random 8 FAQs with visibility
        $faqs = Faq::where('visibility', true)
                   ->inRandomOrder()
                   ->take(5)
                   ->get();
        
        $testimonials = Testimonial::where('is_public', true)
                                ->inRandomOrder()
                                ->get();

        
        // Get public services
        $services = Service::where('is_public', true)
                          ->orderBy('created_at', 'desc')
                          ->take(6)
                          ->get();

        // Get all active stories ordered by sort_order
        $successStories = SuccessStory::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        
        // Group stories for proper display
        $groupedStories = $this->groupSuccessStories($successStories);
        
        // Return view with all data
        return view('frontend.home.index', compact(
            'blogs', 
            'faqs', 
            'testimonials', 
            'services',
            'successStories',
            'groupedStories'
        ));
    }

    /**
     * Group success stories for proper display layout
     * Single images stay alone, paired images are grouped together
     */
    private function groupSuccessStories($stories)
    {
        $grouped = [];
        $i = 0;
        $total = count($stories);
        
        while ($i < $total) {
            $story = $stories[$i];
            
            if ($story->layout_type === 'single') {
                // Single image - show alone
                $grouped[] = [$story];
                $i++;
            } 
            elseif ($story->layout_type === 'paired_left') {
                // Paired left - check if next is paired_right
                $nextStory = ($i + 1 < $total) ? $stories[$i + 1] : null;
                
                if ($nextStory && $nextStory->layout_type === 'paired_right') {
                    // Valid pair found
                    $grouped[] = [$story, $nextStory];
                    $i += 2;
                } else {
                    // No matching pair, show as single
                    $grouped[] = [$story];
                    $i++;
                }
            }
            elseif ($story->layout_type === 'paired_right') {
                // Paired right appearing alone (shouldn't happen with proper data)
                // Show as single and skip
                $grouped[] = [$story];
                $i++;
            }
            else {
                // Unknown layout type, skip
                $i++;
            }
        }
        
        return $grouped;
    }
}