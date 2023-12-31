<?php
include "crud_traitement.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add some custom styles for the modal and form */
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            z-index: 1000;
        }
    </style>
</head>

<body class="bg-gray-100 p-4">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Article Management</h1>

        <!-- Add Article Form -->
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-2">Add Article</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="title" name="title" class="w-full p-2 border rounded" placeholder="Enter article title">
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                    <textarea id="content" name="content" rows="4" class="w-full p-2 border rounded" placeholder="Enter article content"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Add Article</button>
            </form>
        </div>

        <!-- Display Articles -->
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-2">Articles</h2>
            <ul>
                <!-- Example Article -->
                <li class="mb-4">
                    <h3 class="text-lg font-bold">Article Title 1</h3>
                    <p class="text-gray-700">Article Content goes here...</p>
                    <div class="mt-2">
                        <button onclick="openEditModal()" class="bg-yellow-500 text-white p-2 rounded">Edit</button>
                        <button onclick="openDeleteModal()" class="bg-red-500 text-white p-2 rounded ml-2">Delete</button>
                    </div>
                </li>
                <!-- Repeat the above structure for each article -->
            </ul>
        </div>

        <!-- Edit Article Modal -->
        <div id="editModal" class="modal">
            <h2 class="text-xl font-bold mb-2">Edit Article</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="editTitle" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="editTitle" name="editTitle" class="w-full p-2 border rounded" placeholder="Enter updated title">
                </div>
                <div class="mb-4">
                    <label for="editContent" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                    <textarea id="editContent" name="editContent" rows="4" class="w-full p-2 border rounded" placeholder="Enter updated content"></textarea>
                </div>
                <button type="submit" class="bg-yellow-500 text-white p-2 rounded">Save Changes</button>
                <button onclick="closeEditModal()" class="bg-gray-500 text-white p-2 rounded ml-2">Cancel</button>
            </form>
        </div>

        <!-- Delete Article Modal -->
        <div id="deleteModal" class="modal">
            <h2 class="text-xl font-bold mb-2">Delete Article</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="deleteId" class="block text-gray-700 text-sm font-bold mb-2">Article ID:</label>
                    <input type="text" id="deleteId" name="deleteId" class="w-full p-2 border rounded" placeholder="Enter article ID to delete">
                </div>
                <button type="submit" class="bg-red-500 text-white p-2 rounded">Delete Article</button>
                <button onclick="closeDeleteModal()" class="bg-gray-500 text-white p-2 rounded ml-2">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        // JavaScript to handle modal display
        function openEditModal() {
            document.getElementById('editModal').style.display = 'block';
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        function openDeleteModal() {
            document.getElementById('deleteModal').style.display = 'block';
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
</body>

</html>