<!DOCTYPE html>
<html>
<head>
    <title>Upload XML File</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Upload XML File</h1>

        <?php if (session()->has('success')) : ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p><?= session('success') ?></p>
            </div>
        <?php endif; ?>

        <?php if (session()->has('error')) : ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p><?= session('error') ?></p>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('veh-avail/import') ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="xmlfile" accept=".xml">
            <button type="submit" class="mt-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded-md hover:bg-indigo-700">Upload</button>
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
