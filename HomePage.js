 expiration = new Date;
expiration.setMonth(expiration.getMonth()+6)
counter = eval(cookieVal("total_visited"))
counter++
document.cookie = "total_visited="+counter+";expires=" + expiration.toGMTString()
// Function to get the value of a cookie by name
function cookieVal(cookieName) {
// Split the document.cookie string into an array of individual cookies
    thisCookie = document.cookie.split("; ")
     // Loop through the array of cookies
    for (i=0; i<thisCookie.length; i++){
        // If the current cookie's name matches the requested cookie name
        if (cookieName == thisCookie[i].split("=")[0]){
            // Return the value of the cookie
            return thisCookie[i].split("=")[1]
        }
    }
    return 0;
}

document.getElementById('result').innerHTML = "<center><h3>Total number of visitors: <label style='font-size:40px;' class='text-info'>"+counter+"</label></h3></center>";