            <?php 
            
            foreach((get_the_category()) as $category) {

            if($category->cat_name === "Collision Reconstruction" || str_contains($category->cat_name, "Biomechanics") || $category->cat_name === "Digital Media Analysis" || $category->cat_name === "Human Factors" || $category->cat_name === "Special Investigations" || $category->cat_name === "Transportation") {
            $label_color = '#ff6f48';
            } elseif (str_contains($category->cat_name, "Fire Code") || $category->cat_name === "Building Science & Building Envelope" || str_contains($category->cat_name, "Structural Engineering") || $category->cat_name === "Construction" || $category->cat_name === "Geotechnical Engineering" || str_contains($category->cat_name, "Electrical") || str_contains($category->cat_name, "Materials") || $category->cat_name === "Piping & HVAC") {
            $label_color = '#0175df';
            } elseif ($category->cat_name === "Remediation") {
              $label_color = '#08cb80';
            } else {
              $label_color = '#cbbea5';
            }
            }
          ?>