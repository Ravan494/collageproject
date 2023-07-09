<!DOCTYPE html>
<html>
<head>
  <title>Product Upload Form</title>
  <style>
    body {
      background-color: #f5f5f5;
      color: #333333;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      color: #333333;
      text-align: center;
      margin-top: 30px;
      text-transform: uppercase;
    }
    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #333333;
      text-transform: uppercase;
    }
    .form-control {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #cccccc;
      background-color: #f9f9f9;
      color: #333333;
    }
    .form-control:focus {
      outline: none;
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    .btn-submit {
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      background-color: #007bff;
      color: #ffffff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-submit:hover {
      background-color: #0056b3;
    }
    .form-note {
      margin-top: 10px;
      font-size: 12px;
      color: #666666;
    }
  </style>
</head>
<body>
<div class="container">
    <h1>Product Upload Form</h1>
    <form action="process_upload.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="form-label" for="title">Title:</label>
        <input class="form-control" type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label class="form-label" for="price">Price:</label>
        <input class="form-control" type="number" id="price" name="price" step="0.01" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="condition">Condition:</label>
        <select class="form-control" id="condition" name="condition" required>
          <option value="New">New</option>
          <option value="Used">Used</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="image">Image:</label>
        <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="category">Category:</label>
        <select class="form-control" id="category" name="category" required>
          <option value="1">Category 1</option>
          <option value="2">Category 2</option>
          <!-- Add more options based on your category list -->
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="rentPrice">Rent Price:</label>
        <input class="form-control" type="number" id="rentPrice" name="rentPrice" step="0.01">
      </div>
      <div class="form-group">
        <label class="form-label" for="rentDuration">Rent Duration:</label>
        <input class="form-control" type="number" id="rentDuration" name="rentDuration">
      </div>
      <div class="form-group">
        <label class="form-label" for="availableForRent">Available for Rent:</label>
        <input class="form-control" type="checkbox" id="availableForRent" name="availableForRent">
      </div>
      <div class="form-group">
        <button class="btn-submit" type="submit">Upload Product</button>
      </div>
    </form>
  </div>
</body>
</html>
