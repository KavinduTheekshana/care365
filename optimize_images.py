import os
from PIL import Image

def optimize_images(directory):
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.lower().endswith(('.png', '.jpg', '.jpeg')):
                filepath = os.path.join(root, file)
                try:
                    size = os.path.getsize(filepath)
                    if size > 500 * 1024:  # 500KB
                        print(f"Optimizing {filepath} ({size/1024:.2f} KB)")
                        with Image.open(filepath) as img:
                            # Resize if too large
                            if img.width > 1920:
                                ratio = 1920 / img.width
                                new_height = int(img.height * ratio)
                                img = img.resize((1920, new_height), Image.Resampling.LANCZOS)
                            
                            # Save with optimization
                            original_format = img.format if img.format else 'JPEG'
                            img.save(filepath, optimize=True, quality=85)
                        
                        new_size = os.path.getsize(filepath)
                        print(f"Reduced to {new_size/1024:.2f} KB")
                except Exception as e:
                    print(f"Error processing {filepath}: {e}")

if __name__ == "__main__":
    base_dir = r"d:\Creatx Software\Project\Care365\care365\public\assets\img"
    optimize_images(base_dir)
