<div class="mx-auto container dark:bg-gray-800 dark:bg-gray-800 shadow rounded">

    <div class="flex flex-col w-full xl:overflow-x-hidden">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg shadow-md">
                    <table class="min-w-full">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="text-xs font-medium text-gray-700 px-6 py-3 text-left uppercase tracking-wider dark:text-gray-400">
                                Pseudo
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-700 px-6 py-3 text-left uppercase tracking-wider dark:text-gray-400">
                                Email
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-700 px-6 py-3 text-left uppercase tracking-wider dark:text-gray-400">
                                Mot de passe
                            </th>
                            <th scope="col" class="text-xs font-medium text-gray-700 px-6 py-3 text-left uppercase tracking-wider dark:text-gray-400">
                                Admin
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Supprimer l'utilisateur</span>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        foreach ($users as $user) :
                        ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-600">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                    <?= $user->getPseudo(); ?>
                                </td>
                                <td class="text-sm text-gray-500 px-6 py-4 whitespace-nowrap dark:text-gray-400">
                                    <?= $user->getEmail(); ?>
                                </td>
                                <td class="text-sm text-gray-500 px-6 py-4 whitespace-nowrap dark:text-gray-400">
                                    <?= $user->getPassword(); ?>
                                </td>
                                <td class=" mx-auto text-sm text-gray-500 px-6 py-4 whitespace-nowrap dark:text-gray-400">
                                    <?php
                                    $status= $user->getStatus();
                                    if ($status == "admin"){
                                    ?>
                                        <input  id="remember" aria-describedby="remember" type="checkbox" class="mx-3 bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required disabled checked>
                                        <?php
                                    }else{
                                    ?>
                                        <input  id="remember" aria-describedby="remember" type="checkbox" class="mx-3 bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required disabled>
                                        <?php
                                    }
                                    ?>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <?php
                                    //CODE A COMPLETER POUR NE PAS POUVOIR SE SUPPRIMER SOI MEME
                                    //$id = $user->getId()
                                    //if($id ){?>
                                    <a href="#" class="text-blue-600 hover:text-blue-900 dark:text-blue-500 dark:hover:underline">Supprimer l'utilisateur</a>
                                    <?php // }?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>