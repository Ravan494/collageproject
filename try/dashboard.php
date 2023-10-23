<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }
    .header {
      background-color: black;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }
    .container {
      display: flex;
      height: calc(100vh - 80px); /* Subtract header and footer height */
    }
    .sidebar {
    background-color: #141212;
    color: #ffffff;
    width: 20%;
    flex-basis: 20%;
    padding: 20px;
    overflow-y: auto;
}
    .sidebar h2 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 24px;
      text-transform: uppercase;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .sidebar li {
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    .sidebar a {
      color: #ffffff;
      text-decoration: none;
      display: block;
      padding: 10px 15px;
      border-radius: 5px;
      transition: all 1s ease;
      box-sizing: border-box;
      border: 2px solid transparent;

    }
    .sidebar a:hover {
    border: 2px solid gold;
    color: gold;
    box-sizing: border-box;
    padding-left: 30px;
}
    .content {
    flex-grow: 1;
    flex-basis: 80%;
    padding: 20px;
    width: 80%;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
}
    .content h2 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 28px;
      color: #333333;
    }
    .content p {
      margin-bottom: 20px;
      color: #666666;
    }
    .footer {
      background-color: black;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Dashboard</h1>
  </div>
  <div class="container">
    <div class="sidebar">
      <h2>Navigation</h2>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Settings</a></li>
        <!-- Add more navigation links here -->
      </ul>
    </div>
    <div class="content">
      <h2>Welcome to Your Dashboard</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lectus hendrerit, viverra ipsum vitae, tincidunt lacus. Suspendisse sit amet arcu et nulla fringilla maximus.</p>
      <p>Sed non ex malesuada, aliquet lorem ac, semper erat. Nam aliquam euismod sem vitae tempor. Nulla facilisi. Duis finibus libero a enim euismod aliquam.</p>
      <!-- Add more content here -->
      Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro, veniam fugiat facere cum in facilis, dolores eveniet impedit officia illum voluptas quam eos voluptatum sit quas aliquam neque. Corporis.
      Praesentium nulla ipsa, ipsam blanditiis facere unde placeat quas et iusto iure quibusdam doloremque corporis corrupti asperiores qui maiores. Alias consequuntur accusantium cum. Nam rerum necessitatibus aliquam! Facilis, commodi labore?
      Cumque minima voluptatem, velit veniam saepe iste quibusdam facere harum voluptatibus porro magnam eaque asperiores repellendus! Quia ullam libero incidunt vel consequatur qui suscipit enim nemo, nesciunt deserunt ab doloribus!
      Doloremque earum error repudiandae. Dolore quisquam vero sint velit quos possimus tempora deserunt mollitia molestias nisi, aliquam, tempore natus deleniti totam consectetur eaque, ut nemo assumenda fugiat animi. Veniam, incidunt.
      Quo, voluptatibus! Quod vitae omnis velit, voluptatibus obcaecati at illo maxime numquam voluptatum quos eligendi commodi molestias neque et pariatur. Eaque pariatur nulla quas ut animi aut eum ipsam iure.
      Dignissimos esse iure amet animi, vitae veniam sequi obcaecati expedita? Consectetur cumque, obcaecati ratione enim repellat nam, libero voluptas earum odio fugiat labore architecto, suscipit cupiditate ea sed consequuntur repudiandae?
      Non adipisci alias, ut iusto deleniti quas tenetur facere autem, praesentium nobis quasi illum aliquam officia voluptatem impedit optio. Dolorem nemo minus voluptatum dolore deserunt eos accusamus non! Consequatur, in.
      Laudantium odit recusandae natus deleniti excepturi error consequuntur, ab id dolor, optio autem saepe maxime dolorum perspiciatis dignissimos ad suscipit nihil! Nostrum, saepe fuga adipisci accusantium consequuntur fugiat laboriosam cum!
      Delectus beatae, porro veritatis accusamus aliquid iure dignissimos neque iusto perspiciatis odio quis eum necessitatibus molestias autem natus ipsa voluptate. Reprehenderit ipsam quasi rem deserunt accusantium incidunt tenetur ab voluptates?
      Iure, magni officia consequatur dicta perspiciatis ea? Voluptate laboriosam facilis pariatur quisquam unde? Laborum dolorem nostrum esse unde totam sit, animi nemo alias, aspernatur veniam laboriosam officiis neque iste est?
      Delectus dolorum mollitia cum modi quia harum, voluptatem nesciunt aspernatur doloremque itaque, ipsa quas. Enim, suscipit. Voluptas in dolores vero et, ad labore nisi commodi eos maiores, amet quibusdam ipsam.
      Quia consectetur possimus exercitationem laboriosam nostrum voluptates velit dolore soluta culpa. Nostrum eligendi laboriosam quos eum, mollitia alias! Illum fugit aut fuga nisi laborum accusamus perferendis suscipit officiis facilis maiores.
      Voluptatum, rem voluptates necessitatibus cupiditate laboriosam explicabo earum! Ut fuga ex quibusdam voluptas doloremque consequatur maxime! A ex blanditiis officiis neque! Eos ratione esse quam commodi, ex a nesciunt maiores.
      Minus, atque deserunt! Ipsum quisquam laborum neque, delectus, eius ipsa repellat in totam expedita consectetur similique eum beatae labore incidunt? Nihil natus, qui earum optio quod quasi! Aperiam, quos. Placeat.
      Architecto sapiente possimus expedita nobis tempore vitae fugiat corporis cumque natus ipsum officia labore quidem quisquam repellendus, quas perferendis sit cupiditate aperiam assumenda consequuntur optio commodi nihil velit neque? Temporibus.
     
      Numquam, ea corporis modi excepturi quos a, provident repellendus blanditiis voluptatum distinctio quisquam laborum asperiores non porro mollitia quibusdam. Dolorum, modi in facilis illo quam repudiandae tempore cumque aliquid maxime.
      Omnis praesentium aperiam tenetur repellendus? Doloribus ea maxime voluptates reiciendis. Similique voluptas eligendi placeat illum amet officiis eaque esse mollitia dignissimos ab, velit distinctio quis quaerat, corrupti vitae incidunt accusantium.
      Eum vero vitae fuga fugit quo dicta odit explicabo, repellat cupiditate magnam alias omnis voluptate quas praesentium? Fuga, necessitatibus quia sunt accusantium ullam quod unde possimus architecto accusamus nisi maxime?
      Molestias explicabo nam reiciendis, culpa, error impedit sequi animi distinctio voluptatem repudiandae, facere quod consequuntur autem? Magni rerum dignissimos dicta beatae! Quibusdam quam aliquid numquam ipsam cum eligendi rerum consectetur!
    </div>
  </div>
  <div class="footer">
    &copy; 2023 Dashboard. All rights reserved.
  </div>
</body>
</html>
