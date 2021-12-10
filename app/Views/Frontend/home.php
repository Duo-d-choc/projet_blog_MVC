
<main class="flex-1 bg-200 dark:bg-gray-900 overflow-y-auto">
    <div class="px-24 py-12 text-gray-700 dark:text-gray-500">

        <!-- Header -->
        <h2 class="text-4xl font-medium capitalize ">Posts</h2>
        <!-- Ligne de séparation -->
        <div class="mb-10 border dark:border-gray-700 transition duration-500 ease-in-out"></div>
        <!-- Tout les posts -->
        <div class="flex flex-col mt-2">

            <!-- Post -->
            <?php

            foreach ($articles as $article) :
            ?>
                <?php /* @var $article \App\Entity\Post */ ?>
            <div class="flex flex-row mt-4 filter drop-shadow-lg">
                <div class="flex w-full items-center justify-between bg-white dark:bg-gray-800 px-8 py-6 border-l-4 border-purple-500
						dark:border-purple-300">
                    <!-- card -->

                    <div class="flex flex-col ml-6">


                        <!-- Partie Auteur et date de création du post -->
                        <div class=" mb-2 flex justify-between">

                            <!-- Titre du post -->
                            <span class="text-lg font-bold cursor-pointer hover:text-purple-700"><?= $article->getTitle(); ?></span>

                            <div class="flex">
                                <div class="flex">
                                    <svg
                                            class="h-5 w-5 fill-current
                                                dark:text-gray-300"
                                            viewBox="0 0 24 24">
                                        <path
                                                d="M12 4a4 4 0 014 4 4 4 0 01-4 4
                                                    4 4 0 01-4-4 4 4 0 014-4m0
                                                    10c4.42 0 8 1.79 8
                                                    4v2H4v-2c0-2.21 3.58-4 8-4z"></path>
                                    </svg>
                                    <!-- Auteur du poste -->
                                    <span
                                            class="ml-2 text-sm text-gray-600
                                                dark:text-gray-300 capitalize">
                                                <?= $article->getPostAuthor()->getPseudo() ?>
                                            </span>
                                </div>

                                <div class="flex ml-6">
                                    <svg
                                            class="h-5 w-5 fill-current
                                                dark:text-gray-300"
                                            viewBox="0 0 24 24">
                                        <path d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11
                                                    0-2 .89-2 2v14a2 2 0 002 2h14a2 2
                                                    0 002-2V5a2 2 0 00-2-2h-1V1m-1
                                                    11h-5v5h5v-5z"></path>
                                    </svg>
                                    <!-- Date de création du poste -->
                                    <span
                                            class="ml-2 text-sm text-gray-600
                                                dark:text-gray-300 capitalize">
                                                <?= $article->getDateObject()->format('j M Y G:i'); ?>
                                            </span>
                                </div>
                            </div>

                        </div>

                        <!-- Contenu -->
                        <div class="mt-4 flex flex-col">
                            <div class="mb-5">
                                <p>
                                    <?= substr($article->getContent(),0,150); ?>
                                </p>
                            </div>



                            <div class="mt-4 flex">
                                <button
                                        class="flex items-center
										focus:outline-none border rounded-full
										py-2 px-6 leading-none border-gray-500
										dark:border-gray-600 select-none
										hover:bg-purple-400 hover:text-white
										dark-hover:text-gray-200">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <a href="/article/<?= $article->getId(); ?>">Voir plus</a>
                                </button>

                                <button
                                        class="flex items-center ml-4
										focus:outline-none border rounded-full
										py-2 px-6 leading-none border-purple-500
										dark:border-violet-600 select-none
										hover:bg-purple-400 hover:text-white
										dark-hover:text-gray-200">
                                    <svg
                                            class="h-5 w-5 fill-current mr-2
											text-purple-600"
                                            viewBox="0 0 576 512">
                                        <path
                                                d="M402.3 344.9l32-32c5-5
												13.7-1.5 13.7 5.7V464c0 26.5-21.5
												48-48 48H48c-26.5
												0-48-21.5-48-48V112c0-26.5
												21.5-48 48-48h273.5c7.1 0 10.7
												8.6 5.7 13.7l-32 32c-1.5 1.5-3.5
												2.3-5.7
												2.3H48v352h352V350.5c0-2.1.8-4.1
												2.3-5.6zm156.6-201.8L296.3
												405.7l-90.4 10c-26.2
												2.9-48.5-19.2-45.6-45.6l10-90.4L432.9
												17.1c22.9-22.9 59.9-22.9 82.7
												0l43.2 43.2c22.9 22.9 22.9 60 .1
												82.8zM460.1 174L402 115.9 216.2
												301.8l-7.3 65.3 65.3-7.3L460.1
												174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8
												0L436 82l58.1 58.1
												30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                    </svg>
                                    <span>modifier</span>
                                </button>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <?php endforeach; ?>

        </div>




    </div>
</main>
