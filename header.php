
<?php include 'common/_settings.php'; ?>

<header class="header">
    <div class="header-top"> 

        <div id="header-logo">
            <a href="#" title="<?php echo $_default_title ?>">
                <img src="<?php echo $_logo ?>" width="200" alt="<?php echo $_default_title ?>">
            </a>
        </div>

        <div id="header-menu">
            <a href="javascript:void(0);" class="icon-menu" onclick="menuMovil()">
                <span class="icon-line"></span>
            </a>
            <nav id="header-mainmenu" class="header-mainmenu">
                <ul id="mainmenu">                        
                    <?php 
                        foreach($site_menu as $url => $item) 
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

        <div id="header-tools">                
            <ul class="header-user">
                <li>
                    <a href="#">
                        <?php echo $_iconSearch ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $_iconCart ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $_svg_user ?>
                    </a>
                </li>                        
            </ul>               
        </div>

    </div>   
</header>