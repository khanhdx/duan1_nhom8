<section class="main_content dashboard_part large_header_bg">

    <div class="white_card_body">
        <div class="QA_section">
            <div class="white_box_tittle list_header mt_30 ml_25">
                <h4>Quan Ly Variants</h4>
            </div>
            <div class="QA_table mb_30">

                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                        <th scope="col">Id Product</th>
                            <th scope="col">Quanity</th>
                            
                            <th scope="col">Color 1:Black / 2:White</th>
                            <th scope="col">Size 1:M / 2:L</th>
                            <th scope="col"><a href="index.php?act=addvariants">Add</a></th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listvariants as $variants_product) {
                            extract($variants_product);
                         
                        
                            echo '
                            <tr>
                                     
                                        <td>' . $id. ' </td>
                                        <td>' . $quantity . ' </td>
                                        <td>' . $color . ' </td>
                                        <td>' . $size . ' </td>
                                        
                                    
                            </tr>
                            ';
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

    </body>

    </html>