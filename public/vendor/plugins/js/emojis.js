var elems = document.querySelectorAll("body *");
for (var i = 0; i < elems.length; i++) {
  if (elems[i].tagName !== "INPUT") {
    elems[i].innerHTML = elems[i].innerHTML

        //audition emojis code
      .replace(/(&amp;-_-&amp;)|(&amp;^_^&amp;)|(&amp;^^v&amp;)|(&amp;vvv&amp;)|(E40)/g
      , 
      
      //remplace audition emojis code to image
      function(match, p1, p2, p3, p4, p5) {
        if (p1) return "<img src='/img/emoticon/cbxx4-ur2nc.png'>";
        if (p2) return "<img src='/img/emoticon/cbxx4-ur2nc.png'>";
        if (p3) return "<img src='/img/emoticon/cbxx4-ur2nc.png'>";
        if (p4) return "<img src='/img/emoticon/em_design_e2.png'>";
        if (p5) return "<img src='/img/emoticon/cbxx4-ur2nc.png'>";
      })
  }
}