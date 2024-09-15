<!-- employee_register.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-2xl font-bold mb-4">Employee Registration</h1>
        <?php if (isset($validation)): ?>
            <div class="mb-4 text-red-500">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <form id="employeeForm" action="<?= base_url('employee/save') ?>" method="post" class="space-y-4">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" value="<?= old('name') ?>"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="<?= old('email') ?>"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded-lg shadow-sm focus:outline-none focus:shadow-outline">
            </div>

            <!-- CSRF Token -->
            <?= csrf_field() ?>

            <button type="submit"
                class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700">Submit</button>
        </form>
        <div class="mt-4 flex justify-between">
            <div>
                <a href="javascript:history.go(-1)" class="text-indigo-600 hover:text-indigo-800">Back</a>
            </div>
            <div>
                <a href="<?= base_url() ?>" class="text-indigo-600 hover:text-indigo-800">Home</a>
            </div>
        </div>
    </div>
</body>

</html>