@extends('layouts.app')
<!--Responsive Web Design Principles Page-->
@section('content')
<h2>{{$title}}</h2>
<p>Today, there are many types of devices that can access the web. They range from large desktop computers to small mobile phones. These devices have different screen sizes, resolutions, and processing power. Responsive Web Design is an approach to designing web content that responds to the constraints of different devices. The page structure and CSS rules should be flexible to accommodate these differences. In general, design the page's CSS to your target audience. If you expect most of your traffic to be from mobile users, take a 'mobile-first' approach. Then add conditional rules for larger screen sizes. If your visitors are desktop users, then design for larger screens with conditional rules for smaller sizes. CSS gives you the tools to write different style rules, then apply them depending on the device displaying the page. This section will cover the basic ways to use CSS for Responsive Web Design.</p>
<h4>Upcoming Leasons</h4>
<ul class="list-group">
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/responsive-web-design-principles/create-a-media-query" target="_blank">Create a Media Query</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/responsive-web-design-principles/make-an-image-responsive/" target="_blank">Make an Image Responsive</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/responsive-web-design-principles/use-a-retina-image-for-higher-resolution-displays/" target="_blank">Use a Retina Image for Higher Resolution Displays</a></li>
        <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/responsive-web-design-principles/make-typography-responsive/" target="_blank">Make Typography Responsive</a></li>
</ul>
@endsection
