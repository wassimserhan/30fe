            <?php 
            
            
            
            foreach((get_the_category()) as $category) {

            if($category->cat_name === "Collision Reconstruction" || str_contains($category->cat_name, "Biomechanics") || $category->cat_name === "Digital Media Analysis" || $category->cat_name === "Human Factors" || $category->cat_name === "Special Investigations" || $category->cat_name === "Transportation") {
            $label_color = 'orange-bg';
            } elseif (str_contains($category->cat_name, "Fire Code") || $category->cat_name === "Building Science & Building Envelope" || str_contains($category->cat_name, "Structural Engineering") || $category->cat_name === "Construction" || $category->cat_name === "Geotechnical Engineering" || $category->cat_name === "Fire & Electrical" || $category->cat_name === "Materials & Product Failures" || $category->cat_name === "Piping & HVAC") {
            $label_color = 'blue-bg';
            } elseif ($category->cat_name === "Remediation") {
              $label_color = 'green-bg';
            } else {
              $label_color = 'taupe-bg';
            }
            }
          ?>