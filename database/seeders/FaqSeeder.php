<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What services does Care 365 provide?',
                'answer' => 'Care 365 provides elderly care, 24/7 medical support, assisted living, nutritious meals, physiotherapy, and recreational activities.',
                'visibility' => 'public',
            ],
            [
                'question' => 'How can I admit my loved one to Care 365?',
                'answer' => 'You can contact us via phone or email to schedule a visit. Our team will guide you through the admission process and necessary documentation.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Are the staff trained for medical emergencies?',
                'answer' => 'Yes, our staff are trained for medical emergencies, and we have on-call doctors and 24/7 nursing support.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Can I visit my family member anytime?',
                'answer' => 'Visitors are welcome during visiting hours. For special arrangements, please contact our front desk.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Is there a recreational program for seniors?',
                'answer' => 'Yes, we offer social, recreational, and wellness programs to keep residents engaged and active.',
                'visibility' => 'public',
            ],
            [
                'question' => 'How is the safety of residents ensured?',
                'answer' => 'Care 365 ensures safety through CCTV monitoring, emergency response systems, trained staff, and secure living spaces.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Do you provide personalized care plans?',
                'answer' => 'Yes, each resident receives a personalized care plan tailored to their medical, physical, and emotional needs.',
                'visibility' => 'public',
            ],
            [
                'question' => 'What types of rooms are available?',
                'answer' => 'We offer single, double, and shared rooms, all designed for comfort and accessibility.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Are meals customized for dietary requirements?',
                'answer' => 'Yes, we provide customized meals including diabetic, low-salt, vegetarian, and other special diets.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Can residents participate in outdoor activities?',
                'answer' => 'Absolutely, we have garden areas, walking paths, and outdoor social activities for residents.',
                'visibility' => 'public',
            ],
            [
                'question' => 'How do you handle medications?',
                'answer' => 'Medications are managed by trained staff according to doctor prescriptions, ensuring correct timing and dosage.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Is transportation provided for residents?',
                'answer' => 'Yes, we provide safe transportation for medical appointments, outings, and emergency needs.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Do you offer short-term or respite care?',
                'answer' => 'Yes, Care 365 offers both short-term stays and respite care for families needing temporary support.',
                'visibility' => 'public',
            ],
            [
                'question' => 'Are pets allowed in Care 365?',
                'answer' => 'Pets are not allowed inside rooms for safety reasons, but therapy pets are available for emotional support.',
                'visibility' => 'public',
            ],
            [
                'question' => 'How can I provide feedback or complaints?',
                'answer' => 'We welcome feedback at any time via phone, email, or our on-site management. We strive to continuously improve.',
                'visibility' => 'public',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
