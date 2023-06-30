@extends('layouts.main')

@section('content')
<div class="container">
  <h2 class="about-heading">About Puppies Adopter</h2>
  <img src="https://www.akc.org/wp-content/uploads/2018/05/Three-Australian-Shepherd-puppies-sitting-in-a-field.jpg" alt="Puppies" class="about-image">
  <div class="about-content">
    <p>Puppies Shop is a place where you can find adorable puppies for sale. We specialize in a wide range of breeds and offer a loving environment for our puppies. Our mission is to connect loving families with their perfect furry companions.</p>
    <p>At Puppies Shop, we prioritize the health and well-being of our puppies. All our puppies are raised in a clean and caring environment, and they receive regular veterinary care. We ensure that our puppies are well-socialized and ready to become a part of your family.</p>
    <p>Visit our shop today and meet our friendly staff who will assist you in finding the perfect puppy for you and your family. We look forward to helping you find your new best friend!</p>
  </div>
</div>
@endsection

<style>
      body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
    }

    .about-heading {
      text-align: center;
      margin-bottom: 40px;
    }

    .about-image {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto;
      display: block;
    }

    .about-content {
      text-align: center;
      margin-top: 40px;
    }
</style>