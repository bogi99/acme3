<?php 
    $logo = readEnv::get('company_name');
    $slogan = readEnv::get('company_slogan');
?>
<div class="sticky top-0 block mt-2 mb-2 ml-2 mr-2 text-lg bg-[#c7d7ee] min-h-fit h-20 shadow-xl shadow-sky-200 border-blue-500 border border-b-2 border-t-0 border-l-0 border-r-0">
    <div class="float-left mx-1 font-sans text-5xl font-extrabold text-logo" ><?php echo $logo ;?> </div>
    <div class="align-text-bottom" ><?php echo $slogan ;?> </div>
    <div class="float-right text-xs sm:text-xs md:text-base lg:text-base " >
        <div class="pt-2 pb-2 mx-1 px-7 bg-slate-400">
            
            <span class="inline-block px-2">
                <form action="/" method="get" >
                    <input type="hidden" name="action" value="home">
                    <button class="<?php if( !isset($_GET['action']) || $_GET['action'] == 'home') echo "text-gray-100 " ?>" type="submit">Home</button>
                </form>
            </span>
            
            <span class="inline-block px-2">
                <form action="/" method="get" >
                    <input type="hidden" name="action" value="consulting">
                    <button class="<?php if($_GET['action'] == 'consulting') echo "text-gray-100 " ?>" type="submit">IT Consultation</button>
                </form>
            </span>

            <span class="inline-block px-2">
                <form action="/" method="get" >
                    <input type="hidden" name="action" value="webdev">
                    <button class="<?php if($_GET['action'] == 'webdev') echo "text-gray-100 " ?>" type="submit">Web Development</button>
                </form>
            </span>

            <span class="inline-block px-2">
                <form action="/" method="get" >
                    <input type="hidden" name="action" value="about">
                    <button class="<?php if($_GET['action'] == 'about') echo "text-gray-100 " ?>" type="submit">About</button>
                </form>
            </span>

            <!-- <span class="inline-block px-2">
                <form action="/" method="get" >
                    <input type="hidden" name="action" value="portfolio">
                    <button class="<?php if($_GET['action'] == 'portfolio') echo "text-gray-100 " ?>" type="submit">Portfolio</button>
                </form>
            </span> -->
            
        </div>
    </div>   

    <?php  ?>
</div>
