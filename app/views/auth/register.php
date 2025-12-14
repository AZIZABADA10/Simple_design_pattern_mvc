<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 animate-fadeIn">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Inscription
        </h2>

        <form method="POST" class="space-y-5">

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Nom
                </label>
                <input
                    type="text"
                    name="name"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Votre nom"
                >
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="exemple@email.com"
                >
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Mot de passe
                </label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="********"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold
                       hover:bg-green-700 transition duration-300">
                S'inscrire
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Déjà un compte ?
            <a href="index.php?action=login"
               class="text-blue-600 hover:underline font-medium">
                Se connecter
            </a>
        </p>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>
