<div class="bg-gray-50">

    <div class="w-auto max-h-full px-2 mx-auto mt-10 mb-40 grid-flow-column break-inside-avoid-column xs:columns-1 sm:columns-2 md:columns-4 bg-gray-50 ">


        <?php
        for ($i = 0; $i < 20; $i++) { ?>

            <!-- <div class="float-left min-w-full mb-5 border border-black rounded-lg shadow-lg shadow-slate-600"><?php echo $i; ?></div> -->

            <div class="items-center grid-cols-1 mb-5 border border-black divide-y rounded-lg shadow-lg shadow-slate-600 bg-gray-50 break-inside-avoid ">

                <img class="w-[30px] float-left m-1" src="../images/transparent-globe.png">

                <div class="min-w-full border-t rounded-t-lg bg-amber-200 ">
                    <strong class="mx-1"> www.shop4web.ca </strong>
                    <span> The previous version of this website </span>
                </div>

                <div class="min-w-full px-1 ">
                    <?php for ($j = 0 ; $j < 30 ; $j++ ) { echo bin2hex(random_bytes(rand(3, 8))) . " "  ;} ?>
                    a short description of the website or project should be presented here ... moar text is better to see how flexinle the block ix
                </div>

                <div class="inline-block min-w-full py-1 border-b rounded-b-lg ">



                    <a class="float-left px-1 " href="">Github </a>
                    <a class="float-right px-1 " href="">Preview </a>
                    <br>

                </div>
            </div>

        <?php } ?>

    </div>

</div>