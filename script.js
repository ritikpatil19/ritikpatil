
let base_url = "restaurant.php";
let dropDown = document.getElementById('menu');
let option;
let food = null;

dropDown.addEventListener("change",getItemData);

        $("document").ready(function(){
             getItemNameList();                   
        });

        function getItemNameList() {
            let List_url = base_url + "?req=menu_items";
            $.get(List_url,function(itemData,success){
                console.log(itemData.length);
                console.log(itemData[0].name);
                food = itemData;
                for(i=0; i<itemData.length; i++){
            		option = document.createElement('option');
            		option.text = itemData[i].name;
            		option.value = i;
            		dropDown.appendChild(option);
         		}      			
            });
        }

		function getItemData(e){

   			var selected = $(this).children("option:selected").val();
   			console.log(food[selected].id);
   			let foodId = food[selected].id;
   			let url = base_url + "?req=Food_Data&foodId="+foodId;
            	$.get(url,function(data,success){
                	console.log(data.name);

                document.querySelector(".menu-list").innerHTML=`<div class="panel panel-default"
													style="font-family:Times New Roman;
												font-size:20px;
												color:white;
												width:600px;
												padding-right:30px;
												text-align:left;
												display:block;
												margin-top:50px;
												margin-left: 60px;
												border-radius:10px;
												background-color:#a55c1b;
												background-image: linear-gradient(125deg, #000000 40%, #a55c1b 64%);">
				
				
				
				<div class="panel-heading" style="background-color:#a55c1b;
												color:white;
												background-image: linear-gradient(230deg, #000000 40%, #a55c1b 64%);">
				<center> <h2 class="panel-title"><br><b>Your Menu Description !!</b></h2></center>
				</div>
				<div class="panel-body">
				<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<ul class="list-group" style="color:black;">
						<li class="list-group-item"><b>Id</b>: `+data.id+`</li>
						<li class="list-group-item"><b>Short name</b>: `+data.short_name+`</li>
						<li class="list-group-item"><b>Name</b>: `+data.name+`</li>
						<li class="list-group-item"><b>Description</b>: `+data.description+`</li>
						<li class="list-group-item"><b>Price_small</b>: `+data.price_small+`</li>
						<li class="list-group-item"><b>Price_large</b>: `+data.price_large+`</li>
						<li class="list-group-item"><b>Small Portion Name</b>: `+data.small_portion_name+`</li>
						<li class="list-group-item"><b>Large Portion Name</b>:`+data.large_portion_name+` </li>
					</ul>
					
				</div>
				<div class="col-md-2">
				</div>
				</div>
				</div>
		</div>`;

           		 });	
       }
