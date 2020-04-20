<html>
<body>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="538286388620-0622mfdso9s23ovmmj74j42aatmpj6f7.apps.googleusercontent.com">



<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
  var id = profile.getId();
}

print(id);

if ( id == "102789200110824530684")
{
print(" Hello Parvez");
}

</script>
</body>
</html> 