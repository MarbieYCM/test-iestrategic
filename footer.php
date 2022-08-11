<footer class="footer">
    <div>
        <div class="container">
            <div class="footer-category">
                <div>
                    <?php  
                        foreach($footer_1_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_2_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_3_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_4_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_5_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_6_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>

                <div>
                    <?php  
                        foreach($footer_7_menu as $key => $value) {
                            if ($key === '/1'){                            
                                echo '<h4>'.$value.'</h4>'; 
                            } else { ?>
                                <li>
                                    <a href="#">
                                        <?php echo $value ?>
                                    </a>
                                </li>                 
                            <?php 
                            }  
                        }
                    ?>
                </div>
            </div>

            <div class="footer-logo">
                <a href="#" title="<?php echo $_default_title ?>">
                    <hr><img src="<?php echo $_logo ?>" width="180" alt="<?php echo $_default_title ?>">
                </a>
            </div>

            <div class="footer-menu">
                <nav>
                    <ul>                        
                        <?php 
                            foreach($footer_nav_menu as $url => $item) 
                            { ?>
                                <li>
                                    <a href="<?php echo $url ?>">
                                        <?php echo $item ?>
                                    </a>
                                </li>
                            <?php }
                        ?>                       
                    </ul>
                </nav>
            </div>   
            
            <div class="copyright">
                <p class="copyright-txt">
                    <?php echo $_txt_footer_copyright.' '.$_default_title ?>
                </p>
                <ul>                        
                    <?php 
                        foreach($footer_disclaimer_menu as $url => $item) 
                            { ?>
                                <li>
                                    <a href="<?php echo $url ?>">
                                        <?php echo $item ?>
                                    </a>
                                </li>
                        <?php }
                    ?>                       
                </ul>
                <p>
                    <?php echo $_txt_footer_websiteby.' <a href="#">'.$_default_title.'</a>' ?> 
                </p>

            </div>

        </div>
    </div>
</footer>