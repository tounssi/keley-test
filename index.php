<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
	<div class="container">
	 <div class="button">
	  <input type="radio" onclick="filterSelection('all')" name="category" checked> Tout Voir
	  <input type="radio" onclick="filterSelection('samsung')" name="category"> Samsung
	  <input type="radio" onclick="filterSelection('apple')" name="category"> Apple
	  <input type="radio" onclick="filterSelection('oneplus')" name="category"> OnePlus
	 </div> 
	 
	  <input id="searchterm" type="text" /> <button id="search">Rechercher</button>
	 <div id="results"></div>
	 
     <table class="table-products">
      <tr>
        <td class="col-sm">Produits</td>
        <td class="col-sm">Description</td>
        <td class="col-sm">Prix</td>
        <td class="col-sm">Poids</td>
		<td class="col-sm">Détails</td>
      </tr>
	 
      <tr>
        <td class="col-sm">
		 <div class="filterDiv samsung">
          <img class="product-image" src="https://thegoodguys.sirv.com/products/50047396/50047396_502911.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&format=png&png.optimize=true" alt="" />
         </div>
		</td>
        <td class="col-lg">
		 <div class="filterDiv samsung">
          <div class="product-title">
            <p>Smartphone Samsung S8 Plus</p>
          </div>
		 </div> 
        </td>
        <td class="col-sm"><div class="filterDiv samsung">909€</div></td>
        <td class="col-sm"><div class="filterDiv samsung">173g</div></td>
		<td class="col-sm"><div class="filterDiv samsung"><a href="produit.php">En savoir plus</a></div></td>
      </tr>
	  
	  <tr>
        <td class="col-sm">
		 <div class="filterDiv apple">
          <img class="product-image" src="https://www.lowyat.net/wp-content/uploads/2017/10/iPhone-X.jpg" alt="" />
		 </div> 
        </td>
        <td class="col-lg">
		 <div class="filterDiv apple">
          <div class="product-title">
            <p>Smartphone Iphone X</p>
          </div>
		 </div> 
        </td>
        <td class="col-sm"><div class="filterDiv apple">1159€</div></td>
        <td class="col-sm"><div class="filterDiv apple">174g</div></td>
		<td class="col-sm"><div class="filterDiv apple">En savoir plus</div></td>
      </tr>
	  
	  <tr>
        <td class="col-sm">
		 <div class="filterDiv oneplus">
          <img class="product-image" src="https://drop.ndtv.com/TECH/product_database/images/11162017104342PM_635_oneplus_5t.jpeg" alt="" />
         </div>
		</td>
        <td class="col-lg">
		 <div class="filterDiv oneplus">
          <div class="product-title">
            <p>Smartphone OnePlus 5T</p>
          </div>
		 </div> 
        </td>
        <td class="col-sm"><div class="filterDiv oneplus">499€</div></td>
        <td class="col-sm"><div class="filterDiv oneplus">162g</div></td>
		<td class="col-sm"><div class="filterDiv oneplus">En savoir plus</div></td>
      </tr>
	  
	  <tr>
        <td class="col-sm">
		 <div class="filterDiv samsung">
          <img class="product-image" src="https://s7d2.scene7.com/is/image/SamsungUS/SMG935edge_hero_102116?$product-details-jpg$" alt="" />
         </div>
		</td>
        <td class="col-lg">
		 <div class="filterDiv samsung">
          <div class="product-title">
            <p>Smartphone Samsung S7 Edge</p>
          </div>
		 </div> 
        </td>
        <td class="col-sm"><div class="filterDiv samsung">699€</div></td>
        <td class="col-sm"><div class="filterDiv samsung">152g</div></td>
		<td class="col-sm"><div class="filterDiv samsung">En savoir plus</div></td>
      </tr>
	  
	 </table>
	</div>
 
	<script type="text/javascript" src="script.js"></script>

   </body>
</html>	