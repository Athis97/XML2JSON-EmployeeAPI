<!DOCTYPE html>
<html>

<head>
    <title>Employee Registration Success</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Registration Successful</h1>
        <p class="text-green-500">The employee has been successfully registered.</p>
        <a href="<?= base_url('employee/register') ?>"
            class="mt-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700">Register
            Another Employee</a>

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