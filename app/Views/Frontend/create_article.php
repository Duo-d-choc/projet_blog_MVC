<div class="w-full">
    <div class="bg-gradient-to-b from-purple-800 to-purple-600 h-96 z-0"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">

        <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
            <p class="text-3xl font-bold leading-7 text-center">Nouveau post</p>
            <form action="/create_article_db" method="post">
                <div class="md:flex items-center mt-8">
                    <div class="w-full flex flex-col">
                        <label for="post" class="font-semibold leading-none">Titre</label>
                        <input id="post" name="titre" type="text" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-purple-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                    </div>

                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label for="message" class="font-semibold leading-none">Contenu</label>
                        <textarea id="message" name="content" type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-purple-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-purple-700 rounded hover:bg-purple-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                        POSTER
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>