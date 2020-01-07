<?php require 'parts/header.part.php' ?>

<div class="h-screen w-screen flex items-center justify-center">

    <div class="text-center">

        <h1 class="text-4xl text-gray-700 font-serif font-semibold">

            <?= lang('hello'); ?>

        </h1>

        <div class="pt-8">
            <a class="border py-2 px-3 border-gray-400 text-gray-500 rounded" href="/login">Login</a>
        </div>

    </div>

</div>

<?php require 'parts/footer.part.php' ?>