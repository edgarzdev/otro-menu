
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm p-6 bg-white rounded-2xl shadow-md border ">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
      Inicia sesión
    </h2>
    <form action="#" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" />
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-600">
          <input type="checkbox" class="form-checkbox h-4 w-4 text-orange-500" />
          <span class="ml-2">Recordarme</span>
        </label>
        <a href="#" class="text-sm text-yellow-500 hover:underline">¿Olvidaste tu contraseña?</a>
      </div>

      <button type="submit"
        class="w-full bg-orange-500 hover:bg-orange-400 text-white font-semibold py-2 px-4 rounded-lg transition">
        Iniciar sesión
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
      ¿No tienes una cuenta?
      <a href="#" class="text-yellow-500 hover:underline font-medium">Regístrate</a>
    </p>
  </div>

</body>
</html>
