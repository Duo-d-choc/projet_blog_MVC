<main class="flex flex-col items-center">

    <!-- Partie post -->

    <?php /* @var $post_article \App\Entity\Post */ ?>
    <div class="max-w-4xl px-10 my-4 py-6 bg-white rounded-lg shadow-md mb-20 mt-10">
        <div class="flex justify-end items-center">
            <!-- Date de publication -->
            <span class="font-light text-gray-600"><?= $post_article->getDateObject()->format('D j M, Y'); ?></span>
        </div>
        <div class="mt-2">
            <!-- Titre du post -->
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600"><?= $post_article->getTitle(); ?></a>
            <p class="mt-2 text-gray-600"><?= $post_article->getContent();?></p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <!-- SI ADMIN TODO -->
            <div class="flex">
                <button type="button" class="border border-purple-500 text-purple-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-purple-600 focus:outline-none focus:shadow-outline">
                    modifier
                </button>
                <button type="button" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
                    supprimer
                </button>


            </div>
            <div>
                <a class="flex items-center" href="#">
                    <svg class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <!-- Nom d'utilisateur -->
                    <h1 class="text-gray-700 font-bold"><?= $post_article->getPostAuthor()->getPseudo(); ?></h1>
                </a>
            </div>
        </div>
    </div>

    <!-- Partie commentaires -->
    <!-- TO DO -->
    <button class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md mb-20">Commentaires </button>

    <div class="antialiased mx-auto max-w-screen-sm">

        <!-- Tous les commentaire -->
        <?php
        foreach ($comments as $comment) :
        ?>
        <div class="space-y-4 mb-20">

            <!-- Un commentaire -->
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <svg class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <!-- Nom de l'utilisateur + date de publication -->
                    <strong>Utilisateur Moi</strong> <span class="text-xs text-gray-400">10/10/2021 à 11:11</span>
                    <!-- Commentaire de l'u -->
                    <p class="text-sm">
                        <?= $comment->getContent(); ?>
                    </p>

                    <div class="flex mt-5">
                        <button type="button" class="border border-purple-500 text-purple-500 rounded-md px-2 py-1 m-2 mb-1 transition duration-500 ease select-none hover:text-white hover:bg-purple-600 focus:outline-none focus:shadow-outline">
                            modifier
                        </button>
                        <button type="button" class="border border-red-500 text-red-500 rounded-md px-2 py-1 m-2 mb-1 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">
                            supprimer
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach ?>


        <!-- Laisser un commentaire -->

        <div class="bg-white p-2 pt-4 rounded shadow-lg mb-20">
            <div class="flex ml-3 items-center">
                <div class="flex flex-shrink-0 mr-3">
                    <svg class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <!-- Nom de l'utilisateur en connecté -->
                    <h1 class="font-semibold">Utilisateur Toi</h1>
                </div>

            </div>

            <div class="mt-3 p-3 w-full">
                <textarea rows="3" class="border p-2 rounded w-full" placeholder="Ajouter un commentaire..."></textarea>
            </div>

            <div class="flex justify-between mx-3">
                <button type="button" class="border border-black-500 text-black-500 rounded-md px-2 py-1 m-2 mb-1 transition duration-500 ease select-none hover:text-white hover:bg-gray-600 focus:outline-none focus:shadow-outline">
                    Envoyer
                </button>
                <div>
                    <div tabindex="0" class="dropdown">
                        <div tabindex="0" class="cursor-pointer">...</div>

                    </div>
                </div>
            </div>

        </div>


    </div>
</main>