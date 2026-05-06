<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Admin Dashboard</h1>

    <div class="list-group">
        <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
            View All Users (Admin Page)
        </a>
       <a href="{{ route('expert.users') }}" class="list-group-item list-group-item-action">
            View Users Questions (Expert Page)
        </a>
        <a href="{{ route('user.home') }}" class="list-group-item list-group-item-action">
            User Page - Create Post
        </a>
                {{-- <a href="{{ route('admin.users.questions') }}" class="btn btn-warning btn-sm"> --}}
        <a href="{{ route('admin.users.questions') }}" class="list-group-item list-group-item-action">
                        View Questions
                    </a>
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger" style="background-color: rgb(72, 188, 72); border-color: rgb(72, 188, 72);">Logout</button>
        </form>
    </div>

</div>
</body>
</html>
