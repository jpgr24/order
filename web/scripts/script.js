


jQuery(document).ready(function($){

 $("#men0").addClass("active") 

for(i=0;i<$("#menu li").length;i++){

console.log($("#men"+i).attr("href"))
if($("#men"+i).attr("href")==$('body').attr('id'))
  $("#men"+i).addClass("active")

}


$("#menu li a").click(function(){
  $("#menu li a").removeClass("active")
  $(this).addClass("active")
  $(".container-fluid").addClass("hid")
  $($(this).attr("href")).removeClass("hid")
  $("#myNavbar").removeClass("in")
});



 var row0=["alt.2600 and CaptNCrunchWhistle", "Anonymous", "Apache", "Atari", "AWS", "BASH", "BTC", "ChromeOS","DuckDuckGo", "PGP and FOSS", "FreeBSD", "MAME and FSF", "GNU", "Tor Onion Browswer and Html5/Css3", "JSON","KevinMitnick", "Kodi", "Linux/Tux", "Napster", "OpenBSD", "PGP", "Python","RedHat", "Raspberry Pi", "SSH", "VirtualBox/Oracle", "VLC/VideoLan", "VPN", "Windows/WinBlows/BSoD!"]


for(count=0;count<$("#favorite map area").length;count++){
  let ind=count
  $("#favorite map area").eq(ind).click(function(){
  $(".element").text(row0[ind])
});
}





});