<div class="h-screen bg-100 flex justify-center items-center">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        <form class="bg-white p-10 rounded-lg shadow-lg min-w-full">
            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Créer un compte</h1>

            <!-- Nom -->
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nom</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="nom" id="nom" placeholder="Nom" />
            </div>

            <!-- Prénom -->
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Prénom</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="prénom" id="prénom" placeholder="Prénom" />
            </div>

            <!-- E-mail -->
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="email">E-mail</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />
            </div>

            <!-- Mot de passe -->
            <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Mot de passe</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="Mot de passe" />
            </div>

            <!-- Confirmation de mot de passe -> A FAIRE SI TEMPS -->
            <!-- <div>
                <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="confirm password" />
            </div> -->
            <!-- Boutton -->
            <!-- Submit -->
            <button type="submit" class="w-full mt-6 bg-purple-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Créer un compte</button>
            <!-- Redirection page de connexion -->
            <button type="submit" class="w-full mt-6 mb-3 bg-purple-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">se connecter</button>
        </form>
    </div>
</div>