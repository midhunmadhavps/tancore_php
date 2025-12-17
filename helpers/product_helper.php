<?php

  function getAllIndexProducts($conn) {
      $sql = "SELECT 
          p.id AS product_id,
          p.product_name,
          p.product_price,
          p.product_description,
          c.category_name,
          MIN(i.image_name) AS images
        FROM t_products p
        JOIN t_category c ON p.category_id = c.id
        LEFT JOIN t_images i ON p.id = i.product_id
        GROUP BY p.id
        LIMIT 8";

      // $sql = "SELECT 
      //     p.id AS product_id,
      //     p.product_name,
      //     p.product_price,
      //     p.product_description,
      //     c.category_name,
      //     MIN(i.image_name) AS images
      //   FROM t_products p
      //   JOIN t_category c ON p.category_id = c.id
      //   LEFT JOIN t_images i ON p.id = i.product_id LIMIT 8";

      $stmt = $conn->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function gtss(){
    
  }

?>

