function myfunction(){
    window.location.href="main.html";
}

function myfunction2(){
    window.location.href="signin.html";
}

function Validate(){
var username=document.getElementById("username").value;
var password=document.getElementById("password").value;

if(username=="Nandini_V" && password=="nan34"){
window.open("admin.html");
}


else{
alert("You have entered an incorrect password");
}
}

function logout(){

if(window.confirm("Are you sure you want to logout?")){
window.location.href="index.html";
}
}

function contact(){
document.write("<h1><center><b>Application Submitted.Will contact soon....</b></center><h1>");
}

// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

function openPage(){
var x=document.getElementById("search").value;

if(x=="Network Terms To Learn"){
window.open("https://www.bookrix.com/book.html?bookID=kalai29_1498192564.8608660698#0,486,219312");
}

else if(x=="AutoBiography of Benjamin Franklin"){
  window.open("https://www.bookrix.com/book.html?bookID=priyankapothala_1310476607.1206469536#5400,450,67590");
  }

 else  if(x=="Network Terms To Learn"){
    window.open("https://www.encyclopedia.com/social-sciences-and-law/economics-business-and-labor/taxation/income-tax");
    }

    else if(x=="Maths class X Book"){
      window.open("https://ncert.nic.in/textbook.php?jemh1=0-15");
      }

      else if(x=="Hindustan Times"){
        window.open("https://epaper.hindustantimes.com/delhi?eddate=19/07/2022&pageid=440644");
        }

        else if(x=="Commodity boom"){
          window.open("https://businessindia.co/emagazine/commodity-boom");
          }

          else if(x=="Cambridge Dictionary"){
            window.open("https://dictionary.cambridge.org/");
            }

            else if(x=="Adventure Time"){
              window.open("https://readfullcomic.com/adventure-time-001/");
              }

              else if(x=="Rapunzel"){
                window.open("https://www.bookrix.com/book.html?bookID=bx.grimm_1277468145.4597229958#0,450,3240");
                }

                else if(x=="Riddles And Jokes"){
                  window.open("https://www.bookrix.com/book.html?bookID=mystery.butterfly_1345166534.0304279327#4374,486,6534");
                  }

                 else if(x=="Enid Blyton stories"){
                    window.open("https://www.bookrix.com/book.html?bookID=rs40ab2e7740e15_1384690878.8501899242#0,450,34836");
                    }

                    else if(x=="The Myths and Legends of Ancient Greece and Rome"){
                      window.open("https://archive.org/details/handbookofmythol00bereiala/page/32/mode/2up?view=theater");
                      }

                      else{
                      alert("The book is currently not available!");
                      }

}