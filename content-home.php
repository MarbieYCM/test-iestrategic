<main>
    <section>
        <div id="slider">
            <div class="slider-bg" style="background-image: url(<?php  echo $top_image_section->image; ?>)">             
                <div class="slider-content">
                    <div class="container">
                        <div class="slider-txt">
                            <h1><?php  echo $top_image_section->title; ?></h1>
                            <p><?php  echo $top_image_section->content; ?></p>
                        </div> 
                    </div>
                </div>  
            </div>                               
        </div>
    </section>

    <section>
        <div id="products-features">
            <div class="title-style1" style="background-image: url(<?php echo $_logo_icon ?>)">
                <h2><?php echo $_tit_section1 ?></h2>
            </div>            
            <?php            
                if (count($first_section_pages) != 0){
                    foreach($first_section_pages as $category) { ?>
                        <div class="box-info">
                            <div id="box-img">
                                <div>
                                    <figure>
                                        <img src="<?php echo $category['image'] ?>" alt="<?php echo $category['title'] ?>">
                                    </figure>
                                </div>
                            </div>
                            <div id="box-txt">
                                <h3><?php echo $category['title'] ?></h3>
                                <p><?php echo $category['description'] ?></p>
                            </div>
                        </div>
                    <?php } 
                } else {                   
                    echo '<div class="no-records">
                        <p>'.$_default_norecords.'</p>
                    </div>';
                }
            ?>                
        </div>
    </section>

    <section>
        <div id="clients">
            <div style="background-image: url(<?php  echo $second_section->image; ?>)">             
                <div class="clients-content">
                    <div class="container">
                        <div class="clients-txt">
                            <h2><?php echo $second_section->title; ?></h2>
                            <p><?php echo $second_section->content; ?></p>
                        </div> 
                        <div class="clients-img">
                            <ul>
                               <?php  
                                    foreach($second_section->logos as $logo) {
                                        echo '<li><img src="'.$logo.'" alt="Logo" /></li>';
                                }?>                                                                
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>                               
        </div>
    </section>

    <section>
        <div id="features">
            <div class="container">
                <div class="title-style3">
                    <h2><?php echo $_tit_section3 ?></h2>
                </div> 
                <div class="features-box">
                    <?php            
                        if (count($third_section_pages) != 0){           
                            foreach($third_section_pages as $product) { ?> 
                                <div class="box-info">
                                    <div id="box-img">
                                        <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>">
                                    </div>
                                    <div id="box-txt">
                                        <h3><?php echo $product['title'] ?></h3>
                                        <p><?php echo $product['description'] ?></p>
                                    </div>
                                </div>
                            <?php } 
                        } else {                   
                            echo '<div class="no-records">
                                <p>'.$_default_norecords.'</p>
                            </div>';
                        } 
                    ?>
                </div>           
                
            </div>    
        </div>
    </section>

    <section>
        <div id="categories-features">         
            <?php
                if (count($third_section_pages) != 0){         
                    foreach($fourth_section_pages as $categories) { ?> 
                        <div class="category-box">
                            <div id="category-img" style="background-image: url(<?php echo $categories['image'] ?>)">
                                <div id="category-txt">
                                    <h3><?php echo $categories['title'] ?></h3>
                                </div>
                            </div>                        
                        </div>
                        <?php } 
                } else {                   
                    echo '<div class="no-records">
                        <p>'.$_default_norecords.'</p>
                    </div>';
                }
            ?>    
        </div>
    </section>

    <section>
        <div id="contact">
            <div  class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h2><?php echo $_default_title ?></h2>
                        <p><?php echo $_txt_agency ?></p>
                        <div>
                            <p>
                                <?php 
                                    echo $_contact_section->address.' </br>'.
                                        $_contact_section->postal_code.' - '.$_contact_section->address_city.' </br> 
                                        <a href="#">'.$_txt_workwithus.'</a>'
                                ?>
                            </p>
                            <p class="contact-maps">
                                <a href="#" target="_blank">
                                    <?php echo $_txt_viewmaps ?>
                                </a>
                            </p>
                            <p class="contact-phone">
                                <?php echo $_contact_section->phone ?>
                            </p>
                            <p class="contact-email">
                                <a href=" mailto: <?php echo $_contact_section->email ?>">
                                    <?php echo $_contact_section->email ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <p><?php echo $_contact_section->form_text ?></p>
                        
                        <form action="#" method="post" name="contactForm" onsubmit="return validateForm()" enctype="multipart/form-data" >
                            <div class="field-box">
                                <div>
                                    <label for="Name">Nombre (*)</label>
                                    <input type="text" id="Name" name="Name">
                                </div>
                                <div>
                                    <label for="Lastname">Apellidos (*)</label>
                                    <input type="text" id="Lastname" name="Lastname">
                                </div>
                            </div>
                            <div class="field-box">
                                <div>
                                    <label for="Phone">Teléfono (*)</label>
                                    <input type="tel" id="Phone" name="Phone">
                                </div>
                                <div>
                                    <label for="Email">Email (*)</label>
                                    <input type="email" id="Email" name="Email">
                                </div>
                            </div>
                            <div class="field-box">
                                <div>
                                    <label for="Message">Comentarios</label>
                                    <textarea name="Message" id="Message" rows="5" cols="30"></textarea>
                                </div>
                                <div class="style-input2">
                                    <div class="checkbox">
                                    <label for="Legal"> He leído y acepto el <a href="#">aviso legal (*)</a>
                                    <input type="checkbox" id="Legal" name="Legal" value="agree">
                                        <span id="CheckLegal" name="CheckLegal" class="checkmark"></span></label>
                                        <br>
                                    </div>
                                    <div>
                                        <input type="submit" id="submit" value="Enviar">
                                    </div>                                   

                                </div>
                            </div>

                        </form>
                        <div id="form-error" style="display: none;">
                            <p><?php echo $_txt_errorform ?></p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    
</main>