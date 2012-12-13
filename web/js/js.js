function shouye1(){
		var shouye=document.all.item("daohang");
		if(shouye!=null){
    		for(var i=0;i<shouye.length;i++){
        		//alert(shouye.item(i).tagName);
    			shouye[i].onmouseover=function(){
					this.style.backgroundImage="url(../images/daohang2.jpg)";
					this.style.color="#000000";
					}
				shouye[i].onmouseout=function(){
					this.style.backgroundImage="url(../images/daohanganniu.jpg)";
					this.style.color="#ffffff";
				}
		}
	}
}