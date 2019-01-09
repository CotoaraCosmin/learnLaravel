@extends('layouts.app')
<!--CSS Flexbox Page-->
@section('content')
<h2>{{$title}}</h2>
<p>A website's User Interface ("UI") has two components. First, there are the visual elements, such as colors, fonts, and images. Second, there is the placement or positioning of those elements. In Responsive Web Design, a UI layout must accommodate many different browsers and devices accessing the content.</p>
<p>CSS3 introduced Flexible Boxes, or flexbox, to create page layouts for a dynamic UI. It is a layout mode that arranges elements in a predictable way for different screen sizes and browsers. While somewhat new, all popular modern browsers support flexbox. This section covers how to use flexbox and the different layout options it offers.</p>
<h4>Upcoming Leasons</h4>
<ul class="list-group">
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-display-flex-to-position-two-boxes/" target="_blank">Use display: flex to Position Two Boxes</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/add-flex-superpowers-to-the-tweet-embed/" target="_blank">Add Flex Superpowers to the Tweet Embed</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-direction-property-to-make-a-row/" target="_blank">Use the flex-direction Property to Make a Row</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/apply-the-flex-direction-property-to-create-rows-in-the-tweet-embed/" target="_blank">Apply the flex-direction Property to Create Rows in the Tweet Embed</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-direction-property-to-make-a-column/" target="_blank">Use the flex-direction Property to Make a Column</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/apply-the-flex-direction-property-to-create-a-column-in-the-tweet-embed/" target="_blank">Apply the flex-direction Property to Create a Column in the Tweet Embed</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/align-elements-using-the-justify-content-property/" target="_blank">Align Elements Using the justify-content Property</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-justify-content-property-in-the-tweet-embed/" target="_blank">Use the justify-content Property in the Tweet Embed</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/align-elements-using-the-align-items-property/" target="_blank">Align Elements Using the align-items Property</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-align-items-property-in-the-tweet-embed/" target="_blank">Use the align-items Property in the Tweet Embed</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-wrap-property-to-wrap-a-row-or-column/" target="_blank">Use the flex-wrap Property to Wrap a Row or Column</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-shrink-property-to-shrink-items/" target="_blank">Use the flex-shrink Property to Shrink Items</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-grow-property-to-expand-items/" target="_blank">Use the flex-grow Property to Expand Items</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-basis-property-to-set-the-initial-size-of-an-item/" target="_blank">Use the flex-basis Property to Set the Initial Size of an Item</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-flex-shorthand-property/" target="_blank">Use the flex Shorthand Property</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-order-property-to-rearrange-items/" target="_blank">Use the order Property to Rearrange Items</a></li>
    <li class="list-group-item"><a href="https://learn.freecodecamp.org/responsive-web-design/css-flexbox/use-the-align-self-property/" target="_blank">Use the align-self Property</a></li>
</ul>
@endsection