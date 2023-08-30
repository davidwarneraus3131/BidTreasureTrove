"upload/ring/1_a579e0b7-9175-4525-909d-84660aef76ec_300x300_crop_center2.jpg
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<canvas id="canvas"></canvas>
<?php
$image_path = 'upload/ring/ebf2f19d97619fbfb48c6d2e5c197996_300x300_crop_center.jpg'; // Change this to the path of your image

// Generate the JavaScript code to render the 360-degree image
echo "<script>
var canvas = document.getElementById('canvas');
var renderer = new THREE.WebGLRenderer({ canvas: canvas });
var camera = new THREE.PerspectiveCamera(95, canvas.width / canvas.height, 1, 1000);
var scene = new THREE.Scene();
var texture = new THREE.TextureLoader().load('$image_path');
texture.wrapS = THREE.RepeatWrapping;
texture.repeat.set( 2, 1 );
var geometry = new THREE.SphereGeometry(500, 60, 40);
var material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
var mesh = new THREE.Mesh(geometry, material);
scene.add(mesh);
camera.position.set(0, 0, 0.1);

function animate() {
  requestAnimationFrame(animate);
  mesh.rotation.y += 0.005;
  renderer.render(scene, camera);
}
animate();
</script>";
?>

















<style>button.navigation-arrow {
    opacity: 1;
    visibility: visible;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out
}

button.navigation-arrow.exiting {
    opacity: 0
}

button.navigation-arrow.exited {
    visibility: hidden;
    opacity: 0;
    display: none
}

button.navigation-arrow .icon-component {
    overflow: hidden;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    width: 18px;
    height: 10px
}

button.navigation-arrow .icon-component svg {
    width: 100%;
    height: 100%
}

button.navigation-arrow .icon-component svg path {
    fill: #0024d6
}

button.navigation-arrow.down .icon-component {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg)
}

button.navigation-arrow.left .icon-component {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

button.navigation-arrow.up .icon-component {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.thumbnails {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    padding-top: 8px;
    margin: 0 auto
}

@media (min-width: 600px) {
    .thumbnails {
        padding-top:16px
    }
}

@media (min-width: 850px) {
    .thumbnails {
        width:100px;
        padding-top: 0;
        padding-right: 10px;
        margin: 0
    }
}

.thumbnails .view-window {
    overflow: visible;
    position: relative;
    padding: 0 0 2px;
    box-sizing: content-box
}

@media (min-width: 850px) {
    .thumbnails .view-window {
        padding:0 0 0 4px
    }
}

.thumbnails .view-window>.navigation-arrow:not(.exited) {
    display: none
}

@media (min-width: 600px) {
    .thumbnails .view-window>.navigation-arrow:not(.exited) {
        padding:0 16px 0 0;
        box-sizing: content-box;
        cursor: pointer;
        position: absolute;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-items: center;
        width: 48px;
        height: 50px;
        min-width: 48px;
        min-height: 48px;
        transition: opacity .4s
    }
}

@media (min-width: 850px) {
    .thumbnails .view-window>.navigation-arrow:not(.exited) {
        width:80px;
        height: 76px;
        min-width: 76px;
        min-height: 76px;
        padding: 0 0 16px
    }
}

.thumbnails .view-window>.navigation-arrow:not(.exited).forward {
    bottom: 0;
    right: 0
}

.thumbnails .view-window>.navigation-arrow:not(.exited).back {
    top: 0;
    left: 0
}

.thumbnails .icon-component {
    overflow: hidden;
    width: 18px
}

.thumbnails .thumbnail-wrapper {
    cursor: pointer;
    padding-right: 8px;
    box-sizing: content-box;
    display: flex;
    align-items: center;
    justify-items: center
}

@media (min-width: 600px) {
    .thumbnails .thumbnail-wrapper {
        padding-right:16px
    }
}

@media (min-width: 850px) {
    .thumbnails .thumbnail-wrapper {
        padding-right:0;
        padding-bottom: 16px
    }
}

.thumbnails .thumbnail-wrapper .icon-component {
    display: flex;
    align-items: center;
    width: 100%;
    height: 48px
}

@media (min-width: 850px) {
    .thumbnails .thumbnail-wrapper .icon-component {
        height:76px
    }
}

.thumbnails .thumbnail-wrapper .icon-component svg {
    height: 40px
}

@media (min-width: 850px) {
    .thumbnails .thumbnail-wrapper .icon-component svg {
        height:51px
    }
}

.thumbnails .thumbnail-wrapper .icon-component path {
    fill: #100e31
}

.thumbnails .thumbnail-wrapper .rpr-icon {
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
    text-align: center;
    font-size: 8.75px;
    line-height: 10px;
    width: 100%
}

.thumbnails .thumbnail-wrapper .rpr-icon .icon-component {
    margin: 0 auto;
    width: 18.9px;
    height: 18.9px
}

.thumbnails .thumbnail-wrapper .diamond-360.icon {
    width: 40px;
    height: 40px
}

@media (min-width: 850px) {
    .thumbnails .thumbnail-wrapper .diamond-360.icon {
        width:55px;
        height: 55px
    }
}

.thumbnails.vertical .thumbnail-wrapper .rpr-icon {
    font-size: 11.375px;
    line-height: 13px
}

.thumbnails.vertical .thumbnail-wrapper .rpr-icon .icon-component {
    width: 31px;
    height: 31px
}

.thumbnails .selected-indicator {
    background-color: #0024d6;
    position: absolute;
    width: 48px;
    height: 2px;
    left: auto;
    bottom: 0;
    transition: all .4s
}

@media (min-width: 850px) {
    .thumbnails .selected-indicator {
        width:4px;
        height: 76px;
        left: -4px;
        bottom: auto
    }
}

.thumbnails .animation-wrapper {
    display: inline-flex;
    flex-direction: row;
    position: absolute;
    flex-wrap: nowrap;
    transition: transform .4s
}

@media (min-width: 850px) {
    .thumbnails .animation-wrapper {
        flex-direction:column
    }
}

.thumbnails .animation-wrapper>button,.thumbnails .animation-wrapper>div {
    display: flex;
    width: 48px;
    height: 48px;
    min-width: 48px;
    min-height: 48px;
    align-content: center;
    justify-content: center;
    outline: 0
}

@media (min-width: 850px) {
    .thumbnails .animation-wrapper>button,.thumbnails .animation-wrapper>div {
        width:76px;
        height: 76px;
        min-width: 76px;
        min-height: 76px
    }
}

.thumbnails .animation-wrapper>button:focus>*,.thumbnails .animation-wrapper>div:focus>* {
    box-shadow: 0 0 0 1px #fff;
    outline: 2px solid #b68c3e;
    outline-offset: 2px
}

body.no-focus-outline .thumbnails .animation-wrapper>button:focus>*,body.no-focus-outline .thumbnails .animation-wrapper>div:focus>*,div.alloy .thumbnails .animation-wrapper>button:focus>*,div.alloy .thumbnails .animation-wrapper>div:focus>* {
    outline: none;
    box-shadow: none;
    outline-offset: 0
}

.thumbnails .animation-wrapper>button>img,.thumbnails .animation-wrapper>div>img {
    align-self: center;
    justify-self: center;
    max-width: 100%;
    width: 48px;
    display: block
}

@media (min-width: 850px) {
    .thumbnails .animation-wrapper>button>img,.thumbnails .animation-wrapper>div>img {
        width:100%
    }
}

.thumbnails.interacting.has-moved .view-window .animation-wrapper,.thumbnails.interacting.has-moved .view-window .selected-indicator {
    transition: none
}

.swipeable-items {
    overflow: hidden
}

.swipeable-items .view-window {
    position: relative
}

.swipeable-items .view-window .animation-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row
}

.swipeable-items .view-window .animation-wrapper .swipeable-item {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-flex-basis: 100%;
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.swipeable-items .view-window .back,.swipeable-items .view-window .forward {
    z-index: 1;
    left: 0;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.swipeable-items .view-window .forward {
    left: auto;
    right: 0
}

.swipeable-items:not(.interacting) .animation-wrapper {
    -webkit-transition: -webkit-transform .25s;
    transition: -webkit-transform .25s;
    transition: transform .25s;
    transition: transform .25s,-webkit-transform .25s
}

.label-component {
    -webkit-border-radius: 4px;
    border-radius: 4px;
    padding: 1px 8px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 8.75px;
    text-align: center;
    letter-spacing: .5px;
    color: #fff;
    background-color: #757575
}

.label-component.success {
    background-color: #1b8362
}

.label-component.warning {
    background-color: #b68c3e
}

.label-component.alert {
    background-color: #eb1000
}

.label-component.new {
    border: 1px solid #100e31;
    color: #100e31;
    background-color: #e6f6e9
}

.zoomable-image-wrapper {
    position: relative
}

.zoomable-image-wrapper.focusable:focus {
    outline-offset: -2px
}

.zoomable-image-wrapper img {
    width: 100%;
    display: block;
    -webkit-user-drag: none;
    -o-object-fit: contain;
    object-fit: contain
}

.zoomable-image-wrapper img.zoomed {
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-50%,-50%)
}

.zoomable-image-wrapper img.measuring {
    position: absolute;
    width: auto!important;
    visibility: hidden
}

.replacement-template {
    width: 100%;
    height: 100%
}

.replacement-template .zoomable-image-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    height: 100%;
    opacity: 1
}

.replacement-template .zoomable-image-wrapper>.unzoomed {
    position: relative;
    width: 100vw;
    display: block
}

@media (min-width: 600px) {
    .replacement-template .zoomable-image-wrapper>.unzoomed {
        width:63vw;
        max-width: 500px;
        min-width: 380px
    }
}

@media (min-width: 850px) {
    .replacement-template .zoomable-image-wrapper>.unzoomed {
        width:100%
    }
}

.replacement-template .zoomable-image-wrapper>.unzoomed.hover {
    position: absolute
}

.replacement-template.smaller .zoomable-image-wrapper>.unzoomed {
    width: 100vw
}

@media (min-width: 600px) {
    .replacement-template.smaller .zoomable-image-wrapper>.unzoomed {
        width:62.5vw;
        max-width: 500px;
        min-width: 380px
    }
}

@media (min-width: 850px) {
    .replacement-template.smaller .zoomable-image-wrapper>.unzoomed {
        width:100%;
        max-width: 500px
    }
}

.image-player-container {
    overflow: hidden;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    max-width: 599px
}

.image-player-container .icon-component path {
    fill: #0024d6
}

.image-player-container .canvas-image-player {
    cursor: -webkit-grab;
    cursor: grab;
    display: block;
    max-width: 100%;
    max-height: 100%;
    position: relative
}

.image-player-container .canvas-image-player:focus {
    outline-offset: -2px
}

.image-player-container .canvas-image-player.interacting {
    cursor: -webkit-grabbing;
    cursor: grabbing
}

.image-player-container .canvas-image-player+.placeholder {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%
}

.image-player-container.initialized .canvas-image-player {
    display: block
}

.image-player-container.initialized .canvas-image-player+img.placeholder {
    display: none
}

.image-player-container .image-player-controls {
    background-color: transparent;
    cursor: pointer;
    width: -webkit-calc(100% - 4px);
    width: calc(100% - 4px);
    height: 48px;
    position: absolute;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    left: 2px;
    bottom: 2px
}

.image-player-container .image-player-controls>button {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center;
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    outline-offset: -2px
}

.image-player-container .image-player-controls>button .icon-component {
    width: 26px;
    justify-self: center;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center
}

.image-player-container .image-player-controls>button.play-pause .icon-component {
    width: 20px
}

.image-player-container .image-player-controls>button.play-pause .icon-component.play {
    width: 18px
}

.image-player-container .image-player-controls>button.play-pause .icon-component.pause {
    display: none
}

.image-player-container.playing .image-player-controls>button.play-pause .icon-component.pause {
    display: inline-block
}

.image-player-container.playing .image-player-controls>button.play-pause .icon-component.play {
    display: none
}

.customer-creations {
    position: relative
}

.customer-creations .stats-description {
    position: relative;
    width: 100%;
    max-width: 500px;
    min-height: 65px;
    font-size: 12.25px;
    color: #4a4a4a;
    margin: auto
}

@media (max-width: 599.9px) {
    .customer-creations .stats-description {
        display:flex
    }
}

.customer-creations .count {
    position: absolute;
    right: 4px;
    top: -12px
}

@media (min-width: 600px) {
    .customer-creations .count {
        top:4px
    }
}

.customer-creations .text {
    display: flex;
    flex-direction: column;
    transition: opacity .5s;
    padding: 5px 16px;
    text-align: center;
    font-size: 12.25px;
    max-width: 300px;
    margin: auto
}

@media (min-width: 600px) {
    .customer-creations .text {
        max-width:430px
    }
}

.customer-creations .text .stats-label {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    white-space: nowrap
}

@media (min-width: 600px) {
    .customer-creations.recently_purchased_rings .text {
        flex-direction:row;
        text-align: left
    }
}

@media (min-width: 600px) {
    .customer-creations.recently_purchased_rings .text .stats {
        display:none
    }
}

.customer-creations.recently_purchased_rings .text .stats.not-small {
    display: none
}

@media (min-width: 600px) {
    .customer-creations.recently_purchased_rings .text .stats.not-small {
        display:block
    }
}

@media (min-width: 600px) {
    .customer-creations.recently_purchased_rings .text .stats-label {
        padding-right:20px
    }
}

.customer-creations.band_matcher .img-or-viewer>img {
    max-width: 400px;
    margin: auto
}

.customer-creations .swipeable-items {
    overflow: visible
}

.customer-creations .swipeable-items .swipeable-item {
    max-height: 460px;
    opacity: .5;
    transition: opacity .25s;
    margin: auto
}

.customer-creations .swipeable-items .swipeable-item.selected {
    opacity: 1
}

@media (min-width: 600px) {
    .customer-creations .swipeable-items .swipeable-item .img-or-viewer .canvas-image-player {
        max-height:460px
    }
}

.customer-creations .swipeable-items .swipeable-item .img-or-viewer>img {
    display: block;
    width: 100%
}

@media (max-width: 599.9px) {
    .customer-creations .swipeable-items .navigation-arrow {
        top:auto;
        bottom: -50px
    }
}

.slides-wrapper .non-zoomable-image-wrapper {
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-content: center
}

.slides-wrapper .non-zoomable-image-wrapper>.unzoomed.main {
    position: relative;
    align-self: center;
    width: 90vw;
    max-width: 388px;
    min-width: 288px
}

@media (min-width: 600px) {
    .slides-wrapper .non-zoomable-image-wrapper>.unzoomed.main {
        width:62.5vw;
        max-width: 500px;
        min-width: 380px
    }
}

@media (min-width: 850px) {
    .slides-wrapper .non-zoomable-image-wrapper>.unzoomed.main {
        width:100%;
        max-width: 500px
    }
}

.slides-wrapper .non-zoomable-image-wrapper>.unzoomed.main>img {
    width: 100%;
    display: block
}

.range-slider-wrapper {
    cursor: pointer;
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    position: relative
}

.range-slider-wrapper .step {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-items: center;
    z-index: 2
}

.range-slider-wrapper .step .icon-component.plus {
    height: 14px
}

.range-slider-wrapper .step .icon-component.minus {
    height: 9px
}

.range-slider-wrapper .step.grayed-out svg path {
    fill: #d5d7d8
}

.range-slider-wrapper .tooltip {
    background-color: #fff;
    border: 1px solid #d5d7d8;
    color: #100e31;
    line-height: 30px;
    font-size: 12.25px;
    letter-spacing: .44px;
    font-variant-numeric: lining-nums;
    padding: 0;
    position: absolute;
    width: 70px;
    height: 30px;
    display: flex!important;
    align-content: center;
    justify-content: center;
    box-shadow: 0 1px 1px 0 #d5d7d8;
    margin-left: 50%;
    transform: translateX(-50%);
    bottom: 100%;
    margin-bottom: 10px
}

@media (min-width: 850px) {
    .range-slider-wrapper .tooltip {
        bottom:auto;
        top: 100%;
        margin: 10px 0 0 50%
    }
}

.range-slider-wrapper .tooltip:after,.range-slider-wrapper .tooltip:before {
    display: block;
    position: absolute;
    content: " ";
    height: 0;
    width: 0;
    border: 8px solid transparent;
    left: 50%;
    margin-left: -8px;
    top: 100%
}

@media (min-width: 850px) {
    .range-slider-wrapper .tooltip:after,.range-slider-wrapper .tooltip:before {
        top:auto;
        bottom: 100%
    }
}

.range-slider-wrapper .tooltip:before {
    border-top-color: #d5d7d8
}

@media (min-width: 850px) {
    .range-slider-wrapper .tooltip:before {
        border-top-color:transparent;
        border-bottom-color: #d5d7d8
    }
}

.range-slider-wrapper .tooltip:after {
    border-top-color: #fff;
    margin-top: -1px
}

@media (min-width: 850px) {
    .range-slider-wrapper .tooltip:after {
        border-top-color:transparent;
        border-bottom-color: #fff;
        margin-bottom: -1px
    }
}

.range-slider-wrapper .track-wrapper {
    display: block;
    width: 100%
}

.range-slider-wrapper .track {
    height: 84px;
    width: 100%;
    position: relative;
    margin: 15px 0;
    z-index: 1
}

.range-slider-wrapper .track:before {
    border-radius: 2px;
    display: block;
    content: " ";
    width: 4px;
    height: calc(100% + 30px);
    position: absolute;
    left: calc(50% - 2px);
    background-color: #100e31;
    top: -15px;
    z-index: 1
}

.range-slider-wrapper .track .thumb-holder {
    position: relative;
    height: 100%;
    width: 100%;
    z-index: 2
}

.range-slider-wrapper .track .thumb {
    height: 30px;
    width: 30px;
    border-radius: 30px;
    position: absolute;
    bottom: -15px;
    left: 5px;
    background: #f6f6f6;
    border: 0 solid #888;
    box-shadow: 0 1px 1px 0 rgba(74,74,74,.7)
}

.range-slider-wrapper.horizontal {
    flex-direction: row
}

.range-slider-wrapper.horizontal .track-wrapper {
    width: auto
}

.range-slider-wrapper.horizontal .track {
    height: 40px;
    width: 258px;
    margin: 0 15px
}

.range-slider-wrapper.horizontal .track:before {
    height: 4px;
    width: calc(100% + 30px);
    top: 18px;
    left: -15px
}

.range-slider-wrapper.horizontal .thumb {
    left: -15px;
    bottom: 5px
}

.zoom-controls {
    cursor: pointer;
    display: flex;
    position: absolute;
    width: 48px;
    margin-right: 16px;
    bottom: 16px;
    align-items: center;
    flex-direction: column-reverse;
    z-index: 5
}

@media (min-width: 600px) {
    .zoom-controls {
        margin-right:0
    }
}

@media (min-width: 850px) {
    .zoom-controls {
        bottom:0!important;
        right: 0!important
    }
}

.zoom-controls .icon-component {
    width: 14px
}

.zoom-controls .icon-component.plus {
    height: 14px
}

.zoom-controls .icon-component.minus {
    height: 3.5px
}

.zoom-controls .zoom-on-off {
    cursor: pointer;
    width: 48px;
    height: 48px;
    text-align: center;
    display: flex
}

.zoom-controls .zoom-on-off .icon-component {
    width: 24px;
    height: 24px
}

.zoom-controls .zoom-on-off .icon-component path {
    fill: #100e31
}

.diamond-size-changer {
    display: flex;
    justify-content: center
}

.replacement-template-changer {
    display: inline-block;
    flex-direction: row;
    position: relative;
    padding-right: 48px;
    overflow: visible;
    cursor: pointer
}

.replacement-template-changer .items-container {
    overflow: hidden;
    transition: all .25s
}

.replacement-template-changer .items-container.open {
    overflow: visible
}

.replacement-template-changer .items-container .tooltip-component {
    color: #4a4a4a;
    margin-top: -10px
}

.replacement-template-changer .items-container.closed .tooltip-component {
    opacity: 0!important;
    display: none!important
}

.replacement-template-changer .items-container .items {
    display: flex;
    flex-direction: row;
    overflow: visible;
    transition: all .25s;
    flex-shrink: 0;
    padding: 0;
    list-style: none
}

.replacement-template-changer .items-container .items .item {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative
}

.replacement-template-changer .items-container .items .item:after {
    position: absolute;
    display: block;
    content: " ";
    background-color: #d5d7d8;
    width: 32px;
    height: 2px;
    top: 46px;
    left: 8px;
    opacity: 0;
    transition: opacity .5s
}

.replacement-template-changer .items-container .items .item:hover:after {
    opacity: 1
}

.replacement-template-changer .items-container.closed .items .item:after {
    display: none
}

.replacement-template-changer .open-close {
    width: 48px;
    height: 48px;
    display: flex;
    justify-content: center;
    align-content: center;
    position: absolute;
    top: 0;
    right: 0;
    transition: transform .25s;
    transform: rotate(-90deg)
}

.replacement-template-changer .open-close.open {
    transform: rotate(90deg)
}

.replacement-template-changer .open-close .icon-component {
    height: 6px;
    width: 100%
}

.replacement-template-changer .open-close .icon-component svg {
    height: 100%
}

.replacement-template-changer .open-close .icon-component svg path {
    fill: #0024d6
}

.replacement-template-changer .selected-indicator {
    width: 48px;
    height: 2px;
    position: absolute;
    left: 8px;
    top: 46px;
    transition: all .25s;
    opacity: 0
}

.replacement-template-changer .selected-indicator.open {
    opacity: 1
}

.replacement-template-changer .selected-indicator:after {
    background-color: #0024d6;
    content: " ";
    display: block;
    width: 32px;
    height: 2px
}

.diamond-shape-changer {
    padding: 0;
    left: 50%;
    transform: translateX(-50%)
}

.diamond-shape-changer .items {
    flex-wrap: wrap
}

.diamond-shape-changer .open-close {
    display: none
}

@media (min-width: 600px) {
    .diamond-shape-changer {
        padding-right:48px;
        left: auto;
        transform: none
    }

    .diamond-shape-changer .items {
        flex-wrap: nowrap
    }

    .diamond-shape-changer .open-close {
        display: flex
    }
}

.diamond-shape-changer .item .tooltip-container img {
    display: block;
    width: 32px;
    height: 32px
}

.hand-image-changer {
    padding: 0;
    left: 50%;
    transform: translateX(-50%)
}

.hand-image-changer .items {
    flex-wrap: wrap
}

.hand-image-changer .open-close {
    display: none
}

@media (min-width: 600px) {
    .hand-image-changer {
        position:relative;
        padding-right: 48px;
        top: auto;
        left: auto;
        transform: none
    }

    .hand-image-changer .open-close {
        display: flex
    }
}

.hand-image-changer .hand-image {
    height: 28px;
    width: 28px;
    border: 1px solid #757575
}

.hand-image-changer .hand-image.Tophand_ST1 {
    background-color: #feeadb
}

.hand-image-changer .hand-image.Tophand_ST2 {
    background-color: #ba9982
}

.hand-image-changer .hand-image.Tophand_ST3 {
    background-color: #7b4f32
}

.image-viewer-plus .small-controls-modal {
    height: 0;
    width: 0;
    position: fixed;
    background-color: #fff;
    overflow: hidden;
    transition: all .5s
}

@media (min-width: 600px) {
    .image-viewer-plus .small-controls-modal {
        display:none
    }
}

.image-viewer-plus .small-controls-modal.open {
    border: 1px solid #f6f6f6;
    left: -1px!important;
    top: -1px!important;
    width: calc(100vw + 1px);
    height: calc(100vh + 1px)
}

.image-viewer-plus .small-controls-modal .modal-inner {
    box-sizing: content-box;
    position: relative;
    padding: 10px;
    height: calc(100vh - 20px);
    width: calc(100vw - 20px)
}

.image-viewer-plus .small-controls-modal .modal-inner .replacement-template {
    height: auto;
    position: relative
}

.image-viewer-plus .small-controls-modal .modal-inner .replacement-template .unzoomed {
    position: relative;
    top: 0;
    left: 0;
    transform: none
}

.image-viewer-plus .small-controls-modal .modal-inner .item .tooltip-component {
    display: none!important
}

.image-viewer-plus .small-controls-modal .close-container {
    position: absolute;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    top: 0;
    right: 0
}

.image-viewer-plus .small-controls-modal .close-container .icon-component {
    width: 14px;
    height: 14px
}

.image-viewer-plus .small-controls-modal .shape-label {
    color: #4a4a4a;
    border-top: 1px solid #d5d7d8;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: .5px;
    text-align: center;
    padding: 10px;
    width: 240px;
    margin: 15px auto 0;
    font-size: 14px
}

.image-viewer-plus .small-controls-modal .diamond-size-changer {
    margin-top: 24px;
    position: relative;
    left: 0;
    transform: translateX(0);
    justify-content: center
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track {
    height: auto;
    width: 60px;
    border: 0;
    background: none
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track:before {
    display: none
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track .thumb-holder {
    transform: translateX(50%)!important
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track .thumb-holder .thumb {
    background: none;
    border-radius: 0;
    box-shadow: none;
    bottom: auto;
    top: calc(100% + 25px)
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track .thumb-holder .thumb .tooltip {
    border: 0;
    box-shadow: none;
    font-size: 14px;
    color: #4a4a4a;
    letter-spacing: .5px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.image-viewer-plus .small-controls-modal .diamond-size-changer .track .thumb-holder .thumb .tooltip:after,.image-viewer-plus .small-controls-modal .diamond-size-changer .track .thumb-holder .thumb .tooltip:before {
    display: none
}

.selected-message-diamond-shape {
    display: flex;
    flex-direction: row;
    white-space: nowrap;
    height: 48px;
    align-items: center;
    position: relative;
    width: 500px
}

.selected-message-diamond-shape img {
    width: 32px;
    height: 32px
}

.selected-message-diamond-shape .message {
    color: #4a4a4a;
    padding-left: 5px
}

* {
    box-sizing: border-box
}

.image-viewer-plus {
    display: flex;
    flex-direction: column-reverse;
    align-items: flex-start;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-variant-numeric: lining-nums;
    width: 100%;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    max-height: 600px
}

@media (min-width: 600px) {
    .image-viewer-plus {
        max-width:500px;
        margin: auto
    }
}

@media (min-width: 850px) {
    .image-viewer-plus {
        max-width:700px;
        max-height: 700px;
        margin: inherit;
        flex-direction: row
    }
}

.image-viewer-plus .background-fix {
    background: url("data:image/png;base64, wolQTkcNChoKAAAADUlIRFIAAAABAAAAAQgGAAAAHxXDhMKJAAAACklEQVR4AWMAAQAABQABNsOQwojDnQAAAABJRU5Ewq5CYMKC") repeat
}

.image-viewer-plus .add-remove-heart-container {
    z-index: 3
}

.image-viewer-plus div.image-player-controls div.icon-component.frame-backward,.image-viewer-plus div.image-player-controls div.icon-component.frame-forward {
    width: 22px
}

.image-viewer-plus div.image-player-controls div.icon-component.pause,.image-viewer-plus div.image-player-controls div.icon-component.play {
    width: 16px
}

.image-viewer-plus div.image-player-controls div.icon-component>svg {
    height: 100%
}

.image-viewer-plus .small-controls {
    position: absolute;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    bottom: 0;
    margin-left: 16px;
    z-index: 1
}

.image-viewer-plus .small-controls:empty {
    display: none
}

@media (min-width: 600px) {
    .image-viewer-plus .small-controls {
        display:none
    }
}

.image-viewer-plus .small-controls .icon-component {
    width: 16px
}

.image-viewer-plus .small-controls .icon-component path {
    fill: #100e31
}

.image-viewer-plus .info-selected-message .tooltip-component {
    white-space: nowrap;
    padding-top: 10px;
    padding-right: 50px;
    margin-left: -13px;
    z-index: 0
}

.image-viewer-plus .info-selected-message .tooltip-component .close-button {
    right: 15px;
    top: 50%;
    transform: translateY(-50%)
}

.image-viewer-plus .info-selected-message .tooltip-component .close-button path {
    fill: #0024d6
}

.image-viewer-plus .info-selected-message .tooltip-container>div:not(.tooltip-component) {
    position: relative;
    z-index: 1
}

.image-viewer-plus .info-selected-message .icon-component.info-large {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center
}

.image-viewer-plus .info-selected-message .icon-component.info-large svg {
    width: 20px
}

.image-viewer-plus .info-selected-message .icon-component.info-large svg path:first-child {
    fill: none
}

.image-viewer-plus .image-area {
    position: relative;
    max-width: 100vw;
    width: 100%;
    min-width: 288px;
    margin: 0 auto
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area {
        max-width:500px;
        min-width: 380px
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area {
        margin:0;
        max-width: 600px;
        width: calc(100% - 90px)
    }
}

.image-viewer-plus .image-area .animation-wrapper {
    max-height: 565px
}

.image-viewer-plus .image-area .replacement-template-changers {
    display: none;
    position: absolute;
    top: 20px;
    left: 20px;
    width: 1px;
    overflow: visible
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area .replacement-template-changers {
        display:block
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area .replacement-template-changers {
        top:0!important;
        left: 0!important
    }
}

.image-viewer-plus .image-area .diamond-size-changer {
    display: none
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area .diamond-size-changer {
        display:flex;
        margin-top: -40px
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area .diamond-size-changer {
        margin-top:0
    }
}

.image-viewer-plus .image-area .slides-wrapper {
    position: relative;
    width: 100%;
    max-width: 600px
}

.image-viewer-plus .image-area .slides-wrapper .slides {
    flex-grow: 1
}

.image-viewer-plus .image-area .slides-wrapper .slides .label-wrapper {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
    margin: 0
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area .slides-wrapper .slides .label-wrapper {
        width:63vw;
        max-width: 500px;
        min-width: 320px;
        left: 50%;
        transform: translateX(-50%)
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area .slides-wrapper .slides .label-wrapper {
        width:100%;
        min-width: 0
    }
}

.image-viewer-plus .image-area .slides-wrapper .slides .label-wrapper>* {
    margin: 12px
}

.image-viewer-plus .image-area .slides-wrapper .slides .swipeable-item {
    width: 100%;
    overflow: hidden;
    position: relative
}

.image-viewer-plus .image-area .slides-wrapper .slides .swipeable-item .label {
    display: flex;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    position: absolute;
    top: 16px;
    left: 16px;
    font-size: 12.25px;
    color: #4a4a4a;
    letter-spacing: .25px;
    line-height: 20px;
    align-items: center
}

.image-viewer-plus .image-area .slides-wrapper .slides .swipeable-item .label .icon-component.diamond-outline {
    width: 19px;
    height: 16px;
    display: inline-block;
    margin-right: 10px
}

.image-viewer-plus .image-area .slides-wrapper .slides .swipeable-item .label .icon-component.diamond-outline svg path {
    stroke: #4a4a4a;
    fill: transparent
}

.image-viewer-plus .image-area .slides-wrapper .image-player-container {
    margin: 0;
    max-width: 500px;
    min-width: 320px;
    left: 50%;
    transform: translateX(-50%)
}

.image-viewer-plus .image-area .slides-wrapper .image-player-container .image-player-controls {
    background-color: hsla(0,0%,100%,.5)
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area .slides-wrapper .image-player-container {
        width:63vw
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area .slides-wrapper .image-player-container {
        width:100%;
        min-width: 0
    }
}

.image-viewer-plus .image-area .slides-wrapper .v360.placeholder {
    max-width: 518px;
    margin: 0 auto
}

.image-viewer-plus .image-area .hover-customizer-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff
}

.image-viewer-plus .image-area .hover-customizer-image img {
    margin: auto;
    display: block;
    width: 90vw;
    max-width: 388px;
    min-width: 288px
}

@media (min-width: 600px) {
    .image-viewer-plus .image-area .hover-customizer-image img {
        width:62.5vw;
        max-width: 500px;
        min-width: 380px
    }
}

@media (min-width: 850px) {
    .image-viewer-plus .image-area .hover-customizer-image img {
        width:100%;
        max-width: 500px
    }
}

.form-field-wrapper {
    position: relative
}

.form-field-wrapper .form-field {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    border: 1px solid #888;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 24px;
    padding: 10px 15px!important;
    margin-top: 15px;
    width: 100%
}

.form-field-wrapper textarea.form-field {
    resize: none
}

.form-field-wrapper .icon-component svg {
    height: 16px!important
}

.form-field-wrapper .icon-component.checkmark,.form-field-wrapper .icon-component.exclamation-mark {
    width: 16px;
    height: 16px;
    display: block;
    position: absolute;
    visibility: hidden;
    right: 12px;
    top: 16px
}

.form-field-wrapper .icon-component.checkmark {
    fill: #1b8362
}

.form-field-wrapper .icon-component.exclamation-mark {
    fill: #eb1000
}

.form-field-wrapper .input-message {
    -webkit-font-smoothing: antialiased;
    font-variant-numeric: lining-nums;
    font-size: 87.5%;
    line-height: normal;
    margin: 0;
    padding: 5px 15px;
    background-color: #eb1000;
    color: #fff;
    display: none
}

.form-field-wrapper.success .form-field~.icon-component.checkmark {
    visibility: visible
}

.form-field-wrapper.success .form-field~.icon-component.exclamation-mark {
    visibility: hidden
}

.form-field-wrapper.success .form-field {
    border: 1px solid #1b8362;
    background-color: #fff
}

.form-field-wrapper.error.showMessaging .form-field~.icon-component.exclamation-mark {
    visibility: visible
}

.form-field-wrapper.error.showMessaging .form-field~.icon-component.checkmark {
    visibility: hidden
}

.form-field-wrapper.error.showMessaging .form-field {
    border: 1px solid #eb1000
}

.form-field-wrapper.error.showMessaging .form-field~.input-message {
    display: block
}

.form-field-wrapper .form-superscript {
    position: absolute;
    top: -8px;
    left: 16px;
    font-size: 10.5px;
    line-height: 12px;
    background-color: #fff;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: visibility 0s linear 0s,opacity .3s;
    transition: visibility 0s linear 0s,opacity .3s
}

.form-field-wrapper .form-superscript.optional {
    left: auto;
    right: 24px;
    visibility: visible;
    opacity: 1
}

.form-field-wrapper .form-superscript:after,.form-field-wrapper .form-superscript:before {
    content: "";
    display: block;
    position: absolute;
    height: 12px;
    top: 0;
    width: 5px;
    background-color: #fff
}

.form-field-wrapper .form-superscript:before {
    left: -5px
}

.form-field-wrapper .form-superscript:after {
    right: -5px
}

.form-field-wrapper input {
    background-color: #fff;
    font-variant: lining-nums
}

.form-field-wrapper input:focus {
    border: 1px solid #0024d6;
    outline: none!important
}

.form-field-wrapper input:focus::-webkit-input-placeholder {
    visibility: hidden
}

.form-field-wrapper input:focus:-ms-input-placeholder {
    visibility: hidden
}

.form-field-wrapper input:focus::placeholder {
    visibility: hidden
}

.form-field-wrapper input:focus+label {
    visibility: visible;
    opacity: 1;
    -webkit-transition: visibility 0s linear 0s,opacity .3s;
    transition: visibility 0s linear 0s,opacity .3s
}

.form-field-wrapper input:hover {
    border: 1px solid #0024d6;
    outline: none!important
}

.form-field-wrapper input:disabled {
    border: 1px solid #d5d7d8;
    color: #d5d7d8;
    cursor: not-allowed
}

.form-field-wrapper input:disabled+.form-superscript,.form-field-wrapper input:disabled+.form-superscript+.form-superscript {
    color: #d5d7d8
}

.form-field-wrapper.has-text input+label {
    visibility: visible;
    opacity: 1;
    -webkit-transition: visibility 0s linear 0s,opacity .3s;
    transition: visibility 0s linear 0s,opacity .3s
}

.form-field-wrapper.has-text input:disabled,.form-field-wrapper.has-text input:disabled:hover {
    border: 1px solid #d5d7d8
}

.checkbox-wrapper {
    position: relative
}

.checkbox-wrapper input[type=checkbox] {
    position: absolute;
    top: -webkit-calc(50% - 12.5px);
    top: calc(50% - 12.5px);
    left: 1px;
    height: 25px;
    width: 25px;
    -webkit-appearance: none;
    appearance: none
}

.checkbox-wrapper .checkbox-label {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.checkbox-wrapper .checkbox-label:after,.checkbox-wrapper .checkbox-label:before {
    pointer-events: none
}

.checkbox-wrapper .checkbox-label:before {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    height: 25px;
    width: 25px;
    border: 1px solid #757575;
    background: #fff;
    margin-right: 10px
}

.checkbox-wrapper .checkbox-label:after,.checkbox-wrapper .checkbox-label:before {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    content: " "
}

.checkbox-wrapper .checkbox-label:after {
    position: absolute;
    height: 5px;
    width: 12px;
    left: 5px;
    border-bottom: 4px solid #0024d6;
    border-left: 4px solid #0024d6;
    background: none;
    -webkit-transform: rotate(-45deg) scale(0);
    transform: rotate(-45deg) scale(0);
    -webkit-transition: opacity .1s ease,-webkit-transform .1s ease;
    transition: opacity .1s ease,-webkit-transform .1s ease;
    transition: transform .1s ease,opacity .1s ease;
    transition: transform .1s ease,opacity .1s ease,-webkit-transform .1s ease;
    -webkit-transform-origin: center center;
    transform-origin: center center
}

.checkbox-wrapper input[type=checkbox]:checked+.checkbox-label:after {
    opacity: 1;
    -webkit-transform: rotate(-45deg) scale(.8);
    transform: rotate(-45deg) scale(.8)
}

.alert-message {
    -webkit-font-smoothing: antialiased;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    color: #4a4a4a;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    display: -webkit-flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    position: relative;
    padding: 12px 24px
}

.alert-message.success {
    border-left: 4px solid #1b8362;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32)
}

.alert-message.success .title {
    color: #100e31;
    color: #1b8362
}

.alert-message.success .title .icon-component svg {
    fill: #1b8362
}

.alert-message.warning {
    border-left: 4px solid #b68c3e;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32)
}

.alert-message.warning .title {
    color: #100e31
}

.alert-message.alert {
    border-left: 4px solid #eb1000;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32)
}

.alert-message.alert .title {
    color: #100e31;
    color: #eb1000
}

.alert-message.alert .title .icon-component svg {
    fill: #eb1000
}

.alert-message.info {
    border-left: 4px solid #0024d6;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32)
}

.alert-message.info .title {
    color: #100e31
}

.alert-message .body,.alert-message .links,.alert-message .phone-number,.alert-message .title {
    z-index: 5;
    margin-top: 8px;
    letter-spacing: .5px
}

.alert-message .title {
    margin: 0;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-weight: 400;
    text-transform: capitalize;
    display: block;
    font-size: 14px;
    line-height: 24px
}

.alert-message .body {
    letter-spacing: .5px;
    line-height: 24px
}

.alert-message a.link,.alert-message a.phone-number {
    display: block;
    font-size: 14px;
    cursor: pointer;
    outline: none;
    color: #0024d6
}

.alert-message a.link:hover,.alert-message a.phone-number:hover {
    text-decoration: underline
}

.alert-message a.link .chevron,.alert-message a.phone-number .chevron {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    margin: 0 0 2px;
    height: 5px
}

.alert-message a.link .chevron svg,.alert-message a.phone-number .chevron svg {
    height: 100%
}

.alert-message a.link .chevron svg path,.alert-message a.phone-number .chevron svg path {
    fill: #0024d6
}

.alert-message .phone-number {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-variant-numeric: lining-nums
}

.alert-message .tooltip-container>div {
    z-index: 0
}

.alert-message .tooltip-container>div:first-child {
    z-index: 1
}

.alert-message .tooltip-container>div.tooltip-component {
    margin: 10px
}

.alert-message.extra-indent .body,.alert-message.extra-indent .link,.alert-message.extra-indent .phone-number {
    margin-left: 20px
}

.alert-message.extra-indent .title .icon-component {
    width: 20px
}

.alert-message.extra-indent .title .icon-component svg {
    width: 12px
}

.share-bar {
    display: flex;
    background-color: #fff;
    width: 100%;
    position: relative;
    border: 0
}

.share-bar .share-form {
    display: none;
    position: absolute;
    background-color: #fff;
    padding: 15px;
    border-radius: 2px;
    box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
    z-index: 1000;
    width: 100%
}

.share-bar .share-form .arrow {
    position: relative;
    background: #fff;
    top: 15px
}

.share-bar .share-form .arrow:after,.share-bar .share-form .arrow:before {
    top: 100%;
    left: 75%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none
}

.share-bar .share-form .arrow:after {
    border-color: #fff transparent transparent;
    border-width: 15px;
    margin-left: -15px
}

.share-bar .share-form .arrow:before {
    border-color: #d5d7d8 transparent transparent;
    border-width: 16px;
    margin-left: -16px
}

.share-bar .hint-it-success-message .hint-it-body {
    margin-top: 16px
}

.share-bar .hint-it-success-message .continue-shopping {
    padding: 0 20px;
    text-shadow: none;
    margin-top: 32px
}

.share-bar .hint-it-success-message,.share-bar form.share-bar-form {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    padding: 5px;
    color: #4a4a4a
}

.share-bar .hint-it-success-message .heading,.share-bar form.share-bar-form .heading {
    display: flex;
    width: 100%
}

.share-bar .hint-it-success-message .close-button,.share-bar form.share-bar-form .close-button {
    align-self: flex-start
}

.share-bar .hint-it-success-message .close-button .icon-component.close,.share-bar form.share-bar-form .close-button .icon-component.close {
    width: 16px;
    right: 20px;
    fill: #0024d6;
    cursor: pointer
}

.share-bar .hint-it-success-message .form-title,.share-bar .hint-it-success-message .hint-it-title,.share-bar form.share-bar-form .form-title,.share-bar form.share-bar-form .hint-it-title {
    flex-grow: 1;
    font-size: 21px;
    line-height: 36px;
    margin-bottom: 10px
}

.share-bar .hint-it-success-message fieldset,.share-bar form.share-bar-form fieldset {
    margin: 0;
    padding: 0;
    border: none
}

.share-bar .hint-it-success-message .form-text,.share-bar .hint-it-success-message .hint-it-body,.share-bar form.share-bar-form .form-text,.share-bar form.share-bar-form .hint-it-body {
    font-size: 14px;
    line-height: 24px
}

.share-bar .hint-it-success-message .form-text-legend,.share-bar form.share-bar-form .form-text-legend {
    font-size: 12px
}

.share-bar .hint-it-success-message .form-field,.share-bar form.share-bar-form .form-field {
    width: 100%
}

.share-bar .hint-it-success-message .checkbox-wrapper,.share-bar form.share-bar-form .checkbox-wrapper {
    display: flex;
    align-items: center;
    margin: 25px 0
}

.share-bar .hint-it-success-message .checkbox-wrapper .checkbox,.share-bar .hint-it-success-message .checkbox-wrapper .checkbox-agreement,.share-bar form.share-bar-form .checkbox-wrapper .checkbox,.share-bar form.share-bar-form .checkbox-wrapper .checkbox-agreement {
    display: inline-flex;
    font-size: 12.25px
}

.share-bar .hint-it-success-message .bn-button.continue-shopping,.share-bar .hint-it-success-message .bn-button.form-submit-button,.share-bar form.share-bar-form .bn-button.continue-shopping,.share-bar form.share-bar-form .bn-button.form-submit-button {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 800;
    height: 48px;
    letter-spacing: 1px;
    border: 0;
    background-image: none;
    border-radius: 0;
    background-color: #100e31;
    color: #fff;
    font-size: 14px;
    line-height: 24px;
    min-width: 60%
}

.share-bar .hint-it-success-message .bn-button.continue-shopping:disabled,.share-bar .hint-it-success-message .bn-button.form-submit-button:disabled,.share-bar form.share-bar-form .bn-button.continue-shopping:disabled,.share-bar form.share-bar-form .bn-button.form-submit-button:disabled {
    background-color: #f6f6f6;
    color: #757575;
    border: 1px solid #757575;
    text-shadow: none
}

.share-bar .divider {
    width: 1px;
    margin: 5px 0;
    box-sizing: border-box;
    background-color: #d5d7d8
}

.share-bar.form-active .share-form {
    display: block
}

.share-bar .block {
    flex: 1;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    position: relative
}

.share-bar .block.active .wrapper.share {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s linear 0s,opacity .3s
}

.share-bar .block.active .wrapper.social-icons {
    display: flex;
    background-color: #fff;
    padding: 0 10px
}

.share-bar .block.active .wrapper.social-icons,.share-bar .block.active .wrapper.social-icons>a {
    visibility: visible;
    opacity: 1;
    transition: visibility 0s linear 0s,opacity .3s
}

.share-bar .trigger {
    display: flex;
    flex: 1
}

.share-bar .trigger .block {
    border: 0
}

.share-bar .wrapper {
    display: flex;
    color: #4a4a4a;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: .5px;
    text-align: right;
    font-size: 12.25px;
    line-height: 16px;
    height: 100%;
    align-items: center;
    justify-content: center
}

.share-bar .wrapper.share {
    visibility: visible;
    opacity: 1;
    transition: visibility 0s linear 0s,opacity .3s;
    width: 100%
}

.share-bar .wrapper.social-icons {
    width: 100%;
    position: absolute;
    top: 0;
    margin: 0;
    align-items: center;
    justify-content: center;
    font-size: 21px;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s linear 0s,opacity .3s
}

.share-bar .wrapper.social-icons>li {
    display: flex;
    flex: 1;
    justify-content: center
}

.share-bar .wrapper.social-icons>a {
    color: #0024d6;
    text-decoration: none;
    display: inline-flex;
    flex: 1
}

.share-bar .icon-component.email,.share-bar .icon-component.share {
    margin: 0 0 0 10px
}

.share-bar .icon-component.email,.share-bar .icon-component.facebook,.share-bar .icon-component.pinterest,.share-bar .icon-component.share,.share-bar .icon-component.twitter,.share-bar .icon-component.weibo {
    width: 25px;
    height: 25px;
    display: inline-flex;
    fill: #0024d6
}

.share-bar .tooltip-container,.share-bar .tooltip-container>div {
    display: flex!important;
    flex: 1
}

.hint-it-button,.wrapper.share {
    text-transform: uppercase
}

.contact-information {
    width: 100%;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    background-color: #100e31;
    color: #f6f6f6;
    padding: 16px;
    text-align: center;
    letter-spacing: .5px
}

@media (min-width: 850px) {
    .contact-information {
        padding:24px 16px
    }
}

.contact-information .headline {
    font-size: 21px;
    line-height: 30px
}

@media (min-width: 850px) {
    .contact-information .headline {
        font-size:28px;
        letter-spacing: 1px;
        line-height: 40px
    }
}

.contact-information .subtitle {
    margin-top: 8px;
    font-size: 14px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    line-height: 24px
}

@media (min-width: 850px) {
    .contact-information .subtitle {
        font-family:Brown LL,Arial,Helvetica,sans-serif;
        font-size: 21px;
        line-height: 30px
    }
}

.contact-information .phone-number {
    font-size: 14px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    line-height: 24px;
    margin-top: 24px;
    display: block;
    text-decoration: none;
    color: #f6f6f6;
    font-variant-numeric: lining-nums
}

@media (min-width: 850px) {
    .contact-information .phone-number {
        font-family:Brown LL,Arial,Helvetica,sans-serif;
        font-size: 21px;
        line-height: 30px
    }
}

.contact-information .contact-links {
    display: flex;
    flex-direction: row;
    letter-spacing: 0;
    border-top: 1px solid #f6f6f6;
    padding-top: 16px;
    width: 230px;
    margin: 16px auto 0;
    flex-wrap: wrap
}

.contact-information .contact-links a,.contact-information .contact-links button,.contact-information .contact-links div {
    cursor: pointer;
    box-sizing: border-box;
    width: 50%;
    text-decoration: none;
    color: #f6f6f6;
    font-size: 14px;
    line-height: 24px;
    align-items: center;
    margin: auto
}

.contact-information .contact-links a .icon-component,.contact-information .contact-links button .icon-component,.contact-information .contact-links div .icon-component {
    width: 16px
}

.contact-information .contact-links a .icon-component.chat,.contact-information .contact-links button .icon-component.chat,.contact-information .contact-links div .icon-component.chat {
    height: 13.7px
}

.contact-information .contact-links a .icon-component.email,.contact-information .contact-links button .icon-component.email,.contact-information .contact-links div .icon-component.email {
    height: 11px
}

.contact-information .contact-links a .icon-component svg path,.contact-information .contact-links button .icon-component svg path,.contact-information .contact-links div .icon-component svg path {
    fill: #f6f6f6
}

.contact-information .contact-links a.center-section,.contact-information .contact-links button.center-section,.contact-information .contact-links div.center-section {
    justify-content: center;
    flex-basis: 100%;
    padding-top: 16px;
    display: flex
}

.contact-information .contact-links a.center-section .icon-component,.contact-information .contact-links button.center-section .icon-component,.contact-information .contact-links div.center-section .icon-component {
    display: inline-block;
    margin: 0 12px 0 0
}

.expandable-widget {
    background-color: #fff;
    color: #4a4a4a;
    box-shadow: 0 0 5px 0 rgba(0,0,0,.2);
    margin: 30px 0;
    border-left: 4px inset #100e31;
    width: 99.5%
}

.expandable-widget .top-section {
    height: 40px;
    margin: 0 14px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    cursor: pointer
}

.expandable-widget .top-section .icon {
    margin: 5px 10px 0 0
}

.expandable-widget .top-section .icon .icon-component {
    height: 16px;
    width: 16px
}

.expandable-widget .top-section .icon svg {
    height: 100%
}

.expandable-widget .top-section .drop-down-title {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: .5px;
    box-sizing: border-box;
    white-space: nowrap;
    flex-grow: 2
}

.expandable-widget .top-section .button {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 14px;
    width: 14px
}

.expandable-widget .dropdown-area {
    display: none;
    margin: 0 16px 16px 40px;
    padding-bottom: 16px;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 24px;
    letter-spacing: .5px
}

@media (min-width: 850px) {
    .expandable-widget .dropdown-area {
        margin:0 40px 16px
    }
}

.expandable-widget.open .dropdown-area {
    display: block
}

@media (min-width: 600px) {
    .expandable-widget {
        margin:24px 0 0
    }
}

@media (min-width: 850px) {
    .expandable-widget {
        margin-top:32px
    }
}

.grid-layout-wrapper .breadcrumbs-slat {
    margin-bottom: 0;
    margin-left: 0;
    display: block
}

#breadcrumbs {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 12.25px;
    line-height: 24px;
    color: #757575;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    margin-top: 16px;
    margin-bottom: 8px
}

#breadcrumbs a.crumb {
    color: #100e31;
    white-space: normal;
    text-transform: capitalize
}

@media (min-width: 600px) {
    #breadcrumbs a.crumb {
        white-space:nowrap
    }
}

#breadcrumbs a.crumb:hover {
    color: #0024d6
}

#breadcrumbs a.crumb:active {
    color: #100e31
}

#breadcrumbs .crumbs-separator {
    margin-left: 7px;
    margin-right: 7px
}

.add-remove-heart-container {
    position: absolute;
    top: 0;
    right: 0;
    width: 48px;
    height: 48px;
    cursor: pointer
}

.add-remove-heart-container button:focus-within {
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff;
    outline: 2px solid #b68c3e;
    outline-offset: 2px
}

body.no-focus-outline .add-remove-heart-container button:focus-within,div.alloy .add-remove-heart-container button:focus-within {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline-offset: 0
}

@media (min-width: 600px) {
    .add-remove-heart-container {
        width:48px;
        height: 48px
    }
}

.add-remove-heart-container.slider {
    width: 48px;
    height: 48px
}

.add-remove-heart-container.og-image-viewer {
    top: 24px;
    right: 24px
}

@media (min-width: 850px) {
    .add-remove-heart-container.og-image-viewer {
        top:64px;
        right: 64px
    }
}

.add-remove-heart-container.similar {
    width: 48px;
    height: 48px
}

.add-remove-heart-container.similar .add-remove-heart {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.add-remove-heart-container button,.add-remove-heart-container div {
    width: 100%;
    height: 100%;
    cursor: pointer;
    font-size: 14px
}

@media (min-width: 600px) {
    .add-remove-heart-container button,.add-remove-heart-container div {
        font-size:18px
    }
}

.add-remove-heart .icon-heart {
    -webkit-animation: heart-pulse .16s linear 0s 1;
    animation: heart-pulse .16s linear 0s 1;
    color: #0024d6
}

@-webkit-keyframes heart-pulse {
    0% {
        opacity: .6
    }

    50% {
        opacity: .6;
        font-size: 24px
    }

    to {
        opacity: .6;
        font-size: 22px
    }
}

@keyframes heart-pulse {
    0% {
        opacity: .6
    }

    50% {
        opacity: .6;
        font-size: 24px
    }

    to {
        opacity: .6;
        font-size: 22px
    }
}

.content-box {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    color: #4a4a4a;
    letter-spacing: 0;
    text-align: center;
    line-height: 24px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 10px 0;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.content-box .content-copy {
    display: none;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-top: 8px
}

.content-box .content-image {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 260px;
    height: 60px
}

@media (min-width: 600px) {
    .content-box {
        padding:24px
    }

    .content-box .content-copy {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }
}

section.internal-setting-details {
    background-color: #f6f6f6;
    padding: 20px
}

section.internal-setting-details .internal-row {
    margin: 10px 0
}

section.internal-setting-details .internal-row .label {
    font-weight: 700
}

section.internal-setting-details .internal-row a {
    display: inline-block;
    margin-right: 10px
}

.modal {
    position: fixed;
    top: 10%;
    left: 50%;
    z-index: 16001;
    width: 560px;
    margin-left: -280px;
    background-color: #fff;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.3);
    *border: 1px solid #999;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 7px rgba(0,0,0,.3);
    box-shadow: 0 3px 7px rgba(0,0,0,.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
    outline: none
}

section.pdf-modal {
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    z-index: 1041;
    position: fixed;
    border: 1px solid #100e31;
    margin: 0 auto;
    width: 95vw;
    max-height: 95vh;
    max-width: 1000px
}

section.pdf-modal ul {
    list-style: none;
    margin: 0;
    padding: 0
}

section.pdf-modal li {
    list-style: none;
    margin: 0;
    padding-left: 1.07143em;
    padding-right: 1.07143em
}

section.pdf-modal .modal-header {
    background-color: #d5d7d8;
    color: #100e31;
    text-align: center;
    font-family: Crimson,Perpetua,Palatino,Times New Roman,Times,serif;
    font-size: 1.78571em;
    font-weight: 700;
    line-height: .4em;
    width: 100%;
    padding: .6em 1.42857em .4em;
    -webkit-box-shadow: 0 0 5px rgba(255,255,190,.75) inset;
    box-shadow: inset 0 0 5px rgba(255,255,190,.75)
}

section.pdf-modal .modal-description {
    position: relative;
    padding: 5px;
    text-align: center;
    height: 750px;
    overflow: auto;
    -webkit-overflow-scrolling: touch
}

section.pdf-modal .modal-description.error {
    color: red
}

section.pdf-modal iframe {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    border: 0;
    width: 100%;
    height: 100%
}

.shipping-label .holiday-icon,.shipping-label .quick-ship-icon,.shipping-status .holiday-icon,.shipping-status .quick-ship-icon {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50%;
    display: inline-block;
    vertical-align: middle
}

.shipping-label {
    margin-top: 4px;
    padding-left: 4px;
    padding-right: 4px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    color: #100e31
}

.shipping-label .shipping-message {
    margin-left: 8px;
    max-width: 210px
}

.shipping-label .quick-ship-icon,.shipping-status .quick-ship-icon {
    background-image: url(/bnsecure/static/icons/svg/quick-ship-solid.svg?m)
}

.shipping-status .quick-ship-icon {
    width: 27px;
    height: 12px
}

.shipping-label .quick-ship-icon {
    width: 37px;
    height: 16px
}

* .holiday-shipping-messaging,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    position: relative;
    font-size: 16px;
    letter-spacing: .5px;
    line-height: 24px;
    margin-bottom: 27px;
    margin-top: 0
}

* .holiday-shipping-messaging .title,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging .title {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 16px;
    letter-spacing: .5px;
    line-height: 24px;
    color: #4a4a4a;
    white-space: nowrap;
    height: auto;
    display: block;
    width: auto;
    padding: 4px 0
}

* .holiday-shipping-messaging .icon,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging .icon {
    height: 24px;
    width: 20px;
    background-size: cover
}

* .holiday-shipping-messaging p,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging p {
    padding: 0
}

* .holiday-shipping-messaging p+p,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging p+p {
    padding-top: 8px
}

* .holiday-shipping-messaging strong,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging strong {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

* .holiday-shipping-messaging .message2,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging .message2 {
    text-transform: uppercase;
    font-size: 24px
}

* .holiday-shipping-messaging.in-time,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.in-time {
    text-align: center;
    margin-top: 24px;
    margin-bottom: 20px;
    padding-top: 20px
}

* .holiday-shipping-messaging.in-time h2.title,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.in-time h2.title {
    white-space: nowrap
}

* .holiday-shipping-messaging.in-time .content,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.in-time .content {
    margin: 16px auto 8px
}

* .holiday-shipping-messaging.in-time .holiday-ribbon,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.in-time .holiday-ribbon {
    display: inline-block;
    text-align: center;
    position: absolute;
    top: 0;
    background: #fff;
    left: 50%;
    -webkit-transform: translate(-50%,-60%);
    transform: translate(-50%,-60%);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 4px
}

* .holiday-shipping-messaging.in-time .content,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.in-time .content {
    width: 95%;
    min-width: 240px;
    max-width: 450px
}

* .holiday-shipping-messaging.not-in-time,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time {
    border: 0
}

* .holiday-shipping-messaging.not-in-time .cta,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta {
    display: inline-block;
    width: unset;
    padding: 12px 16px;
    border: 2px solid #0c1636;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    margin: 14px auto 0;
    line-height: 20px;
    font-size: 16px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: .16px;
    -webkit-transition: -webkit-box-shadow .2s ease;
    transition: -webkit-box-shadow .2s ease;
    transition: box-shadow .2s ease;
    transition: box-shadow .2s ease,-webkit-box-shadow .2s ease;
    outline: none;
    text-decoration: none
}

* .holiday-shipping-messaging.not-in-time .cta:active,* .holiday-shipping-messaging.not-in-time .cta:active:hover,* .holiday-shipping-messaging.not-in-time .cta:focus,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:active,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:active:hover,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:focus {
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff
}

* .holiday-shipping-messaging.not-in-time .cta:not(:disabled):hover,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:not(:disabled):hover {
    -webkit-box-shadow: 0 2px 4px rgba(0,0,0,.3);
    box-shadow: 0 2px 4px rgba(0,0,0,.3);
    background: #fff;
    color: #0c1636
}

* .holiday-shipping-messaging.not-in-time .cta:not(:hover):focus-visible,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:not(:hover):focus-visible {
    -webkit-box-shadow: 0 0 0 3px #0073e5;
    box-shadow: 0 0 0 3px #0073e5
}

* .holiday-shipping-messaging.not-in-time .cta:after,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.not-in-time .cta:after {
    background: unset
}

* .holiday-shipping-messaging.after-holiday,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.after-holiday {
    display: none
}

* .holiday-shipping-messaging.has-link,.shipping-details-wrapper .shipping-details .holiday-shipping-messaging.has-link {
    padding-bottom: 0
}

.holiday-shipping-messaging .holiday-banner {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    padding: 0 4x;
    font-family: Lyon Display,Times New Roman,Times,serif;
    font-size: 16px;
    line-height: 20px;
    width: -webkit-calc(100% - 46px);
    width: calc(100% - 46px);
    max-width: 520px
}

.holiday-shipping-messaging .holiday-banner,.holiday-shipping-messaging .holiday-banner .content-wrapper {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%
}

.holiday-shipping-messaging .holiday-banner .content-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

@media (min-width: 600px) {
    .holiday-shipping-messaging .holiday-banner.resizable .content-wrapper .banner-title {
        font-size:24px;
        text-align: center
    }
}

.holiday-shipping-messaging.in-time .holiday-ribbon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 100%;
    height: 32px;
    margin-bottom: 16px
}

@media (min-width: 600px) {
    .holiday-shipping-messaging.in-time .holiday-ribbon {
        height:42px
    }
}

.holiday-shipping-messaging.in-time .holiday-ribbon:after,.holiday-shipping-messaging.in-time .holiday-ribbon:before {
    content: "";
    width: 18px;
    height: 100%;
    background-size: cover
}

@media (min-width: 600px) {
    .holiday-shipping-messaging.in-time .holiday-ribbon:after,.holiday-shipping-messaging.in-time .holiday-ribbon:before {
        width:23px
    }
}

.holiday-shipping-messaging.in-time .holiday-ribbon:before {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1)
}

.holiday-shipping-messaging.in-time.mothers-day .holiday-banner {
    background-color: #8d3f6c;
    color: #fff;
    border-right: 1px solid #8d3f6c;
    border-left: 1px solid #8d3f6c
}

.holiday-shipping-messaging.in-time.mothers-day .holiday-ribbon:after,.holiday-shipping-messaging.in-time.mothers-day .holiday-ribbon:before {
    background-image: url(/bnsecure/static/icons/svg/holiday/mothers-day-banner-right.svg)
}

#bn-content .quick-ship-messaging {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    position: relative;
    padding: 16px 12px 12px;
    font-size: 14px;
    letter-spacing: .5px;
    line-height: 24px;
    margin-bottom: 27px;
    margin-top: 8px;
    border: 4px solid #1b8362;
    -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.5)
}

#bn-content .quick-ship-messaging .quick-ship-header {
    position: absolute;
    top: 0;
    left: 50%;
    width: 90%;
    -webkit-transform: translate(-50%,-60%);
    transform: translate(-50%,-60%);
    text-align: center
}

#bn-content .quick-ship-messaging .quick-ship-header .shipping-label {
    display: inline-block;
    background: #fff;
    line-height: 16px;
    font-size: 14px;
    letter-spacing: .5px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

#bn-content .quick-ship-messaging .date {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.shipping-details-wrapper {
    font-size: 14px;
    color: #4a4a4a
}

.shipping-details-wrapper .shipping-details {
    font-variant-numeric: lining-nums;
    border-top: 1px solid #d5d7d8;
    padding-top: 16px
}

@media (min-width: 850px) {
    .shipping-details-wrapper .shipping-details {
        padding-top:24px
    }
}

.shipping-details-wrapper .shipping-details h2 {
    font-size: 28px;
    line-height: 40px;
    padding-bottom: 16px
}

.shipping-details-wrapper .shipping-details .delivery-date {
    margin-top: 8px;
    font-size: 21px;
    line-height: 30px
}

.shipping-details-wrapper .shipping-details .messaging {
    background-color: #fff;
    padding: 8px 16px 8px 12px;
    letter-spacing: .5px
}

.shipping-details-wrapper .shipping-details .warning .messaging {
    border-left: 4px solid #eb1000;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32)
}

.shipping-details-wrapper .shipping-details .alert .messaging {
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    border-left: 4px solid #b68c3e
}

.shipping-details-wrapper .shipping-details .not-in-time .messaging {
    -webkit-box-shadow: none;
    box-shadow: none;
    margin-bottom: 24px
}

.shipping-details-wrapper .links {
    font-variant-numeric: lining-nums;
    display: grid
}

@media (min-width: 600px) {
    .shipping-details-wrapper .links {
        display:table;
        width: 100%
    }
}

@media (min-width: 600px) {
    .shipping-details-wrapper .links>div {
        display:table-cell;
        vertical-align: top;
        width: 50%
    }
}

.shipping-details-wrapper .links .title {
    font-size: 14px;
    line-height: 24px;
    padding-top: 24px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.shipping-details-wrapper .links ul {
    padding: 0;
    list-style: none
}

.shipping-details-wrapper .links ul a,.shipping-details-wrapper .links ul button {
    cursor: pointer;
    color: #0024d6;
    display: none
}

@media (min-width: 850px) {
    .shipping-details-wrapper .links ul a,.shipping-details-wrapper .links ul button {
        display:block
    }
}

.shipping-details-wrapper .links ul a.pdf-link,.shipping-details-wrapper .links ul button.pdf-link {
    display: none
}

@media (min-width: 850px) {
    .shipping-details-wrapper .links ul a.pdf-link,.shipping-details-wrapper .links ul button.pdf-link {
        display:block
    }
}

.shipping-details-wrapper .links ul a.new-tab-link,.shipping-details-wrapper .links ul button.new-tab-link {
    display: block
}

@media (min-width: 850px) {
    .shipping-details-wrapper .links ul a.new-tab-link,.shipping-details-wrapper .links ul button.new-tab-link {
        display:none
    }
}

.shipping-details-wrapper .links .title,.shipping-details-wrapper .links ul li {
    padding-bottom: 8px
}

.shipping-details-wrapper .select-size-message {
    display: none
}

.shipping-details-wrapper .variesBySize .select-size-message {
    display: block;
    margin-top: 8px
}

.tooltip-container {
    position: relative
}

.tooltip-container .tooltip-component {
    background-color: #fff;
    border: 1px solid #f6f6f6;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
    color: #4a4a4a;
    padding: 10px;
    position: relative;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.tooltip-container .tooltip-component .tooltip-content {
    outline: 0
}

.tooltip-container .tooltip-component .close-button {
    background-color: transparent;
    border: 0;
    cursor: pointer;
    margin: 0;
    padding: 0;
    position: absolute;
    right: 5px;
    top: 5px
}

.tooltip-container .tooltip-component .tooltip-component-arrow {
    border: 12px solid transparent;
    position: absolute;
    height: 0;
    width: 0
}

.tooltip-container .tooltip-component .tooltip-component-arrow:after {
    border: 12px solid transparent;
    content: " ";
    display: block;
    height: 0;
    width: 0;
    position: absolute
}

.tooltip-container .tooltip-component[data-placement^=top] {
    margin-bottom: 3px
}

.tooltip-container .tooltip-component[data-placement^=top] .tooltip-component-arrow {
    border-top-color: #f6f6f6;
    bottom: -24px
}

.tooltip-container .tooltip-component[data-placement^=top] .tooltip-component-arrow:after {
    border-top-color: #fff;
    left: -12px;
    top: -14px
}

.tooltip-container .tooltip-component[data-placement^=right] {
    margin-left: 3px
}

.tooltip-container .tooltip-component[data-placement^=right] .tooltip-component-arrow {
    border-right-color: #f6f6f6;
    left: -24px
}

.tooltip-container .tooltip-component[data-placement^=right] .tooltip-component-arrow:after {
    border-right-color: #fff;
    top: -12px;
    left: -10px
}

.tooltip-container .tooltip-component[data-placement^=bottom] {
    margin-top: 3px
}

.tooltip-container .tooltip-component[data-placement^=bottom] .tooltip-component-arrow {
    border-bottom-color: #f6f6f6;
    top: -24px
}

.tooltip-container .tooltip-component[data-placement^=bottom] .tooltip-component-arrow:after {
    border-bottom-color: #fff;
    top: -10px;
    left: -12px
}

.tooltip-container .tooltip-component[data-placement^=left] {
    margin-right: 3px
}

.tooltip-container .tooltip-component[data-placement^=left] .tooltip-component-arrow {
    border-left-color: #f6f6f6;
    right: -24px
}

.tooltip-container .tooltip-component[data-placement^=left] .tooltip-component-arrow:after {
    border-left-color: #fff;
    top: -12px;
    left: -14px
}

.tooltip-container.close-button .tooltip-component {
    padding-top: 15px
}

.tooltip-container.auto-open .tooltip-component a:hover,.tooltip-container.auto-open .tooltip-component button:hover {
    text-decoration: underline
}

.tooltip-container {
    font-variant-numeric: lining-nums;
    -webkit-font-smoothing: antialiased
}

.tooltip-container .tooltip-component {
    background: #fff;
    -webkit-box-shadow: 0 1px 10px 0 rgba(0,0,0,.2);
    box-shadow: 0 1px 10px 0 rgba(0,0,0,.2);
    border: 0;
    z-index: 100;
    padding: 16px
}

.tooltip-container button.close-button {
    height: 48px;
    width: 48px;
    fill: #0024d6;
    cursor: pointer
}

.tooltip-container button.close-button>.close {
    margin: 0 auto
}

.tooltip-container .tooltip-component-arrow {
    border-color: transparent!important
}

.tooltip-container .tooltip-content {
    font-variant-numeric: lining-nums;
    -webkit-box-orient: vertical;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: left
}

.tooltip-container .tooltip-content,.tooltip-container .tooltip-content .inline-img-content-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-direction: normal
}

.tooltip-container .tooltip-content .inline-img-content-wrapper {
    -webkit-box-orient: horizontal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row
}

.tooltip-container .tooltip-content .inline-img-content-wrapper .text-content {
    margin-right: 8px
}

.tooltip-container .tooltip-content .tooltip-title {
    font-size: 14px;
    letter-spacing: .5px;
    text-align: left;
    line-height: 24px
}

.tooltip-container .tooltip-content .caption,.tooltip-container .tooltip-content .tooltip-title {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    margin-bottom: 8px
}

.tooltip-container .tooltip-content .text-content {
    line-height: 24px
}

.tooltip-container .tooltip-content img {
    width: 100%;
    margin-bottom: 16px
}

.tooltip-container .tooltip-content img.small-image {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    height: 70px;
    width: 70px
}

.tooltip-container .tooltip-content .interactive-choices {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 12.25px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    text-align: center;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-flow: row wrap;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    list-style: none;
    padding: 0
}

.tooltip-container .tooltip-content .interactive-choices.grid-4-col .choice {
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 -webkit-calc(25% - 8px);
    -ms-flex: 1 0 calc(25% - 8px);
    flex: 1 0 calc(25% - 8px);
    -webkit-flex-basis: -webkit-calc(25% - 8px);
    -ms-flex-preferred-size: calc(25% - 8px);
    flex-basis: calc(25% - 8px)
}

@supports (grid-gap: 0) {
    .tooltip-container .tooltip-content .interactive-choices.grid-4-col .choice {
        -webkit-box-sizing:border-box;
        box-sizing: border-box;
        width: -webkit-calc(25% - 8px);
        width: calc(25% - 8px)
    }
}

.tooltip-container .tooltip-content .interactive-choices.grid-4-col .choice:nth-child(4n+4) {
    margin-right: 0
}

.tooltip-container .tooltip-content .interactive-choices.grid-3-col .choice {
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 -webkit-calc(33.333% - 8px);
    -ms-flex: 1 0 calc(33.333% - 8px);
    flex: 1 0 calc(33.333% - 8px);
    -webkit-flex-basis: -webkit-calc(33.333% - 8px);
    -ms-flex-preferred-size: calc(33.333% - 8px);
    flex-basis: calc(33.333% - 8px)
}

@supports (grid-gap: 0) {
    .tooltip-container .tooltip-content .interactive-choices.grid-3-col .choice {
        -webkit-box-sizing:border-box;
        box-sizing: border-box;
        width: -webkit-calc(33.333% - 8px);
        width: calc(33.333% - 8px)
    }
}

.tooltip-container .tooltip-content .interactive-choices.grid-3-col .choice:nth-child(3n+3) {
    margin-right: 0
}

.tooltip-container .tooltip-content .interactive-choices .choice {
    font-variant-numeric: lining-nums;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    border: 1px solid #d5d7d8;
    height: 48px;
    position: relative;
    cursor: pointer;
    margin: 0 8px 8px 0
}

.tooltip-container .tooltip-content .interactive-choices .choice:last-child {
    margin: 0
}

.tooltip-container .tooltip-content .interactive-choices .choice:after {
    content: "";
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background-color: transparent
}

.tooltip-container .tooltip-content .interactive-choices .choice:hover:after {
    -webkit-transition: .3s ease;
    transition: .3s ease;
    background-color: #f6f6f6
}

.tooltip-container .tooltip-content .interactive-choices .choice.selected:after {
    -webkit-transition: .3s ease;
    transition: .3s ease;
    background-color: #0024d6
}

.tooltip-container .tooltip-content .interactive-choices .choice button {
    width: 100%
}

.body-copy-01,.product-summary-slat .detail-summary .name h2 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 1.5rem;
    font-weight: 400;
    letter-spacing: .5px
}

.icon-component.badge-diamond path,.icon-component.badge-setting path {
    fill: none
}

@media (-ms-high-contrast:none),screen and (-ms-high-contrast:active) {
    .icon-component.badge-diamond,.icon-component.badge-setting {
        height: 19px
    }

    .icon-component.badge-setting-pendant {
        height: 18px
    }

    .icon-component.badge-setting-earrings {
        height: 16px
    }
}

.product-summary-slat {
    letter-spacing: .5px
}

.product-summary-slat,.product-summary-slat .detail-summary-wrapper {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.product-summary-slat .detail-summary-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    border-top: 1px solid #d5d7d8
}

.product-summary-slat .detail-summary {
    padding-bottom: 24px;
    font-variant-numeric: lining-nums
}

.product-summary-slat .detail-summary .stock-number {
    margin-bottom: 0
}

.product-summary-slat .detail-summary div.summary-anchor .icon-component svg>g,.product-summary-slat .detail-summary div.summary-anchor .icon-component svg>g>path,.product-summary-slat .detail-summary div.summary-anchor .icon-component svg>path {
    stroke: #4a4a4a
}

.product-summary-slat .detail-summary.unavailable .summary-anchor>ul:first-child {
    color: #eb1000
}

.product-summary-slat .detail-summary.unavailable .summary-anchor .icon-component svg>g,.product-summary-slat .detail-summary.unavailable .summary-anchor .icon-component svg>g>path,.product-summary-slat .detail-summary.unavailable .summary-anchor .icon-component svg>path {
    stroke: #eb1000
}

.product-summary-slat .detail-summary.unavailable.no-diamond .summary-anchor>ul:first-child,.product-summary-slat .detail-summary.unavailable.no-setting .summary-anchor>ul:first-child {
    color: #d9b46b
}

.product-summary-slat .detail-summary.unavailable.no-diamond .summary-anchor .icon-component svg>g,.product-summary-slat .detail-summary.unavailable.no-diamond .summary-anchor .icon-component svg>g>path,.product-summary-slat .detail-summary.unavailable.no-diamond .summary-anchor .icon-component svg>path,.product-summary-slat .detail-summary.unavailable.no-setting .summary-anchor .icon-component svg>g,.product-summary-slat .detail-summary.unavailable.no-setting .summary-anchor .icon-component svg>g>path,.product-summary-slat .detail-summary.unavailable.no-setting .summary-anchor .icon-component svg>path {
    stroke: #d9b46b
}

.product-summary-slat .detail-summary .icon-component.badge-diamond-pair {
    width: 20px
}

.product-summary-slat .detail-summary .name a.summary-anchor {
    color: #0024d6
}

.product-summary-slat .detail-summary .name a.summary-anchor:hover {
    text-decoration: underline
}

.product-summary-slat h1.title {
    font-size: 21px;
    line-height: 30px;
    margin-bottom: 16px
}

@media (min-width: 600px) {
    .product-summary-slat h1.title {
        margin-bottom:24px
    }
}

.product-summary-slat .total-carat {
    margin-bottom: 8px
}

.product-summary-slat .diamond,.product-summary-slat .five-stone,.product-summary-slat .no-diamond,.product-summary-slat .side-stones {
    padding-top: 16px
}

.product-summary-slat .no-setting,.product-summary-slat .setting {
    padding-bottom: 16px;
    margin-bottom: 16px;
    border-bottom: 1px solid #d5d7d8
}

.product-summary-slat .summary-anchor {
    text-decoration: none;
    color: #4a4a4a;
    display: block
}

.product-summary-slat .no-diamond ul,.product-summary-slat .no-setting ul {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.product-summary-slat ul {
    list-style: none;
    padding: 0
}

.product-summary-slat .icon-component {
    margin: 0 6px 0 0
}

.product-summary-slat .description,.product-summary-slat .stock-number {
    color: #757575
}

.product-summary-slat .stock-number {
    font-variant-numeric: lining-nums;
    margin-bottom: 8px
}

.product-summary-slat .stock-number.three-stone span:nth-child(2):after {
    content: ", ";
    position: relative;
    left: -3px
}

.product-summary-slat .description {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.product-summary-slat .characteristics {
    text-transform: capitalize
}

.product-summary-slat .characteristics:after {
    content: "|";
    margin: 0 4px
}

.product-summary-slat .characteristics.clarity:after {
    content: ""
}

.product-summary-slat .original {
    text-decoration: line-through;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
    -ms-flex-positive: 0;
    flex-grow: 0
}

.product-summary-slat .price-change {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.product-summary-slat .price-change>:nth-last-child(2) {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.product-summary-slat .price-change>:not(:first-child) {
    margin-left: 8px
}

.product-summary-slat .price-change .discounted {
    color: #0024d6
}

.product-summary-slat .price-change a {
    color: #0024d6;
    text-align: right;
    text-transform: lowercase
}

.product-summary-slat .price-change .tooltip-component {
    z-index: 300;
    width: 230px
}

.product-summary-slat .byoe-pair-messaging {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #757575;
    letter-spacing: .25px;
    line-height: 20px
}

.product-summary-slat .price-component .price {
    line-height: 30px
}

.product-summary-slat .price-component .message {
    text-transform: capitalize;
    color: #757575;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.dropdown-selector {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 2.6184240940056043px;
    color: #4a4a4a;
    border: 1px solid #cdcdcd;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    font-size: 12.25px;
    height: 32px;
    overflow: visible;
    position: relative
}

.dropdown-selector.open,.dropdown-selector.open>div {
    box-shadow: 1px 2px 3px rgba(0,0,0,.15)
}

.dropdown-selector .current-selection {
    position: relative;
    align-items: center;
    display: flex;
    height: 32px
}

.dropdown-selector .current-selection .dropdown-selector-arrow:after {
    content: " ";
    height: 0;
    width: 0;
    border: 5px solid transparent;
    border-top-color: #4a4a4a;
    position: absolute;
    top: 50%;
    right: 10px;
    margin-top: -2.5px;
    transition: all .25s
}

.dropdown-selector .current-selection.open .dropdown-selector-arrow:after {
    margin-top: -5px;
    transform: rotate(180deg)
}

.dropdown-selector .current-selection>span {
    white-space: nowrap;
    padding: 0 30px 0 10px
}

.dropdown-selector .current-selection+div {
    background-color: #fff;
    margin-left: -1px;
    margin-top: -2px;
    width: calc(100% + 2px)
}

.dropdown-selector .current-selection+div .list {
    display: flex;
    flex-direction: column;
    list-style-type: none;
    margin: 0;
    padding: 0
}

.dropdown-selector .current-selection+div .list .selectable-item {
    border: 1px solid #cdcdcd;
    border-top: 0
}

.dropdown-selector .current-selection+div .list .selectable-item:first-child {
    border-top: 1px solid #cdcdcd
}

.dropdown-selector .current-selection+div .list .selectable-item:hover {
    background-color: #efefef
}

.dropdown-selector .current-selection+div .list .selectable-item>span {
    align-items: center;
    display: flex;
    height: 32px;
    padding: 0 30px 0 10px;
    white-space: nowrap
}

.dropdown-selector .current-selection+div .list .selectable-item>span.selected {
    font-weight: 700
}

.dropdown-selector .current-selection+div .list .selectable-item>span.spacer {
    display: block;
    height: 0;
    overflow: hidden
}

.dropdown-wrapper {
    position: relative;
    display: inline-block
}

.dropdown-wrapper label {
    display: block;
    position: relative;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #4a4a4a;
    font-size: 12.25px;
    letter-spacing: .5px;
    margin-right: 5px
}

.dropdown-wrapper select.dropdown {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #100e31;
    font-size: 14px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    padding: 0 30px 0 10px;
    border-radius: 0;
    border: 1px solid #100e31;
    height: 48px;
    line-height: 24px;
    letter-spacing: 1px;
    font-variant-numeric: lining-nums;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik02Ljk5IDcuNzU0TC43NCAxLjUwNCAxLjYyNC42MiA2Ljk5IDUuOTg2IDEyLjM1Ni42MmwuODg0Ljg4NHoiLz48L2RlZnM+PHVzZSBmaWxsPSIjMDAyNEQ2IiB4bGluazpocmVmPSIjYSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+");
    background-repeat: no-repeat,repeat;
    background-position: right .7em top 50%,0 0;
    background-size: 1em auto,100%
}

.dropdown-wrapper select.dropdown::-ms-expand {
    display: none
}

.dropdown-wrapper .icon-component.chevron {
    display: none;
    position: relative;
    right: 25px
}

.dropdown-wrapper.inline label .dropdown-label {
    position: absolute;
    top: -29%;
    left: 5px;
    z-index: 300;
    color: #100e31;
    background-color: #fff;
    padding: 0 5px
}

.dropdown-wrapper.inline select.dropdown:invalid,.dropdown-wrapper.inline select.dropdown [disabled],.dropdown-wrapper.inline select.dropdown option:disabled {
    color: #d5d7d8
}

.dropdown-wrapper.top label {
    display: block;
    padding-left: 10px
}

.dropdown-wrapper.blue select {
    background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik01IDUuNzA3bC01LTVMLjcwNyAwIDUgNC4yOTMgOS4yOTMgMCAxMCAuNzA3eiIvPjwvZGVmcz48dXNlIGZpbGw9IiNGRkYiIHhsaW5rOmhyZWY9IiNhIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=");
    background-color: #100e31;
    color: #fff
}

.bn-button {
    background-image: -webkit-gradient(linear,left bottom,left top,from(#405698),to(#253c76));
    background-image: linear-gradient(0deg,#405698,#253c76);
    border: 1px solid;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 11.375px;
    height: 40px;
    padding: 0 10px;
    position: relative;
    text-align: center;
    text-shadow: 0 1px 2px #000;
    text-decoration: none
}

a.bn-button {
    display: table
}

a.bn-button>span {
    display: table-cell;
    vertical-align: middle
}

.product-size-customizer {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.product-size-customizer.error-message .error-messages {
    border: 1px solid #eb1000;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #fff
}

.product-size-customizer.error-message .error-messages>p {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 12.25px;
    letter-spacing: .5px;
    line-height: 16px
}

.product-size-customizer .size-dropdown-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
}

.product-size-customizer .size-dropdown-wrapper.selection-error .dropdown-wrapper.inline select.dropdown {
    border-color: #eb1000
}

.product-size-customizer .size-dropdown-wrapper.unselected .dropdown-wrapper.inline select.dropdown {
    color: #757575
}

.product-size-customizer .info-icon-alignment-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center;
    width: 25%;
    text-align: center;
    padding: 8px 0 8px 4px
}

.product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper {
    display: block;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #0024d6;
    text-transform: none;
    border: none
}

.product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper:hover {
    border: none
}

.product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper.large {
    display: none
}

@media (min-width: 850px) {
    .product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper.large {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }
}

.product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper.small-med {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

@media (min-width: 850px) {
    .product-size-customizer .info-icon-alignment-wrapper .info-icon-wrapper.small-med {
        display:none
    }
}

.product-size-customizer .icon-component {
    padding: 4px;
    margin: 0;
    width: 28px
}

.product-size-customizer .icon-component>svg {
    max-height: 20px
}

.product-size-customizer .error-messages {
    display: none;
    padding: 4px 16px;
    background-color: #eb1000
}

.product-size-customizer .size-dropdown-and-error-messages {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 75%
}

.product-size-customizer .size-dropdown-and-error-messages .dropdown-wrapper.inline select.dropdown {
    width: 100%;
    border: 1px solid #100e31;
    height: 48px;
    z-index: 100;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 24px;
    letter-spacing: 1px;
    font-variant-numeric: lining-nums;
    color: #100e31;
    margin-top: 1px
}

.product-size-customizer .size-dropdown-and-error-messages .dropdown-wrapper.inline label {
    font-size: 14px;
    color: #100e31
}

.product-size-customizer .tooltip-container {
    position: absolute!important
}

.product-size-customizer .tooltip-container .tooltip-component {
    -webkit-border-radius: 0!important;
    border-radius: 0!important;
    border: none!important;
    -webkit-box-shadow: 0 1px 5px 0 rgba(0,0,0,.2)!important;
    box-shadow: 0 1px 5px 0 rgba(0,0,0,.2)!important
}

.product-size-customizer .tooltip-container .tooltip-component .tooltip-component-arrow {
    border-top-color: #edeeee!important
}

.price-component {
    -webkit-font-smoothing: antialiased;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    letter-spacing: .5px;
    margin-bottom: 28px;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.price-component,.price-component .price-numeric {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: baseline;
    -webkit-align-items: baseline;
    -ms-flex-align: baseline;
    align-items: baseline
}

.price-component .price-numeric {
    width: 100%
}

.price-component .price-numeric.strikethrough {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.price-component .price-numeric.strikethrough .price-label {
    font-size: 14px
}

.price-component .price-numeric.strikethrough .price-label.price {
    text-decoration: line-through;
    color: #4a4a4a;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.price-component .price-numeric.strikethrough .price-label.price+.strikethrough-price {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #0024d6;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.price-component .price-numeric.strikethrough .price-label.price+.strikethrough-price .tooltip-container {
    margin-left: 4px
}

.price-component .price-numeric.strikethrough .price-label-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #0024d6
}

.price-component .price-numeric.strikethrough .price-label-wrapper .strikethrough-price {
    font-size: 21px
}

.price-component .price-numeric.strikethrough .price-label-wrapper .tooltip-container {
    margin-left: 4px
}

.price-component .price-numeric .prefix-label {
    font-size: 14px;
    line-height: 24px;
    margin-right: 8px;
    color: #4a4a4a
}

.price-component .price-numeric .price-label {
    font-size: 21px;
    line-height: 30px
}

.price-component .special-price {
    color: #eb1000;
    font-weight: 700
}

.price-component .special-price>.price {
    font-size: 28px
}

@media (min-width: 600px) {
    .price-component .special-price>.price {
        font-size:28px
    }
}

.price-component .special-price>.prefix {
    text-transform: lowercase
}

.price-component .now-price {
    color: #0024d6;
    font-weight: 700
}

.price-component .now-price>.price,.price-component .now-price>.price-suffix {
    font-size: 1.8em
}

.price-component .now-price>.prefix,.price-component .original-price>.prefix {
    text-transform: lowercase
}

.price-component .promoCode .code {
    color: #eb1000
}

.price-component .regular-price {
    color: #4a4a4a
}

.price-component .regular-price>.price {
    color: #4a4a4a;
    font-size: 28px;
    white-space: nowrap
}

@media (min-width: 600px) {
    .price-component .regular-price>.price {
        font-size:28px
    }
}

.price-component .discount-disclaimer {
    margin-bottom: 15px;
    font-size: .75em
}

.price-component .price-message {
    color: #4a4a4a
}

.price-component .message {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.price-component .message .icon-component.info {
    position: relative;
    top: 3px;
    display: inline-block;
    cursor: pointer;
    margin: 0 0 0 2px
}

.price-component .tooltip-component {
    max-width: 300px;
    min-width: 240px;
    width: 100vw;
    z-index: 1000
}

.success-animation-icon {
    text-align: center;
    padding: 16px 0 8px
}

.success-animation-icon .animate-svg .icon_circle {
    stroke-dasharray: 100;
    stroke-dashoffset: 100;
    -webkit-animation: circle 3s forwards;
    animation: circle 3s forwards
}

.success-animation-icon .animate-svg .icon_check {
    stroke-dasharray: 100;
    stroke-dashoffset: 100;
    -webkit-animation: check 1s ease-in-out 2s forwards;
    animation: check 1s ease-in-out 2s forwards
}

@-webkit-keyframes circle {
    to {
        stroke-dashoffset: 0
    }
}

@keyframes circle {
    to {
        stroke-dashoffset: 0
    }
}

@-webkit-keyframes check {
    to {
        stroke-dashoffset: 0
    }
}

@keyframes check {
    to {
        stroke-dashoffset: 0
    }
}

.confirmation-popup .cta.button.secondary.saved-in-wishlist {
    border-color: #d5d7d8;
    color: #4a4a4a;
    pointer-events: none
}

.confirmation-popup .cta.button.secondary.saved-in-wishlist .success-animation-icon {
    padding: 8px
}

.confirmation-popup .cta.button.secondary.saved-in-wishlist .success-animation-icon svg .icon_check,.confirmation-popup .cta.button.secondary.saved-in-wishlist .success-animation-icon svg .icon_circle {
    stroke: #4a4a4a
}

.confirmation-popup .cta.button.secondary.add-to-wishlist .icon-heart {
    margin-right: 8px
}

.confirmation-popup .cta.button.secondary.add-to-wishlist:hover {
    background: #fff;
    color: #100e31
}

#content-wrapper.modal-overlay {
    max-height: 100vh
}

.confirmation-popup {
    display: grid;
    grid-row-gap: 16px;
    background-color: #fff;
    position: fixed;
    left: 50vw;
    top: 50vh;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin: 0 auto;
    z-index: 1100;
    padding: 48px 16px 16px;
    max-width: 400px;
    width: 85%;
    text-align: center
}

@media (min-width: 600px) {
    .confirmation-popup {
        padding:48px 40px 24px
    }
}

.confirmation-popup .close-button {
    position: absolute;
    top: 0;
    right: 0;
    width: 48px;
    height: 48px
}

.confirmation-popup .close-button .icon-component.close path {
    fill: #0024d6
}

.confirmation-popup .confirm-content {
    width: 100%
}

.confirmation-popup .confirm-content .title {
    margin-bottom: 24px
}

.confirmation-popup .confirm-content p {
    margin-bottom: 8px
}

.confirmation-popup .body-small-01 {
    font-style: italic
}

.confirmation-popup .button.cta,.confirmation-popup .cta {
    margin: auto;
    width: 100%;
    max-width: 300px;
    padding: 8px
}

.confirmation-popup .button.cta div,.confirmation-popup .cta div {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.confirmation-popup .button.cta {
    margin-top: 18px
}

.confirmation-popup .button.cta .icon-component {
    margin: 8px
}

.confirmation-popup .buttons {
    list-style: none;
    padding-left: 0
}

.confirmation-popup .buttons .cta.cancel {
    text-transform: capitalize;
    color: #0024d6;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.confirmation-popup .buttons .cta.cancel .icon-component {
    margin: 0 10px 0 0;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    top: 1px;
    position: relative
}

.confirmation-popup .buttons .cta.cancel .icon-component svg path {
    fill: #0024d6
}

.cta.dropdown-selector {
    -webkit-border-radius: 0;
    border-radius: 0;
    border: none;
    height: 48px;
    background-color: #100e31;
    width: 100%;
    position: relative
}

.cta.dropdown-selector .current-selection {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: left;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-flow: wrap;
    -ms-flex-flow: wrap;
    flex-flow: wrap;
    color: #fff;
    height: 100%;
    width: 100%;
    padding: 0 0 0 16px;
    -webkit-box-flex: 5;
    -webkit-flex: 5;
    -ms-flex: 5;
    flex: 5;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: left;
    -webkit-justify-content: left;
    -ms-flex-pack: left;
    justify-content: left
}

.cta.dropdown-selector .current-selection:hover {
    background-color: #0024d6
}

.cta.dropdown-selector .current-selection:after {
    content: none
}

.cta.dropdown-selector .current-selection.open .icon-component.chevron {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.cta.dropdown-selector .current-selection .icon-component.chevron {
    margin-right: 1em;
    -webkit-transition: all .3s;
    transition: all .3s
}

.cta.dropdown-selector .current-selection .icon-component.chevron svg {
    width: 14px
}

.cta.dropdown-selector .current-selection .icon-component.chevron path {
    fill: #fff
}

.cta.dropdown-selector .dropdown-list {
    position: absolute;
    z-index: 100
}

.cta.dropdown-selector .list {
    max-height: 264px;
    overflow: hidden;
    border-bottom: 1px solid #100e31
}

.cta.dropdown-selector .list>.item {
    width: 100%;
    height: 48px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-variant-numeric: lining-nums;
    font-size: 14px;
    line-height: 24px;
    color: #100e31;
    border-color: #d5d7d8 #100e31;
    border-style: solid;
    border-width: 0 1px 1px;
    background-color: #fff;
    position: relative
}

.cta.dropdown-selector .list>.item>button {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 0 16px;
    height: 100%;
    width: 100%
}

.cta.dropdown-selector .list>.item>button:focus {
    outline-offset: -2px
}

.cta.dropdown-selector .list>.item:hover {
    background-color: #fff
}

.cta.dropdown-selector .list>.item.selected:after,.cta.dropdown-selector .list>.item:hover:after {
    position: absolute;
    content: "";
    display: block;
    left: 0;
    top: 0;
    height: 100%;
    border-left: 4px solid #d5d7d8
}

.cta.dropdown-selector .list>.item.selected:after {
    border-color: #0024d6
}

.cta.dropdown-selector .list>.item:first-child {
    border-top: 1px solid #100e31
}

.cta.dropdown-selector .list>.item:last-child {
    border-bottom: 0
}

.cta {
    width: 100%
}

.cta .bn-button {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background-color: #100e31;
    text-align: center;
    text-shadow: none;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: 1px;
    font-size: 14px;
    line-height: 24px;
    height: 48px;
    -webkit-border-radius: 0;
    border-radius: 0;
    padding-top: 1px;
    width: 100%;
    border: 1px solid #100e31;
    background-image: none;
    background-color: #fff;
    text-transform: uppercase;
    color: #100e31
}

.cta .bn-button:hover {
    background-color: #0024d6
}

.cta .bn-button.disabled {
    background-color: #f6f6f6;
    border: 1px solid #d5d7d8;
    color: #757575;
    cursor: text
}

.cta .bn-button .spinner {
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    width: 32px;
    height: 32px;
    display: block;
    margin: 0 auto
}

.cta .bn-button.override-theme:not(.reset-build-item) {
    background-color: #100e31;
    color: #fff
}

.cta .bn-button.override-theme:not(.reset-build-item):hover {
    background-color: #0024d6!important;
    color: #fff!important
}

.cta .bn-button:not(.disabled):hover {
    background-color: #fff;
    border: 1px solid #0024d6;
    color: #0024d6
}

.cta .bn-button.reset-build-item {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #0024d6;
    text-transform: none;
    border: none;
    margin-top: 8px
}

.cta .bn-button.reset-build-item .start-over {
    position: relative;
    top: 2px
}

.cta .bn-button.reset-build-item .start-over svg {
    width: 16px;
    height: 16px
}

.cta .bn-button.reset-build-item:hover {
    border: none
}

.bank-wire-price,.price-message {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    line-height: 24px
}

.bank-wire-price .message,.bank-wire-price .price,.price-message .message,.price-message .price {
    font-size: 14px;
    color: #757575;
    line-height: 24px;
    letter-spacing: .5px
}

.bank-wire-price .tooltip-container,.price-message .tooltip-container {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 20px;
    margin-left: 8px;
    vertical-align: middle
}

.bank-wire-price .tooltip-container .tooltip-component,.price-message .tooltip-container .tooltip-component {
    -webkit-box-shadow: 0 1px 10px 0 rgba(0,0,0,.2);
    box-shadow: 0 1px 10px 0 rgba(0,0,0,.2);
    z-index: 1000;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    color: #4a4a4a;
    font-size: 14px;
    letter-spacing: .5px;
    line-height: 24px;
    padding: 38px 16px 16px;
    border: 0;
    -webkit-border-radius: 0;
    border-radius: 0
}

.bank-wire-price .tooltip-container .tooltip-component a,.price-message .tooltip-container .tooltip-component a {
    color: #0024d6
}

.bank-wire-price .tooltip-container .tooltip-component .tooltip-component-arrow,.price-message .tooltip-container .tooltip-component .tooltip-component-arrow {
    border-color: transparent
}

.bank-wire-price .tooltip-container .tooltip-component .close-button,.price-message .tooltip-container .tooltip-component .close-button {
    right: 0;
    top: 0;
    width: 48px;
    height: 48px
}

.bank-wire-price .tooltip-container .tooltip-component .close-button path,.price-message .tooltip-container .tooltip-component .close-button path {
    fill: #0024d6
}

.bank-wire-price .tooltip-container svg,.price-message .tooltip-container svg {
    max-height: 20px;
    width: 16px
}

.special-order {
    margin: 8px 0 24px;
    padding: 24px;
    -webkit-box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    box-shadow: 0 0 9px 2px rgba(74,74,74,.32);
    background: #fff
}

.special-order .title {
    text-transform: capitalize;
    margin: 0 0 8px;
    font-size: 14px
}

.special-order.warning {
    border-left: 4px solid #b68c3e
}

.special-order.warning .title {
    color: #100e31
}

.special-order.alert {
    border-left: 4px solid #eb1000
}

.special-order.alert .title {
    color: #eb1000
}

.special-order.alert .title .icon-component svg {
    width: 16px
}

.special-order.alert .title .icon-component svg path {
    stroke: #eb1000
}

.special-order a {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    color: #0024d6;
    text-transform: capitalize;
    display: block;
    margin: 16px 0 0
}

.special-order a .icon-component.chevron {
    width: 10px;
    margin: 0 0 2px 5px;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg)
}

.special-order a .icon-component.chevron path {
    fill: #0024d6
}

.special-order .non-link-contact-number {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 14px;
    margin-top: 16px
}

.special-order .mainland-china {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    white-space: nowrap;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.special-order .mainland-china>a {
    font-size: 12.25px
}

.special-order.display-false {
    display: none
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg)
    }

    to {
        -webkit-transform: rotate(1turn)
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    to {
        -webkit-transform: rotate(1turn);
        transform: rotate(1turn)
    }
}

.cta-wrapper {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 16px
}

.cta-wrapper,.cta-wrapper .product-size-cta {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.cta-wrapper .product-size-cta {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1
}

.cta-wrapper .product-size-cta .bn-button.cta-button {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background-image: none;
    background-color: #100e31;
    text-align: center;
    text-shadow: none;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: 1px;
    font-size: 14px;
    line-height: 24px;
    height: 48px;
    -webkit-border-radius: 0;
    border-radius: 0;
    padding-top: 1px
}

.cta-wrapper .product-size-cta .bn-button.cta-button:hover {
    background-color: #0024d6
}

.cta-wrapper .product-size-cta .bn-button.cta-button.disabled {
    background-color: #f6f6f6;
    border: 1px solid #d5d7d8;
    color: #757575;
    cursor: text
}

.cta-wrapper .product-size-cta .bn-button.cta-button .spinner {
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    width: 32px;
    height: 32px;
    display: block;
    margin: 0 auto
}

.cta-wrapper .wishlist-icon-wrapper {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-item-align: center;
    position: relative;
    width: 25%;
    height: 48px
}

.cta-wrapper .icon-component,.cta-wrapper .wishlist-icon-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -webkit-align-self: center;
    align-self: center
}

.cta-wrapper .icon-component {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -ms-flex-item-align: center;
    margin: 0;
    cursor: pointer
}

.cta-wrapper .icon-component>svg {
    max-height: 20px
}

.cta-wrapper .icon-component>svg path {
    fill: #100e31
}

.body-copy-01 {
    font-size: 14px;
    line-height: 1.5rem;
    font-weight: 400;
    letter-spacing: .5px
}

.body-copy-01,.cannot-resize-component {
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.cannot-resize-component {
    margin-top: 12px;
    color: #4a4a4a;
    letter-spacing: 0
}

.product-customizer {
    -webkit-font-smoothing: antialiased;
    font-variant-numeric: lining-nums;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    margin-bottom: 24px
}

@media (min-width: 600px) {
    .product-customizer {
        margin-bottom:32px
    }
}

.product-customizer .title {
    font-size: 14px;
    color: #4a4a4a;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 8px
}

.product-customizer .title .prefix {
    margin-right: 8px
}

.product-customizer .title span:last-child {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.product-customizer .option-link {
    display: block
}

.product-customizer .option-link:hover {
    text-decoration: none
}

.product-customizer .options {
    list-style: none;
    padding: 0
}

.product-customizer .options,.product-customizer .options .option {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.product-customizer .options .option {
    cursor: pointer;
    margin: 5px 8px 8px;
    height: 32px;
    width: 32px;
    position: relative
}

.product-customizer .options .option.selected {
    cursor: default
}

.product-customizer .options .option.alternate-metals,.product-customizer .options .option.alternate-total-carat-weight {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    text-decoration: none;
    font-size: 10.5px;
    color: #4a4a4a;
    -webkit-border-radius: 100%;
    border-radius: 100%
}

.product-customizer .options .option.alternate-metals:before,.product-customizer .options .option.alternate-total-carat-weight:before {
    width: 120%
}

.product-customizer .options .option.alternate-total-carat-weight {
    border: 3px solid #d5d7d8
}

.product-customizer .options .option.alternate-gemstones.option-diamond {
    background: 50%/120% no-repeat url(/bnsecure/static/icons/svg/gemstone-customizers/diamond.svg)
}

.product-customizer .options .option.alternate-gemstones.option-sapphire {
    background: 50%/120% no-repeat url(/bnsecure/static/icons/svg/gemstone-customizers/sapphire.svg)
}

.product-customizer .options .option.alternate-gemstones.option-pink {
    background: 50%/120% no-repeat url(/bnsecure/static/icons/svg/gemstone-customizers/pink.svg)
}

.product-customizer .options .option.alternate-gemstones.option-yellow {
    background: 50%/120% no-repeat url(/bnsecure/static/icons/svg/gemstone-customizers/yellow.svg)
}

.product-customizer .options .option.alternate-shapes.option-round {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-round-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-princess {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-princess-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-emerald {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-emerald-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-asscher {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-asscher-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-cushion {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-cushion-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-marquise {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-marquise-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-radiant {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-radiant-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-oval {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-oval-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-pear {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-pear-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-heart {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-heart-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-baguette {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-baguette-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-cadillac {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-cadillac-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-halfmoon {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-halfmoon-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-kite {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-kite-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-trillion {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-trillion-diamond.svg)
}

.product-customizer .options .option.alternate-shapes.option-trapezoid {
    background: 50% no-repeat url(/bnsecure/static/icons/svg/catalog/shape-trapezoid-diamond.svg)
}

.product-customizer .options .option:before {
    content: "";
    position: absolute;
    bottom: -12px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    border-bottom: 2px solid transparent
}

.product-customizer .options .option.selected:before,.product-customizer .options .option:hover:before {
    border-bottom: 2px solid #0024d6
}

.product-customizer .options .option:not(.selected):hover:before {
    border-color: #cdcdcd
}

.product-customizer .options .option.option-14kRoseGold {
    border: 3px solid #e2a79f
}

.product-customizer .options .option.option-14kWhiteGold {
    border: 3px solid #d5d7d8
}

.product-customizer .options .option.option-14kYellowGold {
    border: 3px solid #f1ca8b
}

.product-customizer .options .option.option-18kRoseGold {
    border: 3px solid #e2a79f
}

.product-customizer .options .option.option-18kWhiteGold {
    border: 3px solid #d5d7d8
}

.product-customizer .options .option.option-18kYellowGold {
    border: 3px solid #f1ca8b
}

.product-customizer .options .option.option-platinum {
    border: 3px solid #757575
}

.product-customizer .options .option.option-14kWhiteAndYellowGold {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#f1ca8b),color-stop(.47,#cdcdcd))!important;
    border: none
}

.product-customizer .options .option.option-14kWhiteAndYellowGold:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-14kWhiteAndYellowGold>span {
    z-index: 1000
}

.product-customizer .options .option.option-18kWhiteAndYellowGold {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#f1ca8b),color-stop(.47,#cdcdcd))!important;
    border: none
}

.product-customizer .options .option.option-18kWhiteAndYellowGold:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-18kWhiteAndYellowGold>span {
    z-index: 1000
}

.product-customizer .options .option.option-14kWhiteAndRoseGold {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#e2a79f),color-stop(.47,#cdcdcd))!important;
    border: none
}

.product-customizer .options .option.option-14kWhiteAndRoseGold:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-14kWhiteAndRoseGold>span {
    z-index: 1000
}

.product-customizer .options .option.option-18kWhiteAndRoseGold {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#e2a79f),color-stop(.47,#cdcdcd))!important;
    border: none
}

.product-customizer .options .option.option-18kWhiteAndRoseGold:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-18kWhiteAndRoseGold>span {
    z-index: 1000
}

.product-customizer .options .option.option-14kRoseGoldAndPlatinum {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#757575),color-stop(.47,#e2a79f))!important;
    border: none
}

.product-customizer .options .option.option-14kRoseGoldAndPlatinum:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-14kRoseGoldAndPlatinum>span {
    z-index: 1000
}

.product-customizer .options .option.option-18kRoseGoldAndPlatinum {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#757575),color-stop(.47,#e2a79f))!important;
    border: none
}

.product-customizer .options .option.option-18kRoseGoldAndPlatinum:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-18kRoseGoldAndPlatinum>span {
    z-index: 1000
}

.product-customizer .options .option.option-14kYellowGoldAndPlatinum {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#757575),color-stop(.47,#f1ca8b))!important;
    border: none
}

.product-customizer .options .option.option-14kYellowGoldAndPlatinum:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-14kYellowGoldAndPlatinum>span {
    z-index: 1000
}

.product-customizer .options .option.option-18kYellowGoldAndPlatinum {
    background-image: -webkit-gradient(linear,right bottom,left top,color-stop(.47,#757575),color-stop(.47,#f1ca8b))!important;
    border: none
}

.product-customizer .options .option.option-18kYellowGoldAndPlatinum:after {
    content: "";
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    position: absolute;
    height: 26px;
    width: 26px
}

.product-customizer .options .option.option-18kYellowGoldAndPlatinum>span {
    z-index: 1000
}

.finance-message-wrapper {
    margin-top: 16px
}

.finance-message-wrapper a {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    text-decoration: underline
}

body:not(.alloy),html {
    color: #4a4a4a;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 16px;
    line-height: 1.5rem;
    font-variant-numeric: lining-nums;
    -webkit-font-smoothing: antialiased
}

@font-face {
    font-family: Brown LL;
    src: url(/bnsecure/static/font/BrownLL-Regular.woff2?v=1) format("woff2"),url(/bnsecure/static/font/BrownLL-Regular.woff?v=1) format("woff");
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: Brown LL Bold;
    src: url(/bnsecure/static/font/BrownLL-Bold.woff2?v=1) format("woff2"),url(/bnsecure/static/font/BrownLL-Bold.woff?v=1) format("woff");
    font-weight: 400;
    font-style: normal
}

.t1,.t2,.t3,h1,h2,h3 {
    font-variant-numeric: lining-nums;
    letter-spacing: 1px
}

.t1,.t2,.t3,.t4,h1,h2,h3,h4 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 400
}

.t4,h4 {
    line-height: 2rem;
    font-size: 21px;
    font-variant-numeric: lining-nums;
    letter-spacing: .5px
}

.t5,.t6,h5,h6 {
    color: #100e31;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-variant-numeric: lining-nums;
    letter-spacing: .5px
}

.t1,h1 {
    font-size: 42px;
    line-height: 4rem
}

.t2,h2 {
    font-size: 35px;
    line-height: 3rem
}

.t3,h3 {
    font-size: 28px;
    line-height: 2.5rem
}

.t5,h5 {
    font-size: 14px
}

.t5,.t6,h5,h6 {
    line-height: 1.5rem
}

.t6,h6 {
    font-size: 12.25px
}

.title-t1 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 28px;
    line-height: 2.25rem;
    letter-spacing: .65px
}

@media (min-width: 600px) {
    .title-t1 {
        font-size:33.25px;
        line-height: 2.625rem;
        letter-spacing: .8px
    }
}

@media (min-width: 850px) {
    .title-t1 {
        font-size:42px;
        line-height: 4rem;
        letter-spacing: 1px
    }
}

.title-t2 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 21px;
    line-height: 1.75rem;
    letter-spacing: .6px
}

@media (min-width: 600px) {
    .title-t2 {
        font-size:26.25px;
        line-height: 2.125rem;
        letter-spacing: .75px
    }
}

@media (min-width: 850px) {
    .title-t2 {
        font-size:35px;
        line-height: 3rem;
        letter-spacing: 1px
    }
}

.title-t3 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 19.25px;
    line-height: 1.625rem;
    letter-spacing: .65px
}

@media (min-width: 600px) {
    .title-t3 {
        font-size:21px;
        line-height: 1.75rem;
        letter-spacing: .75px
    }
}

@media (min-width: 850px) {
    .title-t3 {
        font-size:28px;
        line-height: 2.5rem;
        letter-spacing: 1px
    }
}

.title-t4 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-weight: 400;
    font-size: 15.75px;
    line-height: 1.375rem;
    letter-spacing: .35px
}

@media (min-width: 600px) {
    .title-t4 {
        font-size:17.5px;
        line-height: 1.5rem;
        letter-spacing: .4px
    }
}

@media (min-width: 850px) {
    .title-t4 {
        font-size:21px;
        line-height: 1.875rem;
        letter-spacing: .5px
    }
}

.title-t5 {
    font-size: 14px;
    line-height: 1.5rem
}

.title-t5,.title-t6 {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-weight: 700;
    letter-spacing: .5px
}

.title-t6 {
    font-size: 12.25px;
    line-height: 1rem
}

.slat-secondary {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-weight: 400;
    line-height: 1.5rem;
    letter-spacing: .5px;
    font-size: 14px
}

@media (min-width: 850px) {
    .slat-secondary {
        font-size:15.75px
    }
}

.intro {
    font-size: 15.75px;
    line-height: 1.6875rem
}

.cta,.cta-like {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    letter-spacing: 1px;
    text-transform: uppercase
}

.cta-like,a.cta:not(.button) {
    font-size: 12.25px;
    padding-right: 20px;
    position: relative;
    color: #100e31;
    text-decoration: none
}

.cta-like:active,.cta-like:hover,a.cta:not(.button):active,a.cta:not(.button):hover {
    color: #0024d6
}

.cta-like:after,a.cta:not(.button):after {
    background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iOSIgaGVpZ2h0PSIxOCI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik0wIDIuNjRMMS4wOSAxIDkgNi44NCAxNi45MSAxIDE4IDIuNjQgOS4wMSA5LjI4IDkgOS4yNmwtLjAxLjAyeiIvPjwvZGVmcz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjMDAyNEQ2IiB0cmFuc2Zvcm09Im1hdHJpeCgwIC0xIDEuMDg3MDggMCAtMS4wOSAxOCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==") no-repeat 50%;
    background-size: 100%;
    content: " ";
    height: 10px;
    width: 6px;
    display: block;
    position: absolute;
    right: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.cta-like.dark,.cta-like.dark:active,.cta-like.dark:hover,a.cta:not(.button).dark,a.cta:not(.button).dark:active,a.cta:not(.button).dark:hover {
    color: #fff
}

.cta-like.dark:after,a.cta:not(.button).dark:after {
    background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iOSIgaGVpZ2h0PSIxOCI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik0wIDIuNjRMMS4wOSAxIDkgNi44NCAxNi45MSAxIDE4IDIuNjQgOS4wMSA5LjI4IDkgOS4yNmwtLjAxLjAyeiIvPjwvZGVmcz48dXNlIHhsaW5rOmhyZWY9IiNhIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZmZmIiB0cmFuc2Zvcm09Im1hdHJpeCgwIC0xIDEuMDg3MDggMCAtMS4wOSAxOCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==") no-repeat 50%;
    background-size: 100%
}

.button.cta,button.cta {
    border: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-size: 14px;
    height: 48px;
    width: 256px;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    cursor: pointer
}

.button.cta.primary,button.cta.primary {
    color: #fff;
    background-color: #100e31
}

.button.cta.primary:active,.button.cta.primary:hover,button.cta.primary:active,button.cta.primary:hover {
    background-color: #0024d6
}

.button.cta.primary.disabled,button.cta.primary.disabled {
    color: #757575;
    background-color: #f6f6f6;
    border: 1px solid #d5d7d8
}

.button.cta.primary.disabled:active,.button.cta.primary.disabled:hover,button.cta.primary.disabled:active,button.cta.primary.disabled:hover {
    background-color: #f6f6f6
}

.button.cta.secondary,button.cta.secondary {
    background-color: #fff;
    border: 1px solid #100e31;
    color: #100e31
}

.button.cta.secondary:active,.button.cta.secondary:hover,button.cta.secondary:active,button.cta.secondary:hover {
    background-color: #100e31;
    color: #fff
}

.button.cta.dark.primary,button.cta.dark.primary {
    color: #100e31;
    background-color: #fff
}

.button.cta.dark.primary:active,.button.cta.dark.primary:hover,button.cta.dark.primary:active,button.cta.dark.primary:hover {
    background-color: #fff
}

.button.cta.dark.secondary,button.cta.dark.secondary {
    background-color: #100e31;
    border: 1px solid #fff;
    color: #fff
}

.button.cta.dark.secondary:active,.button.cta.dark.secondary:hover,button.cta.dark.secondary:active,button.cta.dark.secondary:hover {
    background-color: #fff;
    color: #100e31
}

.copy {
    letter-spacing: .03125rem
}

.copy.intro {
    font-size: 15.75px;
    line-height: 1.6875rem
}

.copy.body {
    font-size: 14px;
    line-height: 1.5rem
}

.numeric {
    font-variant-numeric: lining-nums
}

.body-intro-01 {
    font-size: 15.75px
}

.body-copy-01,.body-intro-01,.byo-summary .total-carat.numeric {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    line-height: 1.5rem;
    font-weight: 400
}

.body-copy-01,.byo-summary .total-carat.numeric {
    font-size: 14px;
    letter-spacing: .5px
}

.body-small-01 {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 12.25px;
    line-height: 1.25rem;
    font-weight: 400;
    letter-spacing: .25px
}

.byo-summary h1.title {
    margin-bottom: 0
}

.byo-summary .product-title {
    padding-left: 0;
    font-size: 21px;
    line-height: 36px
}

.byo-summary .product-title .sub-text {
    font-size: 14px;
    display: block;
    white-space: normal
}

.byo-summary .product-title .lab-grown-text {
    font-style: normal;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 20px;
    line-height: 25px;
    letter-spacing: .2px
}

.byo-summary .product-rating {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 8px
}

.byo-summary .price-wrapper {
    position: relative;
    margin-bottom: 12px
}

.byo-summary .price-wrapper .price-component {
    margin-bottom: 0
}

.byo-summary .price-wrapper .only-one-available-message {
    position: absolute;
    top: 0;
    right: 0;
    color: #eb1000
}

.byo-summary .promoCode .code {
    color: #eb1000
}

.byo-summary .bank-wire-price section {
    min-width: auto;
    max-width: auto
}

.byo-summary .total-carat.numeric {
    margin-bottom: 0
}

.byo-summary .product-size-customizer {
    margin-top: 24px
}

.byo-summary .cta-wrapper .add-remove-heart {
    width: 48px;
    height: 48px;
    margin-left: 8px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #100e31
}

.byo-summary .cta-wrapper .add-remove-heart .icon-heart {
    color: #0024d6
}

.byo-summary .extra-messaging-wrapper {
    margin-top: 24px
}

.expand-collapse-content-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.expand-collapse-content-wrapper .content {
    opacity: 0;
    display: none
}

.expand-collapse-content-wrapper .content.expanded {
    opacity: 1;
    display: block;
    -webkit-transition: opacity 1s ease-out;
    transition: opacity 1s ease-out
}

.expand-collapse-content-wrapper button.toggle-button {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 12.25px;
    color: #100e31;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    -webkit-align-self: flex-end;
    -ms-flex-item-align: end;
    align-self: flex-end;
    -webkit-box-flex: 0;
    -webkit-flex-grow: 0;
    -ms-flex-positive: 0;
    flex-grow: 0
}

.expand-collapse-content-wrapper button.toggle-button .icon-component.plus {
    margin: 0 0 2px 8px
}

.expand-collapse-content-wrapper button.toggle-button .icon-component.minus {
    margin-left: 8px
}

.details-table,.details-table-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%
}

.details-table {
    font-variant-numeric: lining-nums;
    margin-bottom: 16px;
    padding: 0
}

.details-table .row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    height: 48px;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: .5px;
    line-height: 24px;
    -webkit-transition: .5s ease;
    transition: .5s ease
}

.details-table .row:nth-child(2n) {
    background-color: #f6f6f6
}

.details-table .row [class^=column-] {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%
}

.details-table .row [class^=column-]:last-child {
    text-align: right
}

.details-table .row [class^=column-] .tooltip-placeholder {
    margin-left: 21px
}

.details-table .row [class^=column-]>div {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    align-self: center;
    padding: 0 8px
}

.details-table .row .column-0 {
    min-width: 85px
}

.details-table .row .tooltip-container {
    margin: 0 0 2px 5px;
    vertical-align: middle;
    cursor: pointer;
    height: 100%
}

.details-table .row .tooltip-container>button:not(.tooltip-component) {
    display: -webkit-box!important;
    display: -webkit-flex!important;
    display: -ms-flexbox!important;
    display: flex!important;
    height: 100%
}

.details-table .row .tooltip-container .tooltip-component {
    min-width: 300px;
    max-width: 400px
}

.details-table .row .tooltip-container .icon-component.info {
    width: 16px
}

.screen-reader-only {
    border: 0;
    clip: #000;
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 1px
}

.skip-link {
    left: -100%;
    position: absolute;
    z-index: 1000;
    background-color: #fff;
    color: #000
}

.skip-link:focus {
    left: 50%
}

main:focus-within {
    outline: none
}

.focusable:focus,a:focus,button:focus,input:focus,select:focus,textarea:focus {
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff;
    outline: 2px solid #b68c3e;
    outline-offset: 2px
}

body.no-focus-outline .focusable:focus,body.no-focus-outline a:focus,body.no-focus-outline button:focus,body.no-focus-outline input:focus,body.no-focus-outline select:focus,body.no-focus-outline textarea:focus,div.alloy .focusable:focus,div.alloy a:focus,div.alloy button:focus,div.alloy input:focus,div.alloy select:focus,div.alloy textarea:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline-offset: 0
}

.expand-collapse-content-wrapper {
    margin-top: 16px
}

.expand-collapse-content-wrapper .toggle-button {
    padding: 16px 0 6px
}

h3:focus-within {
    -webkit-box-shadow: 0 0 0 1px #fff;
    box-shadow: 0 0 0 1px #fff;
    outline: 2px solid #b68c3e;
    outline-offset: 2px
}

body.no-focus-outline h3:focus-within,div.alloy h3:focus-within {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline-offset: 0
}

.more-details-section .data-tables.small-expanded {
    display: block
}

.more-details-section .data-tables>section {
    margin-top: 32px
}

.more-details-section .details-table {
    display: inherit;
    margin-bottom: 0
}

@media (min-width: 600px) {
    .more-details-section .details-table {
        margin:0 16px 0 0;
        width: 62.5%
    }
}

@media (min-width: 850px) {
    .more-details-section .details-table {
        margin:0 24px 0 0
    }
}

.more-details-section .engraveable {
    padding: 10px
}

.more-details-section .engraveable.even {
    background-color: #f6f6f6
}

@media (min-width: 600px) {
    .more-details-section .engraveable {
        margin:0 16px 0 0;
        width: 62.5%
    }
}

@media (min-width: 850px) {
    .more-details-section .engraveable {
        margin:0 24px 0 0
    }
}

.more-details-section .engraveable .row:nth-child(n+6) {
    display: none
}

@media (min-width: 600px) {
    .more-details-section .engraveable .row:nth-child(n+6) {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }
}

.more-details-section .engraveable .engrave-text {
    font-family: Domaine,Times New Roman,Georgia,serif;
    color: #4a4a4a;
    margin-right: 10px
}

.item-card {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 8px;
    border-left: 3px solid transparent;
    -webkit-transition: border-left .2s ease;
    transition: border-left .2s ease
}

@media (min-width: 600px) {
    .item-card {
        padding:0 0 16px
    }
}

@media (min-width: 850px) {
    .item-card {
        padding:0 0 24px
    }
}

.item-card:hover {
    border-left: 3px solid #0024d6
}

.item-card .offer-image,.item-card .offer-text {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    text-decoration: none
}

.item-card .offer-image {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row
}

.item-card .offer-image:hover {
    text-decoration: none
}

.item-card .offer-text {
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: left;
    padding-left: 24px;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: .5px
}

.item-card .offer-text>p {
    line-height: 24px
}

.item-card .offer-text>p.subtitle-name-start {
    color: #4a4a4a
}

.item-card .offer-text>p.subtitle-name-type {
    color: #757575
}

.item-card .offer-text>p.subtitle-price {
    color: #4a4a4a;
    font-size: 14px;
    margin-top: 8px
}

.relative {
    position: relative
}

.relative .siema-slider {
    width: auto;
    max-height: 400px;
    margin: 0 4.4%;
    overflow-x: visible
}

.relative .siema-slider>ul {
    list-style: none;
    padding: 0
}

.relative .siema-slider .card-body,.relative .siema-slider>ul {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex
}

.relative .siema-slider .card-body {
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    letter-spacing: .5px;
    color: #4a4a4a;
    position: relative;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
    margin-right: 8px;
    padding: 8px;
    border-bottom: 3px solid transparent;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
    text-decoration: none
}

@media (min-width: 600px) {
    .relative .siema-slider .card-body {
        margin-right:16px
    }
}

@media (min-width: 850px) {
    .relative .siema-slider .card-body {
        margin-right:24px
    }
}

.relative .siema-slider .card-body:hover {
    border-bottom: 3px solid #0024d6
}

.relative .siema-slider .card-body.similar-setting-card img {
    margin-bottom: 20px
}

.relative .siema-slider .card-body.selected-match:before {
    content: "Matching Set";
    font-size: 14px;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%
}

.relative .siema-slider .card-body[style*="visibility: hidden;"] .catalog-view-offer .image-and-details .image-or-icon>img,.relative .siema-slider .card-body[style*="visibility: hidden;"] canvas {
    display: none
}

.relative .siema-slider .card-body .item-subtitle,.relative .siema-slider .card-body .item-title {
    line-height: 24px;
    font-variant-numeric: lining-nums;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    width: 100%
}

.relative .siema-slider .card-body .item-price {
    line-height: 24px;
    font-variant-numeric: lining-nums;
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
    font-family: Brown LL,Arial,Helvetica,sans-serif
}

.relative .siema-slider .card-body .item-price:not(.original-price):not(.sale-price) {
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.relative .siema-slider .card-body .item-price.sale-price {
    color: #0024d6;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif
}

.relative .siema-slider .card-body .item-title {
    margin-top: 8px
}

.relative .siema-slider .card-body .item-subtitle {
    color: #757575;
    margin-bottom: 8px
}

.relative .siema-slider .card-body a {
    display: block;
    width: 100%;
    height: 100%;
    text-align: center;
    text-align: -webkit-center
}

.relative .siema-slider .card-body img,.relative .siema-slider .card-body picture {
    display: block;
    width: 100%;
    max-width: 220px
}

@media (min-width: 850px) {
    .relative .siema-slider .card-body img,.relative .siema-slider .card-body picture {
        max-width:220px
    }
}

.relative .siema-slider .card-body .designation {
    position: absolute;
    top: 10px;
    left: 0;
    text-transform: uppercase;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    color: #100e31
}

.relative .siema-slider .has-heading .slider-spacer {
    height: 80%
}

.relative .slider-spacer {
    width: 16px;
    height: 100%;
    position: absolute;
    z-index: 10;
    display: none
}

@media (min-width: 600px) {
    .relative .slider-spacer {
        width:24px
    }
}

.relative .slider-spacer.left {
    background: -webkit-gradient(linear,left top,right top,from(hsla(0,0%,100%,0)),to(hsla(0,0%,100%,.7)));
    background: linear-gradient(90deg,hsla(0,0%,100%,0),hsla(0,0%,100%,.7));
    left: 0;
    display: none
}

@media (min-width: 600px) {
    .relative .slider-spacer.left {
        display:block;
        background: -webkit-gradient(linear,left top,right top,from(hsla(0,0%,100%,.5)),to(hsla(0,0%,100%,.5)));
        background: linear-gradient(90deg,hsla(0,0%,100%,.5),hsla(0,0%,100%,.5))
    }
}

.relative .slider-spacer.right {
    background: -webkit-gradient(linear,right top,left top,from(hsla(0,0%,100%,.7)),to(hsla(0,0%,100%,0)));
    background: linear-gradient(270deg,hsla(0,0%,100%,.7),hsla(0,0%,100%,0));
    right: 0
}

@media (min-width: 600px) {
    .relative .slider-spacer.right {
        background:-webkit-gradient(linear,right top,left top,from(hsla(0,0%,100%,.5)),to(hsla(0,0%,100%,.5)));
        background: linear-gradient(270deg,hsla(0,0%,100%,.5),hsla(0,0%,100%,.5))
    }
}

.relative .hidden {
    display: none
}

.relative .left-control {
    left: -8px
}

.relative .left-control .chevron svg {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

.relative .right-control {
    right: -8px
}

.relative .right-control .chevron svg {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg)
}

.relative .left-control,.relative .right-control {
    position: absolute;
    top: 0;
    height: 100%;
    vertical-align: middle
}

.relative .left-control .rotator-arrow,.relative .right-control .rotator-arrow {
    width: 48px;
    height: 48px;
    z-index: 20;
    position: relative;
    top: 40%
}

.relative .left-control .rotator-arrow:after,.relative .right-control .rotator-arrow:after {
    content: none
}

.relative .left-control .rotator-arrow .chevron,.relative .right-control .rotator-arrow .chevron {
    width: 20px
}

.relative .left-control .rotator-arrow .chevron svg,.relative .right-control .rotator-arrow .chevron svg {
    height: 20px
}

.relative .left-control .rotator-arrow .chevron svg path,.relative .right-control .rotator-arrow .chevron svg path {
    fill: #100e31
}

#similar-settings-slat .relative {
    overflow: hidden
}

.template.slider .siema-slider {
    margin-left: 0;
    margin-right: 0
}

.template.slider .left-control {
    left: 0
}

.template.slider .right-control {
    right: 0
}

.template.slider .slat-title.has-view-all .title {
    border-right: 1px solid #d5d7d8;
    padding-right: 8px;
    margin-right: 8px;
    display: inline-block;
    text-transform: none;
    line-height: 30px
}

.template.slider .slat-title.has-view-all .view-all-link .link-chevron {
    margin-left: 3px;
    width: 6px
}

.template.slider .slat-title.has-view-all .view-all-link .link-chevron path {
    fill: #0024d6
}

.summarized-setting-details-page {
    color: #4a4a4a;
    -webkit-font-smoothing: antialiased;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 14px;
    font-variant-numeric: lining-nums
}

.summarized-setting-details-page .section-header {
    font-size: 28px;
    line-height: 40px;
    letter-spacing: 1px;
    margin-bottom: 24px
}

.summarized-setting-details-page .slat-title {
    text-transform: uppercase;
    font-family: Brown LL Bold,Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 24px;
    letter-spacing: .5px;
    margin-bottom: 8px
}

.summarized-setting-details-page .grid-cell {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.summarized-setting-details-page .price-component {
    margin: 16px 0 8px;
    color: #4a4a4a
}

.summarized-setting-details-page .price-component .price.numeric {
    font-size: 21px
}

.summarized-setting-details-page .price-component .message {
    font-size: 12.25px;
    line-height: 20px;
    letter-spacing: .25px;
    color: #757575
}

.summarized-setting-details-page .price-component+.details-error-messaging {
    margin-top: 32px
}

.summarized-setting-details-page .cannot-resize-component {
    font-size: 12.25px;
    margin: 8px 0;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center
}

.summarized-setting-details-page .cannot-resize-component>div.icon-component {
    margin-right: 5px;
    width: 16px;
    -webkit-transform: translateY(2px);
    transform: translateY(2px)
}

.summarized-setting-details-page .content-box {
    background-color: #f6f6f6;
    margin: 8px 0 16px
}

@media (min-width: 850px) {
    .summarized-setting-details-page .content-box {
        margin:0 0 32px
    }
}

.summarized-setting-details-page .image-viewer-slat .image-viewer-plus {
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.summarized-setting-details-page .image-viewer-slat .image-viewer-plus .small-controls-modal {
    z-index: 1000
}

@media (min-width: 600px) {
    .summarized-setting-details-page .image-viewer-slat .image-viewer-plus .image-area,.summarized-setting-details-page .image-viewer-slat .image-viewer-plus .image-area .hover-customizer-image {
        padding-top:22px
    }
}

@media (min-width: 850px) {
    .summarized-setting-details-page .image-viewer-slat .image-viewer-plus .image-area,.summarized-setting-details-page .image-viewer-slat .image-viewer-plus .image-area .hover-customizer-image {
        padding-top:64px
    }
}

@media only screen and (min-width: 360px) {
    .summarized-setting-details-page .image-viewer-slat .zoomable-image-wrapper>.unzoomed {
        min-height:310px
    }
}

@media only screen and (min-width: 375px) {
    .summarized-setting-details-page .image-viewer-slat .zoomable-image-wrapper>.unzoomed {
        min-height:323px
    }
}

@media only screen and (min-width: 411px) {
    .summarized-setting-details-page .image-viewer-slat .zoomable-image-wrapper>.unzoomed {
        min-height:355px
    }
}

@media (min-width: 600px) {
    .summarized-setting-details-page .image-viewer-slat .zoomable-image-wrapper>.unzoomed {
        min-height:328px
    }
}

.summarized-setting-details-page .lifetime-slat .drop-down-title {
    margin-left: 12px;
    letter-spacing: 1px
}

.summarized-setting-details-page .lifetime-slat .top-section {
    height: 47px
}

.summarized-setting-details-page .lifetime-slat .dropdown-text {
    padding-bottom: 16px
}

.summarized-setting-details-page .lifetime-slat svg>path {
    stroke: #100e31;
    fill: #100e31
}

@media (min-width: 850px) {
    .summarized-setting-details-page section.product-details-slat,.summarized-setting-details-page section.product-details-slat+section {
        margin-top:24px
    }
}

.summarized-setting-details-page .product-details-slat {
    border-top: 1px solid #d5d7d8;
    padding-top: 32px
}

.summarized-setting-details-page .product-details-slat .product-description {
    width: 100%;
    letter-spacing: .5px
}

@media (min-width: 600px) {
    .summarized-setting-details-page .product-details-slat .product-description {
        width:75%
    }
}

.summarized-setting-details-page .product-details-slat .similar-settings {
    margin-top: 28px
}

@media (min-width: 850px) {
    .summarized-setting-details-page .product-details-slat .similar-settings {
        display:none
    }
}

.summarized-setting-details-page .product-details-slat .more-details-section {
    border-bottom: 1px solid #d5d7d8;
    margin-bottom: 0
}

@media (min-width: 850px) {
    .summarized-setting-details-page .product-details-slat .more-details-section {
        border-bottom:none;
        margin-bottom: 10
    }
}

@media (min-width: 850px) {
    .summarized-setting-details-page .product-details-slat .contact-information {
        display:none
    }
}

.summarized-setting-details-page .matching-rings {
    margin-bottom: 30px
}

.summarized-setting-details-page .details-table a {
    color: #0024d6
}

@media (min-width: 850px) {
    .summarized-setting-details-page .product-summary-slat .content-box {
        display:none;
        margin: 20px
    }
}

.summarized-setting-details-page .product-summary-slat .title-area {
    letter-spacing: 0
}

.summarized-setting-details-page .product-summary-slat .title-area .title {
    margin: 0
}

.summarized-setting-details-page .product-summary-slat .title-area .subtitle {
    line-height: 24px;
    letter-spacing: 1px
}

.summarized-setting-details-page .product-summary-slat .showroom-dropdown .expandable-widget,.summarized-setting-details-page .product-summary-slat .showroom-dropdown .expandable-widget .dropdown-area {
    margin-bottom: 0
}

.summarized-setting-details-page .contact-info-slat {
    display: none
}

@media (min-width: 850px) {
    .summarized-setting-details-page .contact-info-slat {
        display:-webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }
}

.summarized-setting-details-page .contact-info-slat .slat-title {
    text-transform: none;
    font-family: Brown LL,Arial,Helvetica,sans-serif;
    font-size: 28px;
    line-height: 40px;
    letter-spacing: 1px;
    text-align: center;
    margin-top: 40px
}

.summarized-setting-details-page .contact-info-slat ul {
    padding: 0
}

.summarized-setting-details-page .contact-info-slat .share-bar {
    margin: 12px 0
}

.summarized-setting-details-page #supported-shapes .column-0 span:first-child a {
    display: inline-block;
    line-height: 32px;
    padding-left: 42px;
    background-repeat: no-repeat;
    background-position: 0
}

.summarized-setting-details-page #supported-shapes .column-0 span:first-child a:hover {
    text-decoration: none
}

.summarized-setting-details-page #supported-shapes .column-0 .asscher-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_ASSCHER_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1100%2C80%2C0%2C1500&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .cushion-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_CUSHION_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1160%2C400%2C0%2C1300&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .emerald-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_EMERALD_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1240%2C350%2C0%2C1500&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .heart-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_HEART_HERO_A_042318?%24MODRN_DiaBar_lrg_v2%24=&fmt=png-alpha&hei=32&rgn=1130%2C-100%2C0%2C1900&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .marquise-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_MARQUISE_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1100%2C360%2C0%2C1900&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .oval-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_OVAL_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1340%2C320%2C0%2C1900&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .pear-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_PEAR_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1200%2C530%2C0%2C2000&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .princess-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_PRINCESS_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1340%2C330%2C0%2C1500&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .radiant-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_RADIANT_HERO_A_042318?%24MODRN_DiaBar_lrg_v2_2x%24=&fmt=png-alpha&hei=32&rgn=1480%2C190%2C0%2C1650&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .round-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_R0UND_HERO_A_042318?fmt=png-alpha&hei=32&rgn=1600%2C350%2C0%2C1500&wid=32)
}

.summarized-setting-details-page #supported-shapes .column-0 .astor-column-0 a {
    background: url(https://bnsec.bluenile.com/bluenile/is/image/bluenile/LD_ASTOR_HERO_A_042318?fmt=png-alpha&hei=32&rgn=1600%2C350%2C0%2C1500&wid=32)
}
</style>























<svg xmlns="http://www.w3.org/2000/svg" width="51" height="50.568" viewBox="0 0 51 50.568"><path transform="translate(-.665 -.665) scale(.99804)" fill="#100e31" d="M49.314 25.235c.009.254.02.509.02.765 0 12.866-10.468 23.333-23.334 23.333S2.667 38.866 2.667 26C2.667 13.135 13.134 2.667 26 2.667c8.777 0 16.434 4.873 20.417 12.054a5.533 5.533 0 0 1 1.95-.599C44.103 6.125 35.68.667 26 .667 12.031.667.667 12.03.667 26 .667 39.97 12.03 51.333 26 51.333c13.969 0 25.333-11.364 25.333-25.333 0-.419-.011-.835-.032-1.25a5.546 5.546 0 0 1-1.987.485zm-1.34-5.67c0 .768.456 1.272 1.104 1.272.672 0 1.128-.504 1.128-1.272 0-.721-.456-1.273-1.128-1.273-.648 0-1.105.529-1.105 1.273zm1.104-2.594c1.584 0 2.689 1.177 2.689 2.618 0 1.44-1.105 2.568-2.689 2.568-1.585 0-2.689-1.128-2.689-2.568 0-1.441 1.104-2.618 2.689-2.618zm-8.739 9.555c0-2.857-.936-4.97-2.904-4.97-1.945 0-2.905 2.113-2.905 4.97 0 2.858.96 4.97 2.905 4.97 1.968 0 2.904-2.112 2.904-4.97zm2.809 0c0 3.865-1.968 7.25-5.761 7.25-3.77 0-5.666-3.385-5.666-7.25 0-3.889 1.992-7.225 5.762-7.225 3.769 0 5.665 3.336 5.665 7.225zM22.31 29.024c0 1.464.96 2.592 2.329 2.592 1.488 0 2.304-1.2 2.304-2.569 0-1.512-.864-2.568-2.232-2.568-1.512 0-2.401.936-2.401 2.545zm.649-3.697c.648-.528 1.416-.793 2.376-.793 2.689 0 4.249 1.992 4.249 4.37 0 2.376-1.776 4.873-4.945 4.873-3.025 0-4.994-2.185-4.994-5.066 0-3.481 2.065-6.962 7.875-9.843l1.128 2.113c-2.569 1.2-4.657 2.641-5.69 4.346zm-5.354-4.49l-4.201 4.514c2.905.312 4.13 1.872 4.13 3.936 0 2.353-1.993 4.49-5.21 4.49-1.465 0-2.641-.264-3.817-.648l.624-2.257c1.08.36 2.04.528 3.001.528 1.608 0 2.665-.744 2.665-2.065 0-1.224-1.009-2.04-3.05-2.04-.624 0-1.152.024-1.704.144l-.408-.936 4.177-4.61h-5.09v-2.352h8.835z"></path></svg>


<canvas tabindex="0" class="canvas-image-player focusable" width="600" height="600" role="img" aria-keyshortcuts="R Shift+R ArrowLeft ArrowRight" aria-label="Computer generated model shown with a 1.00-carat round diamond." style="visibility: visible;"></canvas>









<script>if (typeof yotpo !== 'undefined' && !yotpo.v2YotpoLoaded) {
    yotpo = undefined;
}
function EndlessScroll(e) {
    function t(e, t, o, r, s, a) {
        this.page = 1,
        this.per_page = e,
        this._controller = t,
        this.loader = o,
        this.inviewCallbackFunction = r,
        this.isButton = s,
        this.loadIndicator = a,
        this.isButton ? i.call(this) : n.call(this)
    }
    function i() {
        var t = this;
        e.addEventListener(this.loader, "click", function() {
            t.loadIndicator && (e.addClass(t.loader, "yotpo-hidden"),
            e.removeClass(t.loadIndicator, "yotpo-hidden")),
            t.inviewCallbackFunction.call(t)
        })
    }
    function o() {
        this.loadIndicator && (e.addClass(this.loadIndicator, "yotpo-hidden"),
        e.removeClass(this.loader, "yotpo-hidden"))
    }
    function n() {
        e.currentInview.register(this.loader, this.inviewCallbackFunction)
    }
    function r(e) {
        this.batchCallbackFunction(e),
        this.isButton ? o.call(this) : n.call(this)
    }
    return t.prototype.getNextPage = function(e, t) {
        this.batchCallbackFunction = t,
        this.page++,
        e.params || (e.params = {}),
        e.params.page = this.page,
        e.params.per_page = this.per_page,
        this._controller.getBatch(r.bind(this), [e])
    }
    ,
    t.prototype.ignoreLoader = function(t) {
        t ? e.addClass(this.loader, "yotpo-ignore-inview") : e.removeClass(this.loader, "yotpo-ignore-inview")
    }
    ,
    t
}
function Room(e) {
    this.me = e.me,
    this.signalServer = e.signalServer,
    this.iceServers = e.iceServers,
    this.id,
    this.signal,
    this.stream,
    this.peers = {},
    this.channels = {},
    this.handles = {}
}
Yotpo = function() {
    function e(t, i) {
        if (this.appKey = t,
        this.userSettings = i,
        this.widgets = [],
        this.shouldInitialize = !0,
        this.initialized = !1,
        this.allWidgetsReadyCallback = [],
        e.shouldPreventCookies = e.getBoolSetting(!1, this.userSettings.prevent_cookies),
        this.userSettings.disable_shopper_side_cookies && this.userSettings.disable_shopper_side_cookies.settings) {
            var o = e.getBoolSetting(!1, this.userSettings.disable_shopper_side_cookies.settings.disable_onsite_cookies);
            e.shouldPreventCookies = e.shouldPreventCookies || o
        }
        if (!this.userSettings.load_only_widgets_on_page || this.userSettings.load_css_async) {
            var n = this.getUserSetting("css_custom_host");
            v(n) ? _.call(this) : w.call(this)
        }
        C.call(this),
        "undefined" != typeof yotpoTrackConversionData && (u.call(this),
        e.shouldPreventCookies || e.Libraries.Tracker.trackConversionOrder(t, yotpoTrackConversionData),
        this.shouldInitialize = !1)
    }
    function t() {
        var t = this;
        e.forEach(Object.keys(e.widgets), function(e) {
            E.call(t, e),
            l.call(t, e)
        })
    }
    function i() {
        var t = r(this.userSettings.testimonials)
          , i = s.call(this, t, this.userSettings.load_css_async)
          , a = this.userSettings.load_css_async;
        a ? e.loadScript(i, document.body, n.bind(this)) : o.call(this, i)
    }
    function o(t) {
        var i = this;
        e.ajax(t, function(t) {
            if (!t)
                return void e.safeConsole("Missing widgets data");
            var o = JSON.parse(t);
            a.call(i, o.JsContent, o.CssContent),
            n.call(i)
        })
    }
    function n() {
        t.call(this),
        this.getWidgets().length > 0 && h.call(this)
    }
    function r(t) {
        var i = t ? ["testimonials"] : [];
        return e.forEach(Object.keys(e.widgets), function(t) {
            var o = e.widgets[t].selector;
            e.getDocElement().querySelector(o) && i.push(t)
        }),
        i
    }
    function s(t) {
        var i, o = this.userSettings.load_css_async ? ".js" : ".json", n = e.getWidgetHost(this.getUserSetting("host")) + "/" + this.getAppKey() + "/widget_loader" + o;
        this.getUserSetting("version") && (n += "?widget_version=" + this.getUserSetting("version"),
        i = !0);
        var r = t.sort().join(",");
        return n += i ? "&widgets=" + r : "?widgets=" + r,
        this.userSettings.load_css_async && (n += "&load_only_js=true"),
        n
    }
    function a(t, i) {
        e.injectScript(t, document.body);
        var o = this.getUserSetting("css_custom_host");
        v(o) || e.injectCSS(i, document.body)
    }
    function l(t) {
        try {
            if (e.Widgets)
                for (var i = e.Widgets[e.camelize(t)] || e.Widgets.Basic, o = e.getDocElement().querySelectorAll(i.selector || ".yotpo." + t), n = 0; n < o.length; ++n)
                    e.Element.get(o[n]).is("new") && this.addWidget(new i(this,o[n],t));
            !o.length && "undefined" != typeof i.createsElement && i.createsElement(this.getUserSettings()) && this.addWidget(new i(this))
        } catch (r) {
            e.safeConsole(r.message)
        }
    }
    function c() {
        this.pageSku && this.productName && this.getUserSetting("widget_rich_snippet") && this.getBatch(function(e) {
            e = JSON.parse(e);
            var t = e[0].result;
            document.getElementsByTagName("head")[0].insertAdjacentHTML("afterbegin", t)
        }, [{
            method: "rich_snippet",
            params: {
                pid: this.pageSku,
                name: this.productName,
                price: this.productPrice,
                currency: this.productCurrency,
                image: this.productImage
            }
        }])
    }
    function d() {
        var t = e.getDocElement().querySelectorAll(".yotpo-user-reference");
        t.length && (this.userReference = t[0].getAttribute("data-user-reference"))
    }
    function u() {
        this.analytics || (this.analytics = new e.Analytics(this),
        e.currentAnalytics = this.analytics,
        this.inview = new e.Inview(this),
        e.currentInview = this.inview,
        e.hoverAnalytics = new e.HoverIntervalEvent({
            interval: 1e3
        }),
        e.testingGroupsHandler = new e.TestingGroupsHandler(this),
        e.shouldPreventCookies || e.currentAnalytics.trackPageView())
    }
    function p() {
        for (var t, i, o, n = e.getDocElement().querySelectorAll(e.widgets.main.selector), r = 0; r < n.length; r++)
            if (o = n[r],
            i = o.getAttribute("data-product-id"),
            t = "undefined" == typeof t ? i : t,
            t !== i) {
                t = void 0;
                break
            }
        if (t) {
            this.pageSku = t,
            this.productName = o.getAttribute("data-name"),
            this.productPrice = o.getAttribute("data-price"),
            this.productCurrency = o.getAttribute("data-currency");
            var s = o.getAttribute("data-image-url")
              , a = unescape(s);
            (0 === a.indexOf("//") || 0 !== a.indexOf("http")) && (a = "https:" + a),
            this.productImage = e.isValidUrl(s) ? a : ""
        }
    }
    function g(t, i) {
        m.call(t, i),
        y.call(t),
        e.addEventListener(window, "resize", function() {
            f.call(t);
            for (var e = t.getWidgets(), i = 0; i < e.length; i++)
                e[i].trigger("resize")
        }),
        t.trigger("ready")
    }
    function h() {
        var t = this
          , i = [];
        if (e.forEach(t.getWidgets(), function(t, o) {
            if (t.is("initialized") || t.is("processing"))
                return t.is("initialized") && (t.trigger("ready"),
                t.state("ready")),
                void e.testingGroupsHandler.setSeoClient(!0);
            t.state("processing");
            var n, r, s = t.getElement();
            s ? ((e.hasClass(s, "yotpo-main-widget") && "questions" != s.getAttribute("data-mode") || e.hasClass(s, "bottomLine")) && (r = t.getElement().getAttribute("data-product-id") || t.getElement().getAttribute("data-yotpo-product-id")),
            null == r && (n = t.getElement().getAttribute("data-yotpo-element-id"))) : n = "-1";
            var a = {};
            r ? a.widget_product_id = r : (a.index = o,
            a.element_id = n),
            i.push({
                method: t.getMethod(),
                params: Object.assign(t.getSettings(), a)
            })
        }),
        e.removeClassFromElements("yotpo-hidden-offloaded-content"),
        e.testingGroupsHandler.initialize(),
        this.getUserSetting("widgets_data_requests")) {
            for (var o = [], n = 0; n < i.length && n < e.dataRequestsLimit; n++)
                o.push([i[n]]);
            e.dataRequestsLimit < i.length && o.push(i.splice(e.dataRequestsLimit));
            for (var r = o.length, s = 0; s < o.length; s++)
                t.getBatch(function(e) {
                    g(t, e),
                    r--,
                    0 >= r && k.call(t)
                }, o[s], null)
        } else
            t.getBatch(function(e) {
                g(t, e)
            }, i, k)
    }
    function m(t) {
        function i() {
            for (var e = [], t = this.getWidgets(), i = 0; i < a.length; i++) {
                var l = a[i]
                  , c = l.element_id;
                if ("main_widget" === l.method && null != l.widget_product_id)
                    var d = l.widget_product_id
                      , u = r(this.getWidgets(), d);
                else if ("bottomline" === l.method && null != l.widget_product_id)
                    var d = l.widget_product_id
                      , u = s(this.getWidgets(), d);
                else
                    var u = n(this.getWidgets(), c);
                u && (o(u, l),
                e.push(c))
            }
            if (e.length < t.length)
                for (var p = 0; p < t.length; p++) {
                    var g = t[p]
                      , h = g.getElement().getAttribute("data-yotpo-element-id");
                    e.indexOf(h) > 0 || g.is("initialized") && !g.is("ready") && (g.trigger("ready"),
                    g.state("ready"))
                }
        }
        function o(t, i) {
            t.getElement() ? (t.is("initialized") || i && (t.getElement().innerHTML = i.result),
            t.is("initialized") && !t.is("ready") && (t.trigger("ready"),
            t.state("ready"))) : e.safeConsole("Div not found in the Dom.")
        }
        function n(e, t) {
            for (var i = 0; i < e.length; i++) {
                var o = e[i]
                  , n = o.getElement();
                if (n && n.getAttribute("data-yotpo-element-id") == t)
                    return o
            }
            return void 0
        }
        function r(t, i) {
            for (var o = 0; o < t.length; o++) {
                var n = t[o]
                  , r = n.getElement();
                if (r && r.getAttribute("data-product-id") == i && e.hasClass(r, "yotpo-main-widget") && !n.is("initialized"))
                    return n
            }
            return void 0
        }
        function s(t, i) {
            for (var o = 0; o < t.length; o++) {
                var n = t[o]
                  , r = n.getElement();
                if (r && (r.getAttribute("data-product-id") === i || r.getAttribute("data-yotpo-product-id") === i) && e.hasClass(r, "bottomLine") && !n.is("initialized"))
                    return n
            }
            return void 0
        }
        var a = [];
        try {
            a = JSON.parse(t);
            for (var l = -1, c = 0; c < a.length; c++)
                if ("main_widget" == a[c].method) {
                    l = c;
                    break
                }
            if (l >= 0) {
                var d = document.createElement("div");
                d.innerHTML = a[l].result,
                d.getElementsByClassName("yotpo-promoted-product").length > 0 && (S(d.getElementsByClassName("yotpo-promoted-product")),
                a[l].result = d.innerHTML)
            }
        } catch (u) {
            e.safeConsole(u.message)
        }
        if (this.getUserSetting("widgets_data_requests"))
            i.call(this);
        else {
            var p = this.getWidgets();
            if (p.length == a.length)
                for (var c = 0; c < p.length; c++) {
                    var g = a.shift()
                      , h = p[c];
                    o(h, g)
                }
            else
                i.call(this)
        }
        e.removeClassFromElements("yotpo-hidden-offloaded-content")
    }
    function f() {
        e.forEach(this.getWidgets(), function(t) {
            var i, o, n, r, s = "";
            for (o = t.getLayout(),
            n = r = t.getElement(); r && 0 == (i = r.offsetWidth); )
                r = r.parentNode;
            if ("old" === o)
                e.removeClass(n, "yotpo-medium"),
                e.removeClass(n, "yotpo-small"),
                510 >= i ? s = "yotpo-small" : 655 >= i && (s = "yotpo-medium"),
                "" != s && e.addClass(n, s),
                t.trigger("sizeCalculated", s);
            else if ("new" === o) {
                var a = e.Helpers.WidthClass.getWidgetWidthClasses();
                s = e.Helpers.WidthClass.getWidgetWidthClass(i),
                e.hasClass(n, s) || (e.removeClassList(n, a),
                e.addClass(n, s)),
                t.trigger("sizeCalculated", s)
            }
        })
    }
    function y() {
        var t = this
          , i = e.getDocElement().querySelectorAll(".yotpo-display-wrapper")[0];
        "undefined" == typeof i || "visible" == e.getVisibilityStyle(i) ? f.call(t) : setTimeout(function() {
            y.call(t)
        }, 50)
    }
    function v(e) {
        return b("yotpo-full-css.css") || b(e)
    }
    function b(e) {
        if (!e)
            return !1;
        for (var t = document.styleSheets, i = 0; i < t.length; ++i)
            if (t[i].href) {
                var o = t[i].href.replace(/https?:\/\//, "");
                if (o.indexOf(e) > -1)
                    return !0
            }
        return !1
    }
    function w() {
        var t = this;
        if ("true" === e.getURLParameter(location.search, "yo_offload_css"))
            return void x(function() {
                t.trigger("CssReady")
            }, 1e3, 5);
        var i = this.getUserSetting("demo")
          , o = this.getUserSetting("info")
          , n = this.getUserSetting("css_preview")
          , r = this.getUserSetting("css_version") || this.getUserSetting("version")
          , s = this.getUserSetting("use_final_overrides")
          , a = this.getUserSetting("hard_refresh")
          , l = e.getWidgetHost(this.getUserSettings().host) + "/" + this.getAppKey() + "/widget.css?widget_version=" + r;
        "undefined" != typeof i && (l += "&demo=true"),
        "undefined" != typeof o && (l += "&info=" + window.encodeURIComponent(o)),
        "undefined" != typeof n && (l += "&css_preview=" + n),
        "undefined" != typeof s && (l += "&use_final_overrides=" + s),
        "undefined" != typeof a && "true" == a && (l += "&rand=" + (1e6 * Math.random() | 0));
        var c = document.getElementsByTagName("head")[0]
          , d = document.createElement("link");
        d.type = "text/css",
        d.rel = "stylesheet",
        d.href = l,
        d.onload = function() {
            x(function() {
                t.trigger("CssReady")
            }, 1e3, 5)
        }
        ,
        c.appendChild(d)
    }
    function _() {
        var e = this;
        x(function() {
            e.trigger("CssReady")
        }, 1e3, 5)
    }
    function S(e) {
        for (var t = [], i = 0; i < e.length; i++)
            "" != e[i].dataset.position && (t[i] = e[i].dataset.position);
        var o = !1
          , n = t.reduce(function(e, t) {
            return "undefined" == typeof e[t] ? e[t] = 1 : (e[t] += 1,
            o = !0),
            e
        }, {});
        if (o) {
            var r = {};
            for (var s in n)
                r[s] = 1 == n[s] ? 1 : Math.floor(Math.random() * n[s]) + 1;
            for (var a = 0, i = 0; i < e.length; i++)
                0 == i || e[i].dataset.position != e[i - 1].dataset.position ? a = 1 : a += 1,
                r[e[i].dataset.position] != a && (e[i].dataset.to_delete = !0);
            for (var i = e.length - 1; i >= 0; i--)
                e[i].dataset.to_delete && e[i].parentNode.remove()
        }
    }
    function C() {
        if (!e.shouldPreventCookies) {
            var t = this.getUserSetting("ads")
              , i = this.getUserSetting("facebook_ads");
            if (t && i && parseInt(i.settings.pixel_id) && 1 == i.settings.init_pixel) {
                var o = "undefined" != typeof yotpoTrackConversionData ? yotpoTrackConversionData : null;
                e.Libraries.Tracker.fbTracking(i.settings, o)
            }
        }
    }
    function A() {
        var t = this;
        e.forEach(["ready"], function(e) {
            t.on(e, function() {
                t.setState(e)
            })
        })
    }
    function E(t) {
        try {
            if (e.Widgets) {
                var i = e.Widgets[e.camelize(t)] || e.Widgets.Basic;
                if (i.alwaysShow) {
                    var o = this.userSettings[t] || e.getURLParameter(location.search, t + "_demo") || !1;
                    if (o) {
                        var n = document.createElement("div");
                        n.classList.add("yotpo"),
                        n.classList.add(t),
                        document.body.appendChild(n)
                    }
                }
            }
        } catch (r) {
            e.safeConsole(r.message)
        }
    }
    function k() {
        for (var e = 0; e < this.allWidgetsReadyCallback.length; e++)
            this.allWidgetsReadyCallback[e].call()
    }
    function x(e, t, i) {
        for (var o = 0; i > o; o++)
            setTimeout(e, t * o)
    }
    return e.batchType = "POST",
    e.isIE10OrLess = -1 != navigator.userAgent.indexOf("MSIE"),
    e.isIE8 = e.isIE10OrLess && 8 == parseInt(navigator.userAgent.toLowerCase().split("msie")[1]),
    e.isIEEdge = /Edge\/12./i.test(navigator.userAgent),
    e.isIE11 = navigator.userAgent.indexOf("Trident/7.0") > 0,
    e.isIEFamily = e.isIE10OrLess || e.isIE11 || e.isIEEdge,
    e.dynamicCreateType = "POST",
    e.globals = {},
    e.hosts = {
        widget: {
            dynamic: "w2.yotpo.com",
            "static": "staticw2.yotpo.com"
        },
        api: {
            dynamic: "api.yotpo.com"
        },
        b2b: {
            dynamic: "my.yotpo.com"
        },
        reviews_me: {
            dynamic: "reviews.me"
        },
        base: {
            dynamic: "yotpo.com"
        }
    },
    e.getWidgetHost = function(e) {
        var t = this.mock ? "http:" : "";
        return t + "//" + (this.hosts.widget[e] || this.hosts.widget["static"])
    }
    ,
    e.getApiHost = function(e) {
        return "//" + (this.hosts.api[e] || this.hosts.api.dynamic)
    }
    ,
    e.texts = {},
    e.filterAndSearch = {
        filters_state_manager: {
            aggregators_types: {}
        },
        analytics: {
            page_types: {}
        }
    },
    e.widgets = {
        main: {
            selector: ".yotpo.yotpo-main-widget"
        },
        bottomline: {
            selector: ".yotpo.bottomLine"
        },
        embedded: {
            selector: ".yotpo.embedded-widget"
        },
        badge: {
            selector: ".yotpo.badge,.yotpo.yotpo-badge"
        },
        "questions-bottomline": {
            selector: ".yotpo.QABottomLine"
        },
        carousels: {
            selector: ".yotpo.yotpo-reviews-carousel"
        },
        slider: {
            selector: ".yotpo.yotpo-slider"
        },
        "visual-carousel": {
            selector: ".yotpo.yotpo-visual-carousel"
        },
        "pictures-gallery": {
            selector: ".yotpo.yotpo-pictures-gallery"
        },
        "pictures-widget": {
            selector: ".yotpo.yotpo-pictures-widget"
        },
        "shoppable-gallery": {
            selector: ".yotpo.yotpo-shoppable-gallery"
        },
        testimonials: {
            selector: "#yotpo-testimonials-custom-tab,.yotpo.testimonials"
        },
        "single-video": {
            selector: ".yotpo.yotpo-single-video"
        },
        "shoppers-say": {
            selector: ".yotpo.yotpo-shoppers-say"
        }
    },
    e.docElement = void 0,
    e.getDocElement = function() {
        return e.docElement ? e.docElement : document
    }
    ,
    e.getMainWidget = function(t) {
        if (t instanceof e) {
            for (var i, o = t.getWidgetsByName("Main"), n = 0; n < o.length; n++)
                if (o[n].settings && "questions" != o[n].settings.mode) {
                    i = o[n];
                    break
                }
            return i
        }
        return t instanceof e.Widgets.Main ? t : null
    }
    ,
    e.scrollToReviewsTabInMainWidget = function(t, i) {
        i = i || !1;
        var o = this.getMainWidget(t);
        if (o) {
            var n = o.get("tabs");
            if (n) {
                var r = n.getTab("reviews");
                e.simulateClickEvent(r),
                i ? e.Animations.scrollToElement(o.element, 500) : o.getElement().scrollIntoView(),
                r && !e.isHidden(r) ? r.focus() : e.focusOnRightElement(o)
            } else
                e.focusOnRightElement(o)
        }
    }
    ,
    e.focusOnRightElement = function(t) {
        var i = e.isMobile() ? 1 : 0;
        e.focusOnRightElement.setFocus(t, "bottom-line-items", i, !0) || e.focusOnRightElement.setFocus(t, "yotpo-bottomline-box-1", i, !1) || e.focusOnRightElement.setFocus(t, "yotpo-header-title", i, !0) || e.focusOnRightElement.setFocus(t, "write-question-review-button", i, !1) || e.focusOnRightElement.setFocus(t, "write-review-button", i, !1) || e.focusOnRightElement.setFocus(t, "yotpo-logo-link-new", 0, !1)
    }
    ,
    e.focusOnRightElement.setFocus = function(t, i, o, n) {
        var r = t.element.getElementsByClassName(i)
          , s = r.length > 1 ? r[o] : r.length > 0 ? r[0] : null;
        return s && !e.isHidden(s) ? (n && s.setAttribute("tabindex", 0),
        s.focus(),
        !0) : !1
    }
    ,
    e.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    e.prototype.onAllWidgetsReady = function(e) {
        this.allWidgetsReadyCallback.push(e)
    }
    ,
    e.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    e.prototype.setState = function(e) {
        this.state = e
    }
    ,
    e.prototype.getState = function() {
        return this.state
    }
    ,
    e.prototype.getWidgetByName = function(t) {
        var i = null;
        return e.forEach(this.getWidgets(), function(o) {
            e.Widgets[t] && o instanceof e.Widgets[t] && (i = o)
        }),
        i
    }
    ,
    e.prototype.getWidgetsByName = function(t) {
        var i = [];
        return e.forEach(this.getWidgets(), function(o) {
            o instanceof e.Widgets[t] && i.push(o)
        }),
        i
    }
    ,
    e.prototype.getWidgetsByNames = function(t) {
        var i = [];
        return e.forEach(this.getWidgets(), function(o) {
            for (var n = 0; n < t.length; n++)
                o instanceof e.Widgets[t[n]] && i.push(o)
        }),
        i
    }
    ,
    e.prototype.getAppKey = function() {
        return this.appKey
    }
    ,
    e.prototype.getUserSettings = function() {
        return this.userSettings
    }
    ,
    e.prototype.getUserSetting = function(e) {
        return this.userSettings[e]
    }
    ,
    e.prototype.getWidgets = function() {
        return this.widgets
    }
    ,
    e.prototype.allowCookies = function() {
        if (e.shouldPreventCookies) {
            var t = this.getUserSetting("disable_shopper_side_cookies");
            t && t.settings && t.settings.disable_onsite_cookies || (e.shouldPreventCookies = !1,
            C.call(this),
            "undefined" != typeof yotpoTrackConversionData ? (u.call(this),
            e.Libraries.Tracker.trackConversionOrder(appKey, yotpoTrackConversionData)) : this.analytics.init())
        }
    }
    ,
    e.prototype.getTrustedVendorsData = function() {
        var t = {}
          , i = {
            "data-user-name": "display_name",
            "data-user-email": "email",
            "data-signature": "signature",
            "data-time-stamp": "time_stamp",
            "data-reviewer-type": "reviewer_type",
            "data-reviewer-badge": "reviewer_badge"
        }
          , o = e.getDocElement().querySelectorAll(".yotpo-signed-data")[0];
        if (o)
            for (var n in i) {
                var r = o.getAttribute(n);
                r && (t[i[n]] = r)
            }
        return t
    }
    ,
    e.prototype.addWidget = function(t) {
        this.widgets.push(t),
        e.Element.get(t.getElement()).set("state", "initialized")
    }
    ,
    e.prototype.getUserReference = function() {
        return this.userReference
    }
    ,
    e.prototype.getBatch = function(t, i, o) {
        function n(e, i) {
            var n = i.page
              , r = [];
            h += 1,
            g[n] = e.substring(0, e.length - 1).substring(1),
            h == p && (x(function() {
                l.trigger("BatchReady")
            }, 1e3, 5),
            r = "[" + g.join(",") + "]",
            t(r),
            o && o.call(l))
        }
        function r(e) {
            for (var t = 0; t < e.length; t++) {
                var i = e[t];
                if ("main_widget" == i.method)
                    return i.params.pid;
                if ("bottomline" == i.method) {
                    var o = i.params.pid
                      , n = i.params.main_widget_pid;
                    if (o == n)
                        return o
                }
            }
            return void 0
        }
        function s(e) {
            return e.params.pid ? e.params.pid : "shoppers_say" == e.method ? e.params.product_id : void 0
        }
        function a(t, i, o, n, r) {
            var s = e.getWidgetHost(t) + "/batch/";
            if (n && r && e.validateStringHasNoSpecialChars(o)) {
                var a = o ? o : "yotpononproductrelatedwidget";
                s += "app_key/" + i + "/domain_key/" + a + "/widget/" + r.method
            } else
                s += i,
                o && (s += "/" + o);
            return s
        }
        var l = this;
        if (!i)
            return e.safeConsole("getBatch: no methods provided"),
            !1;
        if (i.length > 0)
            for (var c, d, u = e.maxBatchMethods, p = Math.ceil(i.length / u), g = [], h = 0, m = r(i), f = 0, y = i.length; y > f; f += u) {
                c = i.slice(f, f + u);
                var v = c && 1 == c.length;
                m = v ? s(c[0]) : m;
                var b = a(this.getUserSetting("host"), this.getAppKey(), m, this.getUserSetting("widgets_data_requests"), v ? c[0] : void 0);
                d = {
                    methods: JSON2.stringify(c),
                    app_key: this.getAppKey(),
                    is_mobile: e.isMobile(),
                    widget_version: this.getUserSetting("version")
                };
                var w;
                e.testingGroupsHandler && (w = e.testingGroupsHandler.getTestingGroupsForServer()),
                w && (d.features_testing_groups = JSON.stringify(w)),
                "undefined" != typeof this.getUserSetting("demo") && "undefined" != typeof this.getUserSetting("info") && (d.info = this.getUserSetting("info"),
                d.demo = !0),
                "undefined" != typeof this.getUserSetting("css_preview") && (d.css_preview = this.getUserSetting("css_preview")),
                "undefined" != typeof this.getUserSetting("css_version") && (d.css_version = this.getUserSetting("css_version")),
                "undefined" != typeof this.getUserSetting("lang") && (d.lang = this.getUserSetting("lang")),
                d = e.convertHashToQueryStringParams(d),
                "GET" == e.batchType && (b += "?" + d),
                e.ajax(b, n, e.batchType, d, {
                    page: f / u
                })
            }
        else
            x(function() {
                l.trigger("BatchReady")
            }, 1e3, 5),
            t.call(this, "[]"),
            o && o.call(this)
    }
    ,
    e.prototype.init = function(t) {
        return !this.initialized && this.shouldInitialize && (this.initialized = !0,
        e.Element.clear(),
        e.docElement || (e.docElement = t),
        p.call(this),
        c.call(this),
        u.call(this),
        A.call(this),
        this.userSettings.load_only_widgets_on_page ? i.call(this) : this.initWidgets(),
        d.call(this)),
        this
    }
    ,
    e.prototype.init_for_async = function() {
        return !this.initialized && this.shouldInitialize && (this.initialized = !0,
        e.Element.clear(),
        p.call(this),
        c.call(this),
        u.call(this),
        A.call(this),
        d.call(this)),
        this
    }
    ,
    e.prototype.initWidgets = function() {
        t.call(this),
        h.call(this)
    }
    ,
    e.prototype.clean = function() {
        e.forEach(this.getWidgets(), function(e) {
            for (var t = e.getElement(); t.hasChildNodes(); )
                t.removeChild(t.firstChild)
        })
    }
    ,
    e.prototype.updateContent = function() {
        this.clean(),
        h.call(this)
    }
    ,
    e.prototype.refreshWidgets = function(e) {
        this.inview.unbindEvents(),
        this.clean(),
        this.widgets = [],
        this.allWidgetsReadyCallback = [],
        this.initialized = !1,
        this.shouldInitialize = !0,
        this.init(e),
        this.inview.bindEvents(),
        this.inview.registerAllWidgetsReady(this)
    }
    ,
    e.prototype.trackEvent = function(t, i, o, n) {
        e.shouldPreventCookies || this.analytics.trackEvent(t, i, o, n)
    }
    ,
    e.prototype.trackPageView = function() {
        e.shouldPreventCookies || this.analytics.trackPageView()
    }
    ,
    e
}(),
Yotpo.Element = function() {
    function e(e) {
        this.attributes = {
            id: ++t,
            element: e,
            state: "new"
        },
        e.setAttribute("data-yotpo-element-id", this.get("id"))
    }
    var t = 0
      , i = {};
    return e.prototype.get = function(e) {
        return this.attributes[e]
    }
    ,
    e.prototype.set = function(e, t) {
        this.attributes[e] = t
    }
    ,
    e.prototype.is = function(e) {
        return this.get("state") == e
    }
    ,
    e.get = function(t) {
        var o = +t.getAttribute("data-yotpo-element-id");
        if (!i[o]) {
            var n = new e(t);
            o = n.get("id"),
            i[o] = n
        }
        return i[o]
    }
    ,
    e.clear = function() {
        for (var e in i)
            i.hasOwnProperty(e) && (i[e].get("element").removeAttribute("data-yotpo-element-id"),
            delete i[e])
    }
    ,
    e
}(Yotpo);
var EDGE_RANGE_WIDTH = 300;
Yotpo.escapeHtml = function(e) {
    return e = e.toString().trim(),
    "" == e ? e : e.replace(/ +(?= )/g, "").replace(/"/g, "&quot;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#039;")
}
,
Yotpo.cleanParam = function(e, t) {
    return e && "display_name" === e.toString() || "review_content" === e.toString() || "review_title" === e.toString() ? Yotpo.escapeHtml(t) : t
}
,
Yotpo.validateStringMaxLength = function(e, t) {
    return t = t || 150,
    null == e || e.length > t ? !1 : !0
}
,
Yotpo.validateStringHasNoSpecialChars = function(e) {
    var t = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return void 0 !== e ? !t.test(e) : !0
}
,
Yotpo.appendChildElements = function(e, t) {
    for (; e.childNodes.length > 0; )
        t.appendChild(e.childNodes[0])
}
,
Yotpo.validateStringMaxWords = function(e, t) {
    if (t = t || 150,
    "string" != typeof e)
        return !1;
    var i = e.match(/\S+/g);
    return i = i ? i.length : 0,
    t >= i
}
,
Yotpo.validateStringMinLength = function(e, t) {
    return t = t || 1,
    null == e || e.length < t ? !1 : !0
}
,
Yotpo.validateEmail = function(e) {
    var t = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return t.test(e)
}
,
Yotpo.isValidUrl = function(e) {
    var t = new RegExp("^([a-zA-Z]+:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i");
    return t.test(e)
}
,
Yotpo.validateCheckbox = function(e) {
    return "" != e
}
,
Yotpo.capitalize = function(e) {
    return e.charAt(0).toUpperCase() + e.slice(1)
}
,
Yotpo.camelize = function(e) {
    for (var t = e.split("-"), i = Yotpo.capitalize(t[0]), o = 1; o < t.length; o++)
        i += Yotpo.capitalize(t[o]);
    return i
}
,
Yotpo.getIEVersion = function() {
    var e = navigator.userAgent
      , t = /MSIE\s?(\d+)(?:\.(\d+))?/i
      , i = e.match(t);
    return null != i ? {
        major: i[1],
        minor: i[2]
    } : {
        major: "-1",
        minor: "-1"
    }
}
,
Yotpo.ready = function(e) {
    Yotpo.isIE10OrLess && 10 != Yotpo.getIEVersion().major || "interactive" !== document.readyState ? "complete" === document.readyState ? setTimeout(function() {
        e()
    }, 1) : document.addEventListener ? document.addEventListener("DOMContentLoaded", function() {
        e()
    }, !1) : document.attachEvent("onreadystatechange", function() {
        "complete" === document.readyState && e()
    }) : setTimeout(function() {
        e()
    }, 1)
}
,
Yotpo.rotate = function(e) {
    if ("WebkitTransform"in document.body.style || "MozTransform"in document.body.style || "OTransform"in document.body.style || "transform"in document.body.style) {
        var t, i, o, n, r = 2 * Math.PI / 360, s = e * r, a = Math.cos(s), l = Math.sin(s);
        t = parseFloat(a).toFixed(8),
        i = parseFloat(-l).toFixed(8),
        o = parseFloat(l).toFixed(8),
        n = parseFloat(a).toFixed(8);
        var c = "progid:DXImageTransform.Microsoft.Matrix(M11=" + t + ", M12=" + i + ", M21=" + o + ", M22=" + n + ",sizingMethod='auto expand')";
        return {
            filter: c,
            "-moz-transform": "rotate(" + e + "deg)",
            "-webkit-transform": "rotate(" + e + "deg)",
            "-o-transform": "rotate(" + e + "deg)",
            "-ms-transform": "rotate(" + e + "deg)"
        }
    }
    return !1
}
,
Yotpo.hasClass = function(e, t) {
    return e.classList ? e.classList.contains(t) : new RegExp("(^| )" + t + "( |$)","gi").test(e.className)
}
,
Yotpo.hasAnyClass = function(e, t) {
    return t.some(function(t) {
        return Yotpo.hasClass(e, t)
    })
}
,
Yotpo.addClass = function(e, t) {
    e.classList ? e.classList.add(t) : e.className += " " + t
}
,
Yotpo.removeClass = function(e, t) {
    e.classList ? e.classList.remove(t) : e.className = e.className.replace(new RegExp("(^|\\b)" + t.split(" ").join("|") + "(\\b|$)","gi"), " ")
}
,
Yotpo.removeClassList = function(e, t) {
    for (var i = 0; i < t.length; i++)
        Yotpo.removeClass(e, t[i])
}
,
Yotpo.removeClassFromElements = function(e) {
    for (var t = Yotpo.getDocElement().querySelectorAll("." + e), i = 0; i < t.length; i++)
        Yotpo.removeClass(t[i], e)
}
,
Yotpo.toggleClass = function(e, t) {
    Yotpo.hasClass(e, t) ? Yotpo.removeClass(e, t) : Yotpo.addClass(e, t)
}
,
Yotpo.addClassToElements = function(e, t) {
    for (var i = 0; i < e.length; i++)
        Yotpo.addClass(e[i], t)
}
,
Yotpo.addEventListener = function(e, t, i) {
    if (e.addEventListener) {
        "click" === t && Yotpo.mouseClickOnEnterKeyDown(e, i);
        var o = !1;
        "touchstart" !== t && "touchmove" !== t || !Yotpo.supportsPassive() || (o = {
            passive: !0
        }),
        e.addEventListener(t, i, o)
    } else
        e.attachEvent && e.attachEvent("on" + t, i)
}
,
Yotpo.removeEventListener = function(e, t, i) {
    e.removeEventListener ? e.removeEventListener(t, i, !1) : e.detachEvent && e.detachEvent("on" + t, i)
}
,
Yotpo.keyCodes = {
    escape: 27,
    enter: 13,
    tab: 9,
    right: 39,
    left: 37,
    up: 38,
    down: 40
},
Yotpo.onKeyDown = function(e, t, i) {
    Yotpo.addEventListener(e, "keydown", function(o) {
        var n = o.keyCode ? o.keyCode : o.which;
        i.indexOf(n) > -1 && t.call(e, o)
    })
}
,
Yotpo.oneTimeOnKeyDown = function(e, t, i) {
    Yotpo.onKeyDown(e, function(i) {
        Yotpo.removeEventListener(e, i.type, arguments.callee),
        t.call(e, i)
    }, i)
}
,
Yotpo.onEnterKeyDown = function(e, t) {
    Yotpo.onKeyDown(e, t, [Yotpo.keyCodes.enter])
}
,
Yotpo.mouseClickOnEnterKeyDown = function(e) {
    Yotpo.onKeyDown(e, function(t) {
        "function" == typeof e.click && (e.click(),
        t.stopPropagation())
    }, [Yotpo.keyCodes.enter])
}
,
Yotpo.onTabKeyDown = function(e, t) {
    Yotpo.onKeyDown(e, t, [Yotpo.keyCodes.tab])
}
,
Yotpo.onEscapeKeyDown = function(e, t) {
    Yotpo.onKeyDown(e, t, [Yotpo.keyCodes.escape])
}
,
Yotpo.onTabAndShiftDown = function(e, t) {
    Yotpo.onTabKeyDown(e, function(i) {
        i.shiftKey && t.call(e, i)
    })
}
,
Yotpo.loopKeyboardTabs = function(e, t) {
    var i = document.getElementById(e)
      , o = document.getElementById(t);
    null != i && null != o && (Yotpo.onTabKeyDown(o, function() {
        i.focus()
    }),
    Yotpo.onTabAndShiftDown(i, function() {
        o.focus()
    }))
}
,
Yotpo.copy = function(e, t) {
    for (var i in e)
        e.hasOwnProperty(i) && (t[i] = e[i])
}
,
Yotpo.toggleVisibility = function(e, t) {
    t = t || "inline-block",
    e.style.display = "none" == Yotpo.getDisplayStyle(e) ? t : "none"
}
,
Yotpo.setElementsVisibility = function(e, t) {
    for (var i = 0; i < e.length; i++)
        e[i].style.display = t
}
,
Yotpo.toggleAttribute = function(e, t) {
    var i = e.getAttribute(t);
    if ("true" === i || "false" === i) {
        var o = "true" === i ? "false" : "true";
        e.setAttribute(t, o)
    }
}
,
Yotpo.getDisplayStyle = function(e) {
    return e.currentStyle ? e.currentStyle.display : window.getComputedStyle ? window.getComputedStyle(e, null).getPropertyValue("display") : null
}
,
Yotpo.getVisibilityStyle = function(e) {
    return e ? e.currentStyle ? e.currentStyle.visibility : window.getComputedStyle ? window.getComputedStyle(e, null).getPropertyValue("visibility") : null : !1
}
,
Yotpo.getComputedStyle = function(e, t) {
    return e ? e.currentStyle ? e.currentStyle[t] : window.getComputedStyle ? window.getComputedStyle(e, null).getPropertyValue(t) : null : null
}
,
Yotpo.getComputedMargins = function(e) {
    return {
        top: parseInt(Yotpo.getComputedStyle(e, "margin-top").replace("px", ""), 10),
        left: parseInt(Yotpo.getComputedStyle(e, "margin-left").replace("px", ""), 10),
        right: parseInt(Yotpo.getComputedStyle(e, "margin-right").replace("px", ""), 10),
        bottom: parseInt(Yotpo.getComputedStyle(e, "margin-bottom").replace("px", ""), 10)
    }
}
,
Yotpo.show = function(e, t) {
    e.style || (e.style = {}),
    e.style.display = t ? t : "inline-block",
    Yotpo.removeClass(e, "yotpo-hidden")
}
,
Yotpo.hide = function(e) {
    e.style.display = "none",
    Yotpo.addClass(e, "yotpo-hidden")
}
,
Yotpo.remove = function(e) {
    e.parentNode.removeChild(e)
}
,
Yotpo.getStyle = function(e, t) {
    if (e.currentStyle)
        var i = e.currentStyle[t];
    else if (window.getComputedStyle)
        var i = document.defaultView.getComputedStyle(e, null).getPropertyValue(t);
    return i
}
,
Yotpo.isHidden = function(e) {
    return !Yotpo.isIE10OrLess && e.classList ? null === e.offsetParent && e != document.body : "none" == Yotpo.getStyle(e, "display") || "hidden" == Yotpo.getStyle(e, "visibilty")
}
,
Yotpo.localStorage = localStorage || {
    getItem: function(e) {
        return Yotpo.storage = Yotpo.storage || {},
        Yotpo.storage[e]
    },
    setItem: function(e, t) {
        Yotpo.storage = Yotpo.storage || {},
        Yotpo.storage[e] = t
    },
    removeItem: function(e) {
        Yotpo.storage = Yotpo.storage || {},
        delete Yotpo.storage[e]
    }
},
Yotpo.bindAnimation = function(e, t) {
    var i = t || e.getAttribute("data-type")
      , o = null
      , n = e.getAttribute("data-target-container");
    n && (o = Yotpo.Modules.Helper.findAncestorByClass(e, n)),
    o || (o = e.parentNode.parentNode.parentNode);
    var r = o.getElementsByClassName(e.getAttribute("data-target"));
    0 == r.length && (r = o.querySelectorAll(e.getAttribute("data-target")));
    for (var s = Math.min(parseInt(e.getAttribute("data-limit") || r.length), r.length), a = 0; s > a; ++a)
        Yotpo.Animations[i](r[a]);
    parseInt(e.getAttribute("data-limit")) >= r.length && Yotpo.addClass(e, "yotpo-hidden")
}
,
Yotpo.supportTouch = function() {
    return "ontouchstart"in document.documentElement
}
,
Yotpo.togglePreLoader = function(e) {
    var t = e.querySelectorAll(".yotpo-preloader-wrapper");
    if (t.length > 0) {
        var i = t[0];
        Yotpo.toggleVisibility(i)
    }
    return !1
}
,
Yotpo.setSearchInProgressDisplayStatus = function(e, t) {
    var i = e.querySelector(".search-in-progress")
      , o = e.querySelector(".yotpo-reviews");
    i && o && (t ? (Yotpo.show(i),
    Yotpo.hide(o)) : (Yotpo.hide(i),
    Yotpo.show(o, "block")))
}
,
Yotpo.scrollTo = function(e, t, i, o, n, r) {
    function s() {
        p && clearTimeout(p),
        Yotpo.removeEventListener(e, r, s)
    }
    var a = o ? e.scrollHeight > t && t >= 0 : !0;
    if (a) {
        var l = o ? e.scrollTop : e.scrollLeft
          , c = t - l
          , d = 0
          , u = 20
          , p = null;
        void 0 !== r && Yotpo.addEventListener(e, r, s);
        var g = function() {
            d += u;
            var t = Math.easeInOutQuad(d, l, c, i);
            o ? e.scrollTop = t : e.scrollLeft = t,
            i > d ? p = setTimeout(g, u) : (void 0 !== r && Yotpo.removeEventListener(e, r, s),
            "function" == typeof n && n())
        };
        Math.easeInOutQuad = function(e, t, i, o) {
            return e /= o / 2,
            1 > e ? i / 2 * e * e + t : (e--,
            -i / 2 * (e * (e - 2) - 1) + t)
        }
        ,
        g()
    }
}
,
Yotpo.moveTo = function(e, t, i, o, n) {
    var r = 0
      , s = t - r
      , a = 0
      , l = 20
      , c = function() {
        a += l;
        var t = Math.easeInOutQuad(a, r, s, i);
        t = parseInt(t),
        "right" == o ? e.style.right = t + "px" : e.style.left = t + "px",
        i > a ? setTimeout(c, l) : "function" == typeof n && n()
    };
    Math.easeInOutQuad = function(e, t, i, o) {
        return e /= o / 2,
        1 > e ? i / 2 * e * e + t : (e--,
        -i / 2 * (e * (e - 2) - 1) + t)
    }
    ,
    c()
}
,
Yotpo.scrollToTop = function(e, t) {
    if (e.offsetParent && e.offsetParent.scrollTop > 0 && e.offsetParent !== document.body)
        Yotpo.scrollTo(e.offsetParent, 0, 1300, !0, null, t);
    else {
        var i = document.documentElement.scrollTop > 0 ? document.documentElement : document.body;
        Yotpo.scrollTo(i, e.getBoundingClientRect().top + i.scrollTop, 1300, !0, null, t)
    }
}
,
Yotpo.mobileCheck = function() {
    var e = !1;
    return function(t) {
        (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4))) && (e = !0)
    }(navigator.userAgent || navigator.vendor || window.opera),
    e
}
,
Yotpo.isMobile = function() {
    if (this.mobileCheck())
        return !0;
    var e = /ipad|ipad.*mobile|android.*nexus[\s]+(7|10)|^.*android.*nexus(?:(?!mobile).)*$|samsung.*tablet|galaxy.*tab|sc-01c|gt-p1000|gt-p1003|gt-p1010|gt-p3105|gt-p6210|gt-p6800|gt-p6810|gt-p7100|gt-p7300|gt-p7310|gt-p7500|gt-p7510|sch-i800|sch-i815|sch-i905|sgh-i957|sgh-i987|sgh-t849|sgh-t859|sgh-t869|sph-p100|gt-p3100|gt-p3108|gt-p3110|gt-p5100|gt-p5110|gt-p6200|gt-p7320|gt-p7511|gt-n8000|gt-p8510|sgh-i497|sph-p500|sgh-t779|sch-i705|sch-i915|gt-n8013|gt-p3113|gt-p5113|gt-p8110|gt-n8010|gt-n8005|gt-n8020|gt-p1013|gt-p6201|gt-p7501|gt-n5100|gt-n5105|gt-n5110|shv-e140k|shv-e140l|shv-e140s|shv-e150s|shv-e230k|shv-e230l|shv-e230s|shw-m180k|shw-m180l|shw-m180s|shw-m180w|shw-m300w|shw-m305w|shw-m380k|shw-m380s|shw-m380w|shw-m430w|shw-m480k|shw-m480s|shw-m480w|shw-m485w|shw-m486w|shw-m500w|gt-i9228|sch-p739|sch-i925|gt-i9200|gt-i9205|gt-p5200|gt-p5210|gt-p5210x|sm-t311|sm-t310|sm-t310x|sm-t210|sm-t210r|sm-t211|sm-p600|sm-p601|sm-p605|sm-p900|sm-p901|sm-t217|sm-t217a|sm-t217s|sm-p6000|sm-t3100|sgh-i467|xe500|sm-t110|gt-p5220|gt-i9200x|gt-n5110x|gt-n5120|sm-p905|sm-t111|sm-t2105|sm-t315|sm-t320|sm-t320x|sm-t321|sm-t520|sm-t525|sm-t530nu|sm-t230nu|sm-t330nu|sm-t900|xe500t1c|sm-p605v|sm-p905v|sm-p600x|sm-p900x|sm-t210x|sm-t230|sm-t230x|sm-t325|gt-p7503|sm-t531|sm-t330|sm-t530|sm-t705c|sm-t535|sm-t331|kindle|silk.*accelerated|android.*\b(kfot|kftt|kfjwi|kfjwa|kfote|kfsowi|kfthwi|kfthwa|kfapwi|kfapwa|wfjwae)\b|windows nt [0-9.]+; arm;|hp slate 7|hp elitepad 900|hp-tablet|elitebook.*touch|hp 8|^.*padfone((?!mobile).)*$|transformer|tf101|tf101g|tf300t|tf300tg|tf300tl|tf700t|tf700kl|tf701t|tf810c|me171|me301t|me302c|me371mg|me370t|me372mg|me172v|me173x|me400c|slider sl101|\bk00f\b|tx201la|playbook|rim tablet|htc flyer|htc jetstream|htc-p715a|htc evo view 4g|pg41200|xoom|sholest|mz615|mz605|mz505|mz601|mz602|mz603|mz604|mz606|mz607|mz608|mz609|mz615|mz616|mz617|android.*nook|nookcolor|nook browser|bnrv200|bnrv200a|bntv250|bntv250a|bntv400|bntv600|logicpd zoom2|android.*; \b(a100|a101|a110|a200|a210|a211|a500|a501|a510|a511|a700|a701|w500|w500p|w501|w501p|w510|w511|w700|g100|g100w|b1-a71|b1-710|b1-711|a1-810|a1-830)\b|w3-810|\ba3-a10\b|android.*(at100|at105|at200|at205|at270|at275|at300|at305|at1s5|at500|at570|at700|at830)|toshiba.*folio|\bl-06c|lg-v900|lg-v500|lg-v909|lg-v500|lg-v510|lg-vk810\b|android.*\b(f-01d|f-02f|f-05e|f-10d|m532|q572)\b|pmp3170b|pmp3270b|pmp3470b|pmp7170b|pmp3370b|pmp3570c|pmp5870c|pmp3670b|pmp5570c|pmp5770d|pmp3970b|pmp3870c|pmp5580c|pmp5880d|pmp5780d|pmp5588c|pmp7280c|pmp7280c3g|pmp7280|pmp7880d|pmp5597d|pmp5597|pmp7100d|per3464|per3274|per3574|per3884|per5274|per5474|pmp5097cpro|pmp5097|pmp7380d|pmp5297c|pmp5297c_quad|ideatab|thinkpad([ ]+)?tablet|lenovo.*(s2109|s2110|s5000|s6000|k3011|a3000|a1000|a2107|a2109|a1107|b6000|b8000|b8080-f)|android.*\b(tab210|tab211|tab224|tab250|tab260|tab264|tab310|tab360|tab364|tab410|tab411|tab420|tab424|tab450|tab460|tab461|tab464|tab465|tab467|tab468|tab07-100|tab07-101|tab07-150|tab07-151|tab07-152|tab07-200|tab07-201-3g|tab07-210|tab07-211|tab07-212|tab07-214|tab07-220|tab07-400|tab07-485|tab08-150|tab08-200|tab08-201-3g|tab08-201-30|tab09-100|tab09-211|tab09-410|tab10-150|tab10-201|tab10-211|tab10-400|tab10-410|tab13-201|tab274euk|tab275euk|tab374euk|tab462euk|tab474euk|tab9-200)\b|android.*\boyo\b|life.*(p9212|p9514|p9516|s9512)|lifetab|an10g2|an7bg3|an7fg3|an8g3|an8cg3|an7g3|an9g3|an7dg3|an7dg3st|an7dg3childpad|an10bg3|an10bg3dt|inm8002kp|inm1010fp|inm805nd|intenso tab|m702pro|megafon v9|\bzte v9\b|android.*\bmt7a\b|e-boda (supreme|impresspeed|izzycomm|essential)|allview.*(viva|alldro|city|speed|all tv|frenzy|quasar|shine|tx1|ax1|ax2)|\b(101g9|80g9|a101it)\b|qilive 97r|archos 101g10|archos 101 neon|novo7|novo8|novo10|novo7aurora|novo7basic|novo7paladin|novo9-spark|sony.*tablet|xperia tablet|sony tablet s|so-03e|sgpt12|sgpt13|sgpt114|sgpt121|sgpt122|sgpt123|sgpt111|sgpt112|sgpt113|sgpt131|sgpt132|sgpt133|sgpt211|sgpt212|sgpt213|sgp311|sgp312|sgp321|ebrd1101|ebrd1102|ebrd1201|sgp351|sgp341|sgp511|sgp512|sgp521|sgp541|sgp551|android.*(k8gt|u9gt|u10gt|u16gt|u17gt|u18gt|u19gt|u20gt|u23gt|u30gt)|cube u8gt|mid1042|mid1045|mid1125|mid1126|mid7012|mid7014|mid7015|mid7034|mid7035|mid7036|mid7042|mid7048|mid7127|mid8042|mid8048|mid8127|mid9042|mid9740|mid9742|mid7022|mid7010|m9701|m9000|m9100|m806|m1052|m806|t703|mid701|mid713|mid710|mid727|mid760|mid830|mid728|mid933|mid125|mid810|mid732|mid120|mid930|mid800|mid731|mid900|mid100|mid820|mid735|mid980|mid130|mid833|mid737|mid960|mid135|mid860|mid736|mid140|mid930|mid835|mid733|android.*(\bmid\b|mid-560|mtv-t1200|mtv-pnd531|mtv-p1101|mtv-pnd530)|android.*(rk2818|rk2808a|rk2918|rk3066)|rk2738|rk2808a|iq310|fly vision|bq.*(elcano|curie|edison|maxwell|kepler|pascal|tesla|hypatia|platon|newton|livingstone|cervantes|avant)|maxwell.*lite|maxwell.*plus|mediapad|mediapad 7 youth|ideos s7|s7-201c|s7-202u|s7-101|s7-103|s7-104|s7-105|s7-106|s7-201|s7-slim|\bn-06d|\bn-08d|pantech.*p4100|broncho.*(n701|n708|n802|a710)|touchpad.*[78910]|\btouchtab\b|z1000|z99 2g|z99|z930|z999|z990|z909|z919|z900|tb07sta|tb10sta|tb07fta|tb10fta|android.*\bnabi|kobo touch|\bk080\b|\bvox\b build|\barc\b build|dslide.*\b(700|701r|702|703r|704|802|970|971|972|973|974|1010|1012)\b|navipad|tb-772a|tm-7045|tm-7055|tm-9750|tm-7016|tm-7024|tm-7026|tm-7041|tm-7043|tm-7047|tm-8041|tm-9741|tm-9747|tm-9748|tm-9751|tm-7022|tm-7021|tm-7020|tm-7011|tm-7010|tm-7023|tm-7025|tm-7037w|tm-7038w|tm-7027w|tm-9720|tm-9725|tm-9737w|tm-1020|tm-9738w|tm-9740|tm-9743w|tb-807a|tb-771a|tb-727a|tb-725a|tb-719a|tb-823a|tb-805a|tb-723a|tb-715a|tb-707a|tb-705a|tb-709a|tb-711a|tb-890hd|tb-880hd|tb-790hd|tb-780hd|tb-770hd|tb-721hd|tb-710hd|tb-434hd|tb-860hd|tb-840hd|tb-760hd|tb-750hd|tb-740hd|tb-730hd|tb-722hd|tb-720hd|tb-700hd|tb-500hd|tb-470hd|tb-431hd|tb-430hd|tb-506|tb-504|tb-446|tb-436|tb-416|tb-146se|tb-126se|playstation.*(portable|vita)|st10416-1|vt10416-1|st70408-1|st702xx-1|st702xx-2|st80208|st97216|st70104-2|vt10416-2|st10216-2a|\b(ptbl10ceu|ptbl10c|ptbl72bc|ptbl72bceu|ptbl7ceu|ptbl7c|ptbl92bc|ptbl92bceu|ptbl9ceu|ptbl9cuk|ptbl9c)\b|android.* \b(e3a|t3x|t5c|t5b|t3e|t3c|t3b|t1j|t1f|t2a|t1h|t1i|e1c|t1-e|t5-a|t4|e1-b|t2ci|t1-b|t1-d|o1-a|e1-a|t1-a|t3a|t4i)\b |genius tab g3|genius tab s2|genius tab q3|genius tab g4|genius tab q4|genius tab g-ii|genius tab gii|genius tab giii|genius tab s1|android.*\bg1\b|funbook|micromax.*\b(p250|p560|p360|p362|p600|p300|p350|p500|p275)\b|android.*\b(a39|a37|a34|st8|st10|st7|smart tab3|smart tab2)\b|fine7 genius|fine7 shine|fine7 air|fine8 style|fine9 more|fine10 joy|fine11 wide|\b(pem63|plt1023g|plt1041|plt1044|plt1044g|plt1091|plt4311|plt4311pl|plt4315|plt7030|plt7033|plt7033d|plt7035|plt7035d|plt7044k|plt7045k|plt7045kb|plt7071kg|plt7072|plt7223g|plt7225g|plt7777g|plt7810k|plt7849g|plt7851g|plt7852g|plt8015|plt8031|plt8034|plt8036|plt8080k|plt8082|plt8088|plt8223g|plt8234g|plt8235g|plt8816k|plt9011|plt9045k|plt9233g|plt9735|plt9760g|plt9770g)\b|bq1078|bc1003|bc1077|rk9702|bc9730|bc9001|it9001|bc7008|bc7010|bc708|bc728|bc7012|bc7030|bc7027|bc7026|tpc7102|tpc7103|tpc7105|tpc7106|tpc7107|tpc7201|tpc7203|tpc7205|tpc7210|tpc7708|tpc7709|tpc7712|tpc7110|tpc8101|tpc8103|tpc8105|tpc8106|tpc8203|tpc8205|tpc8503|tpc9106|tpc9701|tpc97101|tpc97103|tpc97105|tpc97106|tpc97111|tpc97113|tpc97203|tpc97603|tpc97809|tpc97205|tpc10101|tpc10103|tpc10106|tpc10111|tpc10203|tpc10205|tpc10503|tx-a1301|tx-m9002|q702|kf026|tab-p506|tab-navi-7-3g-m|tab-p517|tab-p-527|tab-p701|tab-p703|tab-p721|tab-p731n|tab-p741|tab-p825|tab-p905|tab-p925|tab-pr945|tab-pl1015|tab-p1025|tab-pi1045|tab-p1325|tab-protab[0-9]+|tab-protab25|tab-protab26|tab-protab27|tab-protab26xl|tab-protab2-ips9|tab-protab30-ips9|tab-protab25xxl|tab-protab26-ips10|tab-protab30-ips10|ov-(steelcore|newbase|basecore|baseone|exellen|quattor|edutab|solution|action|basictab|teddytab|magictab|stream|tb-08|tb-09)|hcl.*tablet|connect-3g-2.0|connect-2g-2.0|me tablet u1|me tablet u2|me tablet g1|me tablet x1|me tablet y2|me tablet sync|dps dream 9|dps dual 7|v97 hd|i75 3g|visture v4( hd)?|visture v5( hd)?|visture v10|ctp(-)?810|ctp(-)?818|ctp(-)?828|ctp(-)?838|ctp(-)?888|ctp(-)?978|ctp(-)?980|ctp(-)?987|ctp(-)?988|ctp(-)?989|\bmt8125|mt8389|mt8135|mt8377\b|concorde([ ]+)?tab|concorde readman|goclever tab|a7goclever|m1042|m7841|m742|r1042bk|r1041|tab a975|tab a7842|tab a741|tab a741l|tab m723g|tab m721|tab a1021|tab i921|tab r721|tab i720|tab t76|tab r70|tab r76.2|tab r106|tab r83.2|tab m813g|tab i721|gcta722|tab i70|tab i71|tab s73|tab r73|tab r74|tab r93|tab r75|tab r76.1|tab a73|tab a93|tab a93.2|tab t72|tab r83|tab r974|tab r973|tab a101|tab a103|tab a104|tab a104.2|r105bk|m713g|a972bk|tab a971|tab r974.2|tab r104|tab r83.3|tab a1042|freetab 9000|freetab 7.4|freetab 7004|freetab 7800|freetab 2096|freetab 7.5|freetab 1014|freetab 1001 |freetab 8001|freetab 9706|freetab 9702|freetab 7003|freetab 7002|freetab 1002|freetab 7801|freetab 1331|freetab 1004|freetab 8002|freetab 8014|freetab 9704|freetab 1003|\b(argus[ _]?s|diamond[ _]?79hd|emerald[ _]?78e|luna[ _]?70c|onyx[ _]?s|onyx[ _]?z|orin[ _]?hd|orin[ _]?s|otis[ _]?s|speedstar[ _]?s|magnet[ _]?m9|primus[ _]?94[ _]?3g|primus[ _]?94hd|primus[ _]?qs|android.*\bq8\b|sirius[ _]?evo[ _]?qs|sirius[ _]?qs|spirit[ _]?s)\b|v07ot2|tm105a|s10ot1|tr10cs1|ezee[_']?(tab|go)[0-9]+|tablc7|looney tunes tab|smarttab([ ]+)?[0-9]+|smarttabii10|smart[ ']?tab[ ]+?[0-9]+|family[ ']?tab2|rm-790|rm-997|rmd-878g|rmd-974r|rmt-705a|rmt-701|rme-601|rmt-501|rmt-711|i-mobile i-note|tolino tab [0-9.]+|tolino shine|\bc-22q|t7-qc|t-17b|t-17p\b|android.* a78 |android.* (skypad|phoenix|cyclops)|tecno p9|android.*\b(f3000|a3300|jxd5000|jxd3000|jxd2000|jxd300b|jxd300|s5800|s7800|s602b|s5110b|s7300|s5300|s602|s603|s5100|s5110|s601|s7100a|p3000f|p3000s|p101|p200s|p1000m|p200m|p9100|p1000s|s6600b|s908|p1000|p300|s18|s6600|s9100)\b|tablet (spirit 7|essentia|galatea|fusion|onix 7|landa|titan|scooby|deox|stella|themis|argon|unique 7|sygnus|hexen|finity 7|cream|cream x2|jade|neon 7|neron 7|kandy|scape|saphyr 7|rebel|biox|rebel|rebel 8gb|myst|draco 7|myst|tab7-004|myst|tadeo jones|tablet boing|arrow|draco dual cam|aurix|mint|amity|revolution|finity 9|neon 9|t9w|amity 4gb dual cam|stone 4gb|stone 8gb|andromeda|silken|x2|andromeda ii|halley|flame|saphyr 9,7|touch 8|planet|triton|unique 10|hexen 10|memphis 4gb|memphis 8gb|onix 10)|fx2 pad7|fx2 pad10|kidspad 701|pad[ ]?712|pad[ ]?714|pad[ ]?716|pad[ ]?717|pad[ ]?718|pad[ ]?720|pad[ ]?721|pad[ ]?722|pad[ ]?790|pad[ ]?792|pad[ ]?900|pad[ ]?9715d|pad[ ]?9716dr|pad[ ]?9718dr|pad[ ]?9719qr|pad[ ]?9720qr|telepad1030|telepad1032|telepad730|telepad731|telepad732|telepad735q|telepad830|telepad9730|telepad795|megapad 1331|megapad 1851|megapad 2151|viewpad 10pi|viewpad 10e|viewpad 10s|viewpad e72|viewpad7|viewpad e100|viewpad 7e|viewsonic vb733|vb100a|loox|xeno10|odys space|captiva pad|nettab|nt-3702|nt-3702s|nt-3702s|nt-3603p|nt-3603p|nt-0704s|nt-0704s|nt-3805c|nt-3805c|nt-0806c|nt-0806c|nt-0909t|nt-0909t|nt-0907s|nt-0907s|nt-0902s|nt-0902s|hudl ht7s3|t-hub2|android.*\b97d\b|tablet(?!.*pc)|bntv250a|mid-wcdma|logicpd zoom2|\ba7eb\b|catnova8|a1_07|ct704|ct1002|\bm721\b|rk30sdk|\bevotab\b|m758a|et904|alumium10|smartfren tab|endeavour 1010|tablet-pc-4/i
      , t = /\biphone.*(mobile|phonegap)|\bipod|blackberry|\bbb10\b|rim[0-9]+|htc|htc.*(sensation|evo|vision|explorer|6800|8100|8900|a7272|s510e|c110e|legend|desire|t8282)|apx515ckt|qtek9090|apa9292kt|hd_mini|sensation.*z710e|pg86100|z715e|desire.*(a8181|hd)|adr6200|adr6400l|adr6425|001ht|inspire 4g|android.*\bevo\b|t-mobile g1|z520m|nexus one|nexus s|galaxy.*nexus|android.*nexus.*mobile|dell.*streak|dell.*aero|dell.*venue|dell.*venue pro|dell flash|dell smoke|dell mini 3ix|xcd28|xcd35|\b001dl\b|\b101dl\b|\bgs01\b|motorola|droidx|droid bionic|\bdroid\b.*build|android.*xoom|hri39|mot-|a1260|a1680|a555|a853|a855|a953|a955|a956|motorola.*electrify|motorola.*i1|i867|i940|mb200|mb300|mb501|mb502|mb508|mb511|mb520|mb525|mb526|mb611|mb612|mb632|mb810|mb855|mb860|mb861|mb865|mb870|me501|me502|me511|me525|me600|me632|me722|me811|me860|me863|me865|mt620|mt710|mt716|mt720|mt810|mt870|mt917|motorola.*titanium|wx435|wx445|xt300|xt301|xt311|xt316|xt317|xt319|xt320|xt390|xt502|xt530|xt531|xt532|xt535|xt603|xt610|xt611|xt615|xt681|xt701|xt702|xt711|xt720|xt800|xt806|xt860|xt862|xt875|xt882|xt883|xt894|xt901|xt907|xt909|xt910|xt912|xt928|xt926|xt915|xt919|xt925|samsung|sgh-i337|bgt-s5230|gt-b2100|gt-b2700|gt-b2710|gt-b3210|gt-b3310|gt-b3410|gt-b3730|gt-b3740|gt-b5510|gt-b5512|gt-b5722|gt-b6520|gt-b7300|gt-b7320|gt-b7330|gt-b7350|gt-b7510|gt-b7722|gt-b7800|gt-c3010|gt-c3011|gt-c3060|gt-c3200|gt-c3212|gt-c3212i|gt-c3262|gt-c3222|gt-c3300|gt-c3300k|gt-c3303|gt-c3303k|gt-c3310|gt-c3322|gt-c3330|gt-c3350|gt-c3500|gt-c3510|gt-c3530|gt-c3630|gt-c3780|gt-c5010|gt-c5212|gt-c6620|gt-c6625|gt-c6712|gt-e1050|gt-e1070|gt-e1075|gt-e1080|gt-e1081|gt-e1085|gt-e1087|gt-e1100|gt-e1107|gt-e1110|gt-e1120|gt-e1125|gt-e1130|gt-e1160|gt-e1170|gt-e1175|gt-e1180|gt-e1182|gt-e1200|gt-e1210|gt-e1225|gt-e1230|gt-e1390|gt-e2100|gt-e2120|gt-e2121|gt-e2152|gt-e2220|gt-e2222|gt-e2230|gt-e2232|gt-e2250|gt-e2370|gt-e2550|gt-e2652|gt-e3210|gt-e3213|gt-i5500|gt-i5503|gt-i5700|gt-i5800|gt-i5801|gt-i6410|gt-i6420|gt-i7110|gt-i7410|gt-i7500|gt-i8000|gt-i8150|gt-i8160|gt-i8190|gt-i8320|gt-i8330|gt-i8350|gt-i8530|gt-i8700|gt-i8703|gt-i8910|gt-i9000|gt-i9001|gt-i9003|gt-i9010|gt-i9020|gt-i9023|gt-i9070|gt-i9082|gt-i9100|gt-i9103|gt-i9220|gt-i9250|gt-i9300|gt-i9305|gt-i9500|gt-i9505|gt-m3510|gt-m5650|gt-m7500|gt-m7600|gt-m7603|gt-m8800|gt-m8910|gt-n7000|gt-s3110|gt-s3310|gt-s3350|gt-s3353|gt-s3370|gt-s3650|gt-s3653|gt-s3770|gt-s3850|gt-s5210|gt-s5220|gt-s5229|gt-s5230|gt-s5233|gt-s5250|gt-s5253|gt-s5260|gt-s5263|gt-s5270|gt-s5300|gt-s5330|gt-s5350|gt-s5360|gt-s5363|gt-s5369|gt-s5380|gt-s5380d|gt-s5560|gt-s5570|gt-s5600|gt-s5603|gt-s5610|gt-s5620|gt-s5660|gt-s5670|gt-s5690|gt-s5750|gt-s5780|gt-s5830|gt-s5839|gt-s6102|gt-s6500|gt-s7070|gt-s7200|gt-s7220|gt-s7230|gt-s7233|gt-s7250|gt-s7500|gt-s7530|gt-s7550|gt-s7562|gt-s7710|gt-s8000|gt-s8003|gt-s8500|gt-s8530|gt-s8600|sch-a310|sch-a530|sch-a570|sch-a610|sch-a630|sch-a650|sch-a790|sch-a795|sch-a850|sch-a870|sch-a890|sch-a930|sch-a950|sch-a970|sch-a990|sch-i100|sch-i110|sch-i400|sch-i405|sch-i500|sch-i510|sch-i515|sch-i600|sch-i730|sch-i760|sch-i770|sch-i830|sch-i910|sch-i920|sch-i959|sch-lc11|sch-n150|sch-n300|sch-r100|sch-r300|sch-r351|sch-r400|sch-r410|sch-t300|sch-u310|sch-u320|sch-u350|sch-u360|sch-u365|sch-u370|sch-u380|sch-u410|sch-u430|sch-u450|sch-u460|sch-u470|sch-u490|sch-u540|sch-u550|sch-u620|sch-u640|sch-u650|sch-u660|sch-u700|sch-u740|sch-u750|sch-u810|sch-u820|sch-u900|sch-u940|sch-u960|scs-26uc|sgh-a107|sgh-a117|sgh-a127|sgh-a137|sgh-a157|sgh-a167|sgh-a177|sgh-a187|sgh-a197|sgh-a227|sgh-a237|sgh-a257|sgh-a437|sgh-a517|sgh-a597|sgh-a637|sgh-a657|sgh-a667|sgh-a687|sgh-a697|sgh-a707|sgh-a717|sgh-a727|sgh-a737|sgh-a747|sgh-a767|sgh-a777|sgh-a797|sgh-a817|sgh-a827|sgh-a837|sgh-a847|sgh-a867|sgh-a877|sgh-a887|sgh-a897|sgh-a927|sgh-b100|sgh-b130|sgh-b200|sgh-b220|sgh-c100|sgh-c110|sgh-c120|sgh-c130|sgh-c140|sgh-c160|sgh-c170|sgh-c180|sgh-c200|sgh-c207|sgh-c210|sgh-c225|sgh-c230|sgh-c417|sgh-c450|sgh-d307|sgh-d347|sgh-d357|sgh-d407|sgh-d415|sgh-d780|sgh-d807|sgh-d980|sgh-e105|sgh-e200|sgh-e315|sgh-e316|sgh-e317|sgh-e335|sgh-e590|sgh-e635|sgh-e715|sgh-e890|sgh-f300|sgh-f480|sgh-i200|sgh-i300|sgh-i320|sgh-i550|sgh-i577|sgh-i600|sgh-i607|sgh-i617|sgh-i627|sgh-i637|sgh-i677|sgh-i700|sgh-i717|sgh-i727|sgh-i747m|sgh-i777|sgh-i780|sgh-i827|sgh-i847|sgh-i857|sgh-i896|sgh-i897|sgh-i900|sgh-i907|sgh-i917|sgh-i927|sgh-i937|sgh-i997|sgh-j150|sgh-j200|sgh-l170|sgh-l700|sgh-m110|sgh-m150|sgh-m200|sgh-n105|sgh-n500|sgh-n600|sgh-n620|sgh-n625|sgh-n700|sgh-n710|sgh-p107|sgh-p207|sgh-p300|sgh-p310|sgh-p520|sgh-p735|sgh-p777|sgh-q105|sgh-r210|sgh-r220|sgh-r225|sgh-s105|sgh-s307|sgh-t109|sgh-t119|sgh-t139|sgh-t209|sgh-t219|sgh-t229|sgh-t239|sgh-t249|sgh-t259|sgh-t309|sgh-t319|sgh-t329|sgh-t339|sgh-t349|sgh-t359|sgh-t369|sgh-t379|sgh-t409|sgh-t429|sgh-t439|sgh-t459|sgh-t469|sgh-t479|sgh-t499|sgh-t509|sgh-t519|sgh-t539|sgh-t559|sgh-t589|sgh-t609|sgh-t619|sgh-t629|sgh-t639|sgh-t659|sgh-t669|sgh-t679|sgh-t709|sgh-t719|sgh-t729|sgh-t739|sgh-t746|sgh-t749|sgh-t759|sgh-t769|sgh-t809|sgh-t819|sgh-t839|sgh-t919|sgh-t929|sgh-t939|sgh-t959|sgh-t989|sgh-u100|sgh-u200|sgh-u800|sgh-v205|sgh-v206|sgh-x100|sgh-x105|sgh-x120|sgh-x140|sgh-x426|sgh-x427|sgh-x475|sgh-x495|sgh-x497|sgh-x507|sgh-x600|sgh-x610|sgh-x620|sgh-x630|sgh-x700|sgh-x820|sgh-x890|sgh-z130|sgh-z150|sgh-z170|sgh-zx10|sgh-zx20|shw-m110|sph-a120|sph-a400|sph-a420|sph-a460|sph-a500|sph-a560|sph-a600|sph-a620|sph-a660|sph-a700|sph-a740|sph-a760|sph-a790|sph-a800|sph-a820|sph-a840|sph-a880|sph-a900|sph-a940|sph-a960|sph-d600|sph-d700|sph-d710|sph-d720|sph-i300|sph-i325|sph-i330|sph-i350|sph-i500|sph-i600|sph-i700|sph-l700|sph-m100|sph-m220|sph-m240|sph-m300|sph-m305|sph-m320|sph-m330|sph-m350|sph-m360|sph-m370|sph-m380|sph-m510|sph-m540|sph-m550|sph-m560|sph-m570|sph-m580|sph-m610|sph-m620|sph-m630|sph-m800|sph-m810|sph-m850|sph-m900|sph-m910|sph-m920|sph-m930|sph-n100|sph-n200|sph-n240|sph-n300|sph-n400|sph-z400|swc-e100|sch-i909|gt-n7100|gt-n7105|sch-i535|sm-n900a|sgh-i317|sgh-t999l|gt-s5360b|gt-i8262|gt-s6802|gt-s6312|gt-s6310|gt-s5312|gt-s5310|gt-i9105|gt-i8510|gt-s6790n|sm-g7105|sm-n9005|gt-s5301|gt-i9295|gt-i9195|sm-c101|gt-s7392|gt-s7560|gt-b7610|gt-i5510|gt-s7582|gt-s7530e|\blg\b;|lg[- ]?(c800|c900|e400|e610|e900|e-900|f160|f180k|f180l|f180s|730|855|l160|ls840|ls970|lu6200|ms690|ms695|ms770|ms840|ms870|ms910|p500|p700|p705|vm696|as680|as695|ax840|c729|e970|gs505|272|c395|e739bk|e960|l55c|l75c|ls696|ls860|p769bk|p350|p500|p509|p870|un272|us730|vs840|vs950|ln272|ln510|ls670|ls855|lw690|mn270|mn510|p509|p769|p930|un200|un270|un510|un610|us670|us740|us760|ux265|ux840|vn271|vn530|vs660|vs700|vs740|vs750|vs910|vs920|vs930|vx9200|vx11000|ax840a|lw770|p506|p925|p999|e612|d955|d802)|sonyst|sonylt|sonyericsson|sonyericssonlt15iv|lt18i|e10i|lt28h|lt26w|sonyericssonmt27i|asus.*galaxy|padfone.*mobile|micromax.*\b(a210|a92|a88|a72|a111|a110q|a115|a116|a110|a90s|a26|a51|a35|a54|a25|a27|a89|a68|a65|a57|a90)\b|palmsource|palm|vertu|vertu.*ltd|vertu.*ascent|vertu.*ayxta|vertu.*constellation(f|quest)?|vertu.*monika|vertu.*signature|pantech|im-a850s|im-a840s|im-a830l|im-a830k|im-a830s|im-a820l|im-a810k|im-a810s|im-a800s|im-t100k|im-a725l|im-a780l|im-a775c|im-a770k|im-a760s|im-a750k|im-a740s|im-a730s|im-a720l|im-a710k|im-a690l|im-a690s|im-a650s|im-a630k|im-a600s|vega ptl21|pt003|p8010|adr910l|p6030|p6020|p9070|p4100|p9060|p5000|cdm8992|txt8045|adr8995|is11pt|p2030|p6010|p8000|pt002|is06|cdm8999|p9050|pt001|txt8040|p2020|p9020|p2000|p7040|p7000|c790|iq230|iq444|iq450|iq440|iq442|iq441|iq245|iq256|iq236|iq255|iq235|iq245|iq275|iq240|iq285|iq280|iq270|iq260|iq250|i-mobile (iq|i-style|idea|zaa|hitz)|\b(sp-80|xt-930|sx-340|xt-930|sx-310|sp-360|sp60|spt-800|sp-120|spt-800|sp-140|spx-5|spx-8|sp-100|spx-8|spx-12)\b|tapatalk|pda;|sagem|\bmmp\b|pocket|\bpsp\b|symbian|smartphone|smartfon|treo|up.browser|up.link|vodafone|\bwap\b|nokia|series40|series60|s60|sonyericsson|n900|maui.*wap.*browser/i
      , i = navigator.userAgent || navigator.vendor || window.opera;
    return 1 == t.test(i) && 0 == e.test(i)
}
,
Yotpo.compact = function(e) {
    for (var t in e)
        !e.hasOwnProperty(t) || "undefined" != typeof e[t] && null != e[t] || delete e[t];
    return e
}
,
Yotpo.forEach = function(e, t) {
    if (Array.prototype.forEach)
        e.forEach(t);
    else {
        if ("function" != typeof t)
            throw new TypeError;
        for (var i = arguments.length >= 2 ? arguments[1] : void 0, o = 0; o < e.length; o++)
            o in e && t.call(i, e[o], o, e)
    }
}
,
Yotpo.getElementText = function(e) {
    return e.textContent || e.innerText
}
,
Yotpo.getAncestorByClassName = function(e, t) {
    for (var i = e.parentNode; !Yotpo.hasClass(i, t) && i !== document.body; )
        i = i.parentNode;
    return i === document.body ? null : i
}
,
Yotpo.origin = function() {
    return window.location.origin || window.location.protocol + "//" + window.location.hostname + (window.location.port ? ":" + window.location.port : "")
}
,
Yotpo.isArray = "isArray"in Array ? Array.isArray : function(e) {
    var t = Object.prototype.toString.call(e);
    return "[object Array]" === t
}
,
Yotpo.preloadImages = function(e, t, i, o, n, r) {
    var s, a = 0, l = [];
    e = Yotpo.isArray(e) ? e : [e];
    for (var c = function() {
        a += 1,
        a === e.length && t && t(i)
    }, d = 0; d < e.length; d++)
        if (e[d].kalturaPlayer) {
            if (s = e[d].kalturaPlayer.kalturaPlayer,
            void 0 === s) {
                c();
                continue
            }
            s._localPlayer._firstPlay ? (s.addEventListener(s.Event.CAN_PLAY, function() {
                c()
            }),
            e[d].kalturaPlayer.loadVideo()) : (e[d].current && e[d].kalturaPlayer.replayVideo(),
            c()),
            e[d].current || e[d].kalturaPlayer.pauseVideo()
        } else
            l[d] = new Image,
            l[d].onload = function(t) {
                return function() {
                    r && r(e[t].imageId, this, i),
                    c()
                }
            }(d),
            l[d].onabort = l[d].onerror = o ? function(e) {
                try {
                    e.srcElement && (n.src = e.srcElement.src),
                    n.errorType = e.type,
                    o(n, this.dataImageId)
                } catch (t) {}
                c()
            }
            : c,
            e[d].url && (l[d].src = e[d].url),
            l[d].dataImageId = e[d].imageId
}
,
Yotpo.getDefualtImage = function() {
    return {
        size_180: "http://staticw2.yotpo.com/assets/default_image_180px.jpg",
        size_656: "http://staticw2.yotpo.com/assets/default_image_656px.jpg",
        profile: "http://staticw2.yotpo.com/assets/default_profile.png"
    }
}
,
Yotpo.emojiRegex = new RegExp("\ud83c[\udf00-\udfff]|\ud83d[\udc00-\ude4f]|\ud83d[\ude80-\udeff]","g"),
Yotpo.getPosition = function(e) {
    for (var t = 0, i = 0; e; ) {
        if ("BODY" == e.tagName) {
            var o = e.scrollLeft || document.documentElement.scrollLeft
              , n = e.scrollTop || document.documentElement.scrollTop;
            t += e.offsetLeft - o + e.clientLeft,
            i += e.offsetTop - n + e.clientTop
        } else
            t += e.offsetLeft - e.scrollLeft + e.clientLeft,
            i += e.offsetTop - e.scrollTop + e.clientTop;
        e = e.offsetParent
    }
    return {
        x: t,
        y: i
    }
}
,
Yotpo.simulateClickEvent = function(e) {
    if (e.click)
        e.click();
    else if (document.createEvent) {
        var t = document.createEvent("MouseEvents");
        t.initEvent("click", !0, !0),
        e.dispatchEvent(t)
    }
}
,
Yotpo.redirectToUrl = function(e) {
    window.location = e
}
,
Yotpo.getStars = function(e) {
    e = parseFloat(e);
    for (var t = document.createElement("div"), i = 1; 5 >= i; i++) {
        var o = document.createElement("span");
        o.className = e + .25 >= i ? "yotpo-icon yotpo-icon-star" : e + .75 >= i ? "yotpo-icon yotpo-icon-half-star" : "yotpo-icon yotpo-icon-empty-star",
        t.appendChild(o)
    }
    return t
}
,
Yotpo.debounce = function(e, t, i) {
    var o;
    return function() {
        var n = this
          , r = arguments
          , s = function() {
            o = null,
            i || e.apply(n, r)
        }
          , a = i && !o;
        clearTimeout(o),
        o = setTimeout(s, t),
        a && e.apply(n, r)
    }
}
,
Yotpo.injectScript = function(e, t) {
    var i = document.createElement("script");
    i.setAttribute("type", "text/javascript");
    var o = document.createTextNode(e);
    i.appendChild(o),
    t.appendChild(i)
}
,
Yotpo.injectCSS = function(e, t) {
    var i = document.createElement("style")
      , o = document.createTextNode(e);
    i.appendChild(o),
    t.appendChild(i)
}
,
Yotpo.loadScript = function(e, t, i) {
    var o = document.createElement("script");
    o.setAttribute("type", "text/javascript"),
    o.src = e,
    o.onload = i,
    t.appendChild(o)
}
,
Yotpo.getURLParameter = function(e, t) {
    return decodeURIComponent((new RegExp("[?|&]" + t + "=([^&;]+?)(&|#|;|$)").exec(e) || [null, ""])[1].replace(/\+/g, "%20")) || null
}
,
Yotpo.updateQueryStringParameter = function(e, t, i) {
    var o = new RegExp("([?&])" + t + "=.*?(&|$)","i")
      , n = -1 !== e.indexOf("?") ? "&" : "?";
    return e.match(o) ? e.replace(o, "$1" + t + "=" + i + "$2") : e + n + t + "=" + i
}
,
Yotpo.safeConsole = function() {}
,
Yotpo.getDefualtImage = function() {
    return Yotpo.defaultImages || {
        size_180: "",
        size_656: "",
        profile: ""
    }
}
,
Yotpo.setHoverEnable = function(e) {
    Yotpo.isMobile() || Yotpo.addClass(e, "yotpo-hover-enable")
}
,
Yotpo.isString = function(e) {
    return "string" == typeof e || e instanceof String
}
,
Yotpo.isEmptyString = function(e) {
    return Yotpo.isString(e) && (0 === e.length || !e.trim())
}
,
Yotpo.generateUUID = function() {
    var e = (new Date).getTime();
    return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(t) {
        var i = (e + 16 * Math.random()) % 16 | 0;
        return e = Math.floor(e / 16),
        ("x" === t ? i : 3 & i | 8).toString(16)
    })
}
,
Yotpo.removeUndefinedFields = function(e) {
    return JSON.parse(JSON.stringify(e))
}
,
Yotpo.isMethodExists = function(e) {
    return "function" == typeof e
}
,
Yotpo.toTitleCase = function(e) {
    return e.replace(/\w\S*/g, function(e) {
        return e.charAt(0).toUpperCase() + e.substr(1).toLowerCase()
    })
}
,
Yotpo.isInViewport = function(e, t) {
    var i = e.getBoundingClientRect()
      , o = !0;
    return t && (o = i.bottom >= 0 && i.top <= (window.innerHeight || document.documentElement.clientHeight)),
    i.right >= -EDGE_RANGE_WIDTH && i.left <= (window.innerWidth || document.documentElement.clientWidth) + EDGE_RANGE_WIDTH && o
}
,
Yotpo.getBoolSetting = function(e, t) {
    return "string" == typeof t || t instanceof String ? JSON.parse(t) : "boolean" == typeof t || t instanceof Boolean ? t : e
}
,
Yotpo.trapModalFocus = function(e, t) {
    var i = e.querySelectorAll(t)
      , o = i[0]
      , n = i[i.length - 1];
    Yotpo.onTabKeyDown(document, function(e) {
        e.shiftKey ? document.activeElement === o && (n.focus(),
        e.preventDefault()) : document.activeElement === n && (o.focus(),
        e.preventDefault())
    })
}
,
Yotpo.supportsPassive = function() {
    var e = !1;
    try {
        var t = Object.defineProperty({}, "passive", {
            get: function() {
                e = !0
            }
        });
        window.addEventListener("test", null, t),
        window.removeEventListener("test", null, t)
    } catch (i) {}
    return e
}
,
Yotpo.ajax = function(e, t, i, o, n, r) {
    function s(e, t, i) {
        var o = a();
        return o && "withCredentials"in o ? (o.open(e, t, !0),
        o.withCredentials = "withCredentials"in i ? i.withCredentials : !0,
        o.setRequestHeader("Accept", "application/json", "text/html")) : "undefined" != typeof XDomainRequest ? (o = new XDomainRequest,
        o.onprogress = function() {}
        ,
        o.open(e, t)) : o = null,
        o
    }
    function a() {
        if (window.XMLHttpRequest)
            return new XMLHttpRequest;
        try {
            return new ActiveXObject("MSXML2.XMLHTTP.3.0")
        } catch (e) {
            return null
        }
    }
    function l(e) {
        var t;
        return t = e.getXhrAsResponse ? d : d.responseText
    }
    function c(e, t) {
        t || (t = {},
        t["Content-type"] = "application/x-www-form-urlencoded");
        for (var i in t)
            e.setRequestHeader(i, t[i])
    }
    r = r || {};
    var d = s(i ? i : "GET", e, r);
    return d ? (d.readyState ? d.onreadystatechange = function() {
        if (4 == d.readyState) {
            var e = l(r);
            n ? t(e, n) : t(e)
        }
    }
    : d.onload = function() {
        var e = l(r);
        n ? t(e, n) : t(e)
    }
    ,
    d.onerror = function() {
        Yotpo.safeConsole("There was an error making the request.", "error")
    }
    ,
    "POST" == i && "withCredentials"in d && c(d, r.requestHeaders),
    d.send(o),
    !0) : (Yotpo.safeConsole("CORS not supported", "error"),
    !1)
}
,
Yotpo.successfulResponse = function(e) {
    return e.status >= 200 && e.status < 300
}
,
Yotpo.convertHashToQueryStringParams = function(e) {
    var t = [];
    for (var i in e)
        e.hasOwnProperty(i) && t.push(encodeURIComponent(i) + "=" + encodeURIComponent(e[i]));
    return t.join("&")
}
,
Yotpo.convertComplexObjectToQueryStringParams = function(e, t) {
    var i = [];
    for (var o in e)
        if (e.hasOwnProperty(o)) {
            var n;
            n = e instanceof Array ? t ? t + "[]" : "[]" : t ? t + "[" + o + "]" : o;
            var r = e[o];
            i.push(null !== r && "object" == typeof r ? Yotpo.convertComplexObjectToQueryStringParams(r, n) : encodeURIComponent(n) + "=" + encodeURIComponent(Yotpo.cleanParam(n, r)))
        }
    return i.join("&")
}
,
Yotpo.convertArrayToQueryStringParam = function(e, t) {
    for (var i = [], o = 0; o < t.length; o++)
        i.push(encodeURIComponent(e + "[]") + "=" + encodeURIComponent(Yotpo.cleanParam(e, t[o])));
    return i.length ? i.join("&") : ""
}
,
Yotpo.Animations = function(e) {
    function t() {}
    function i(e) {
        var t = 0;
        do
            null != e.offsetTop && (t += e.offsetTop);
        while (e = e.offsetParent);
        return t
    }
    function o(e, t) {
        t = t / 1e3 + "s",
        e.style["-webkit-transition-duration"] = t,
        e.style["-webkit-transition-duration"] = t,
        e.style["-moz-transition-duration"] = t,
        e.style["-o-transition-duration"] = t,
        e.style["-ms-transition-duration"] = t,
        e.style["transition-duration"] = t
    }
    return t.slideDown = function(t) {
        e.removeClass(t, "yotpo-animation-fade");
        var i = t.parentNode.offsetWidth + "px";
        t.style.position = "absolute",
        t.style.top = "-10000px",
        t.style.display = "block",
        t.style.width = i;
        var o = t.offsetHeight + "px";
        t.style.height = 0,
        t.style.width = "",
        t.style.overflow = "hidden",
        t.style.right = "0",
        t.style.top = "0",
        t.style.position = "relative",
        setTimeout(function() {
            e.addClass(t, "yotpo-animation-slide")
        }, 10),
        setTimeout(function() {
            t.style.height = o
        }, 20),
        setTimeout(function() {
            t.style.height = "auto",
            e.removeClass(t, "yotpo-animation-slide")
        }, 1e3)
    }
    ,
    t.slideUp = function(t) {
        e.removeClass(t, "yotpo-animation-fade");
        var i = t.offsetHeight + "px";
        e.addClass(t, "yotpo-animation-slide"),
        t.style.height = i,
        t.style.overflow = "hidden",
        setTimeout(function() {
            t.style.height = "0px"
        }, 10),
        setTimeout(function() {
            t.style.height = i,
            e.removeClass(t, "yotpo-animation-slide"),
            t.style.display = "none"
        }, 1e3)
    }
    ,
    t.toggleSlide = function(t) {
        "block" != e.getDisplayStyle(t) ? e.Animations.slideDown(t) : e.Animations.slideUp(t)
    }
    ,
    t.fadeIn = function(t, i) {
        i = i || "200",
        e.addClass(t, "yotpo-animation-fade"),
        e.removeClass(t, "yotpo-hidden"),
        o(t, i),
        t.style.opacity = 0,
        t.style.display = "inherit",
        setTimeout(function() {
            t.style.opacity = 1,
            e.removeClass(t, "yotpo-animation-fade")
        }, 1)
    }
    ,
    t.fadeOut = function(t, i) {
        i = i || "200",
        e.addClass(t, "yotpo-animation-fade"),
        o(t, i),
        setTimeout(function() {
            t.style.opacity = 0
        }, 1),
        setTimeout(function() {
            t.style.display = "none",
            e.removeClass(t, "yotpo-animation-fade")
        }, i)
    }
    ,
    t.toggleFade = function(t, i) {
        "none" == e.getDisplayStyle(t) ? e.Animations.fadeIn(t, i) : e.Animations.fadeOut(t, i)
    }
    ,
    t.scrollToElement = function(e, t) {
        var o = i(e)
          , n = document.scrollingElement || document.documentElement || document.body;
        if (n) {
            var r = "scrollTop"
              , s = n.scrollTop
              , a = (new Date).getTime()
              , l = setInterval(function() {
                var e = Math.min(1, ((new Date).getTime() - a) / t);
                n[r] = s + e * (o - s),
                1 === e && clearInterval(l)
            }, 25);
            n[r] = s
        }
    }
    ,
    t.printLetterByLetter = function(e, t, i) {
        var o = 0
          , n = setInterval(function() {
            e.value += t.charAt(o),
            o++,
            o > t.length && clearInterval(n)
        }, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Session = function(e) {
    function t() {}
    return t.prototype.get = function(t, i) {
        var o = this
          , n = {
            token: {
                route: e.getWidgetHost("dynamic") + "/sessions/login",
                handler: function(e) {
                    return e.token
                }
            },
            user: {
                route: e.getApiHost("dynamic") + "/users/me?utoken=" + o.token,
                handler: function(e) {
                    return e.response.user
                }
            }
        };
        o[t] ? i(o[t]) : e.ajax(n[t].route, function(e) {
            try {
                e = JSON.parse(e),
                o[t] = n[t].handler(e)
            } catch (r) {}
            i(o[t])
        })
    }
    ,
    t.prototype.init = function() {
        var t = this;
        e.ajax(e.getWidgetHost("static") + "/sessions/sign_in_url", function(e) {
            e = JSON.parse(e),
            t.signInUrl = e.url,
            t.trigger("init")
        })
    }
    ,
    t.prototype.signInNetwork = function(e) {
        return this.signInUrl + "&network=" + e
    }
    ,
    t.prototype.checkLogin = function(e) {
        var t = this;
        t.get("token", function() {
            t.trigger("checkLogin", {
                submit: e || !1
            })
        })
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Review = function(e) {
    function t(t, o) {
        this.params = {},
        e.copy(t, this.params),
        this.analyticCatgeory = o || i
    }
    var i = "reviews";
    return t.load = function(t, i) {
        var o = new e.Review({
            id: +t.getAttribute("data-review-id")
        },i);
        e.Modules.Handle.action.call(t),
        e.Modules.Handle.tooltip.call(t),
        e.Modules.Vote.bind.call(t, o);
        var n = function() {
            e.currentAnalytics.trackEvent(o.analyticCatgeory, "clicked_on", "widget_expand_content")
        };
        e.Modules.CollapsibleElement.bind(t, 350, "content-review", n);
        var r = t.querySelectorAll(".yotpo-multiple-rating-fields  .yotpo-question-field, .yotpo-multiple-rating-fields .yotpo-product-related-fields, .yotpo-multiple-rating-fields .yotpo-user-field", ".product-related-fields");
        e.CustomFields.bind(r, o.get("id"));
        var s = t.querySelectorAll(".aggregated-product-related-fields");
        e.CustomFields.bindProductRelatedFields(s);
        var a = t.querySelector(".yotpo-review-media-wrapper");
        if (a) {
            var l = a.querySelector(".yotpo-review-media-wrapper-desktop")
              , c = a.querySelector(".yotpo-review-media-wrapper-mobile");
            if (e.isMobile())
                l && e.addClass(l, "yotpo-hidden"),
                c && e.removeClass(c, "yotpo-hidden");
            else {
                if (l) {
                    e.removeClass(l, "yotpo-hidden");
                    var d = t.querySelectorAll(".media-review, .expandable-image");
                    if (d)
                        for (var u = 0; u < d.length; u++)
                            e.addClass(d[u], "media-review-desktop")
                }
                c && e.addClass(c, "yotpo-hidden")
            }
        }
        return o
    }
    ,
    t.prototype.setOriginalElement = function(e) {
        this.originalElement = e
    }
    ,
    t.prototype.openReadMore = function(t) {
        var i = t.getElementsByClassName("rest-content-collapsed")[0]
          , o = t.getElementsByClassName("yotpo-read-more")[0];
        o && "closed" == o.getAttribute("data-position") && (o.style.display = "none",
        e.Animations.fadeIn(i, "0"))
    }
    ,
    t.prototype.get = function(e) {
        return this.params[e]
    }
    ,
    t.prototype.formatUserName = function(e) {
        if (!e.includes(" "))
            return e;
        var t = e.split(" ");
        return t[0] + " " + t[t.length - 1].substring(0, 1) + "."
    }
    ,
    t.prototype.getType = function() {
        return "review"
    }
    ,
    t.prototype.setUser = function(e) {
        this.user = e
    }
    ,
    t.prototype.save = function(t) {
        t = t || !1;
        var i = this
          , o = e.convertComplexObjectToQueryStringParams(this.params)
          , n = e.getApiHost() + (t ? "/v1/widget/reviews" : "/reviews/dynamic_create.json");
        "GET" == e.dynamicCreateType && (n += "?" + o),
        e.ajax(n, function(e) {
            i.data = JSON.parse(e);
            var t = i.data.code || i.data.status.code;
            switch (t) {
            case 200:
                i.trigger("save");
                break;
            default:
                i.trigger("error")
            }
        }, e.dynamicCreateType, o)
    }
    ,
    t.prototype.vote = function(t, i) {
        e.Modules.Vote.perform.call(this, t, i),
        e.currentAnalytics.trackEvent(this.analyticCatgeory, "clicked_on", "vote_" + t)
    }
    ,
    t.prototype.updateOriginalVote = function(e, t) {
        if (this.originalElement) {
            var i = this.originalElement.querySelector(".vote-sum[data-type=" + e + "]");
            i && (i.innerHTML = +i.innerHTML + t)
        }
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.render = function(t) {
        var i = this.user ? this.user.display_name : this.formatUserName(this.get("display_name"))
          , o = t.cloneNode(!0);
        o.querySelector(".yotpo-user-letter").innerHTML = i.substr(0, 1).toUpperCase(),
        o.querySelector(".yotpo-user-name").innerHTML = i;
        var n = o.querySelector(".yotpo-header")
          , r = n.querySelector(".label-with-tooltip");
        this.user ? (e.addClass(n, "yotpo-verified-user"),
        e.removeClass(r, "yotpo-hidden")) : (e.removeClass(n, "yotpo-verified-user"),
        e.addClass(r, "yotpo-hidden"));
        for (var s = o.querySelectorAll(".yotpo-review-stars .yotpo-icon"), a = +this.get("review_score"), l = 0; l < s.length; ++l)
            e.removeClass(s[l], a > l ? "yotpo-icon-empty-star" : "yotpo-icon-star"),
            e.addClass(s[l], l >= a ? "yotpo-icon-empty-star" : "yotpo-icon-star");
        o.querySelector(".content-title").innerHTML = this.get("review_title"),
        o.querySelector(".content-review").innerHTML = this.get("review_content").replace(/\n/g, "</br>");
        var c = o.querySelector(".product-link");
        c && (c.innerHTML += this.get("product_title"));
        var d = o.querySelector(".product-link-wrapper");
        d && d.setAttribute("href", this.get("product_url"));
        for (var u = o.querySelectorAll(".social-link"), l = 0; l < u.length; ++l) {
            var p = this.shareLink(u[l].getAttribute("data-network").toLowerCase()).get("link");
            u[l].setAttribute("href", p)
        }
        e.CustomFieldsRenderer.render(o, this.params),
        e.removeClass(o, "yotpo-template"),
        e.removeClass(o, "yotpo-hidden");
        var g = document.createElement("div");
        g.appendChild(o),
        t.insertAdjacentHTML("afterend", g.innerHTML),
        e.Modules.Handle.action.call(t.nextSibling)
    }
    ,
    t.prototype.shareLinks = function() {
        var t = this;
        return t._shareLinks || (t._shareLinks = {},
        e.forEach(["facebook", "twitter", "google", "linkedin"], function(i) {
            t._shareLinks[i] = new e.ShareLink(i,t.params)
        })),
        t._shareLinks
    }
    ,
    t.prototype.shareLink = function(e) {
        return this.shareLinks()[e]
    }
    ,
    t
}(Yotpo),
Yotpo.InstagramPost = function(e) {
    function t(e, t, i) {
        this.params = {
            id: e
        },
        this.originalElement = t,
        this.analyticsCategory = i
    }
    return t.load = function(t, i, o) {
        var n = new e.InstagramPost(t.getAttribute("data-instagram-id"),i,o);
        return e.Modules.Handle.action.call(t),
        e.Modules.Vote.bind.call(t, n),
        n
    }
    ,
    t.prototype.get = function(e) {
        return this.params[e]
    }
    ,
    t.prototype.getType = function() {
        return "instagram"
    }
    ,
    t.prototype.vote = function(t, i) {
        e.Modules.Vote.perform.call(this, t, i),
        e.currentAnalytics.trackEvent(this.analyticsCategory, "clicked_on", "vote_" + t)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.updateOriginalVote = function(e, t) {
        var i = this.originalElement.querySelector(".vote-sum[data-type=" + e + "]");
        i && (i.innerHTML = +i.innerHTML + t)
    }
    ,
    t
}(Yotpo),
Yotpo.Question = function(e) {
    function t(t) {
        this.params = {},
        e.copy(t, this.params)
    }
    return t.load = function(t) {
        var i = new e.Question({
            id: +t.getAttribute("data-question-id")
        });
        e.Modules.Handle.action.call(t),
        e.Modules.Handle.tooltip.call(t);
        for (var o, n = t.querySelectorAll(".yotpo-comment"), r = 0; o = n[r]; r++)
            e.Answer.load(o);
        return i
    }
    ,
    t.prototype.setUser = function(e) {
        this.user = e
    }
    ,
    t.prototype.save = function() {
        var t = this
          , i = e.getApiHost() + "/questions/send_confirmation_mail"
          , o = e.convertHashToQueryStringParams(this.params);
        "GET" == e.dynamicCreateType && (i += "?" + o),
        e.ajax(i, function(e) {
            t.data = JSON.parse(e),
            t.trigger("save")
        }, e.dynamicCreateType, o)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Answer = function(e) {
    function t(t) {
        this.params = {},
        e.copy(t, this.params)
    }
    return t.load = function(t) {
        var i = new e.Answer({
            id: +t.getAttribute("data-answer-id")
        });
        return e.Modules.Vote.bind.call(t, i),
        i
    }
    ,
    t.prototype.vote = function(t, i) {
        e.Modules.Vote.perform.call(this, t, i),
        e.currentAnalytics.trackEvent("answers", "clicked_on", "vote_" + t)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.get = function(e) {
        return this.params[e]
    }
    ,
    t.prototype.getType = function() {
        return "answer"
    }
    ,
    t
}(Yotpo),
Yotpo.Tabs = function(e) {
    function t(t) {
        var i = this;
        i.element = t,
        i.tabs = i.element.querySelectorAll("li[data-content]");
        for (var o = function(e) {
            return i.activate(this) && i.trigger("changed", {
                element: this,
                event: e
            }),
            !1
        }, n = 0; n < i.tabs.length; ++n)
            i.tabs[n].onclick = o,
            e.onEnterKeyDown(i.tabs[n], o),
            e.onKeyDown(i.tabs[n], function(e) {
                var t = this
                  , o = t.nextElementSibling;
                o && i.activate(o) && (o.focus(),
                i.trigger("changed", {
                    element: o,
                    event: e
                }))
            }, [e.keyCodes.right]),
            e.onKeyDown(i.tabs[n], function(e) {
                var t = this
                  , o = t.previousElementSibling;
                o && i.activate(o) && (o.focus(),
                i.trigger("changed", {
                    element: o,
                    event: e
                }))
            }, [e.keyCodes.left])
    }
    return t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getTabs = function() {
        return this.tabs
    }
    ,
    t.prototype.getTab = function(e) {
        for (var t = 0; t < this.tabs.length; ++t)
            if (this.tabs[t].getAttribute("data-type") == e)
                return this.tabs[t];
        return null
    }
    ,
    t.prototype.getActive = function() {
        for (var t = 0; t < this.tabs.length; ++t)
            if (e.hasClass(this.tabs[t], "yotpo-active"))
                return this.tabs[t]
    }
    ,
    t.prototype.activate = function(t) {
        if (e.hasClass(t, "yotpo-active"))
            return !1;
        for (var i = 0; i < this.tabs.length; ++i)
            e.removeClass(this.tabs[i], "yotpo-active"),
            this.tabs[i].setAttribute("tabindex", -1),
            this.tabs[i].setAttribute("aria-selected", "false"),
            e.forEach(this.tabs[i].getAttribute("data-content").split(" "), function(t) {
                var i = e.getDocElement().querySelector("#" + t);
                i && e.removeClass(i, "yotpo-active")
            });
        return e.addClass(t, "yotpo-active"),
        t.setAttribute("tabindex", 0),
        t.setAttribute("aria-selected", "true"),
        e.forEach(t.getAttribute("data-content").split(" "), function(t) {
            var i = e.getDocElement().querySelector("#" + t);
            i && e.addClass(i, "yotpo-active")
        }),
        !0
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Select = function(e) {
    function t(e) {
        this.element = e,
        this.selected = this.element.getElementsByClassName("selected")[0],
        this.list = this.element.getElementsByClassName("list-categories")[0],
        this.button = this.element.getElementsByClassName("yotpo-dropdown-button")[0];
        for (var t in o)
            o.hasOwnProperty(t) && this.on(t, o[t]);
        i.call(this)
    }
    function i() {
        function t(e, t) {
            if ("change" == e) {
                var o = i.selected.getAttribute("data-selected-key")
                  , n = t.getAttribute("sort-name");
                return o != n
            }
            return !0
        }
        var i = this
          , o = [];
        o.push({
            name: "toggle",
            elements: i.element.querySelectorAll(".yotpo-dropdown-button .selected, .yotpo-dropdown-button .yotpo-icon, .filters-dropdown .yotpo-dropdown-button, .sort-drop-down .yotpo-dropdown-button ")
        }),
        o.push({
            name: "change",
            elements: i.list.querySelectorAll(".list-category")
        }),
        o.push({
            name: "click",
            elements: i.list.getElementsByClassName("list-category")
        }),
        e.forEach(o, function(o) {
            for (var n = 0; n < o.elements.length; ++n)
                e.addEventListener(o.elements[n], "click", function(e, o) {
                    return function(n) {
                        t(e, o) && i.trigger(e, {
                            element: o
                        }, n)
                    }
                }(o.name, o.elements[n]))
        });
        for (var n = i.element.querySelectorAll(".list-category"), r = 0; r < n.length; r++)
            e.onKeyDown(n[r], function() {
                var e = this
                  , t = e.nextElementSibling;
                t && (t.focus(),
                t.firstElementChild.focus())
            }, [e.keyCodes.down]),
            e.onKeyDown(n[r], function() {
                var e = this
                  , t = e.previousElementSibling;
                t && (t.focus(),
                t.firstElementChild.focus())
            }, [e.keyCodes.up]),
            e.onKeyDown(n[r], function() {
                var e = i.element.getElementsByClassName("yotpo-dropdown-button")[0];
                e && e.getAttribute("aria-expanded") && (e.click(),
                e.focus())
            }, [e.keyCodes.enter]),
            e.onKeyDown(n[r], function() {
                i.element.getElementsByClassName("yotpo-dropdown-button")[0];
                i.list && e.toggleVisibility(i.list)
            }, [e.keyCodes.escape]);
        e.addEventListener(window, "click", function() {
            i.list.style.display = "none",
            null !== i.button && void 0 !== i.button && i.button.setAttribute("aria-expanded", "false")
        })
    }
    var o = {};
    return t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getType = function() {
        return this.element.getAttribute("data-type")
    }
    ,
    t.prototype.getValue = function() {
        return this.element.getAttribute("data-value")
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i, o) {
        e.Modules.Event.trigger.call(this, t, i, o)
    }
    ,
    o = {
        toggle: function(t, i) {
            var o = this;
            if (e.toggleVisibility(this.list),
            !e.isHidden(this.list)) {
                var n = o.element.querySelector(".list-category");
                n && n.firstElementChild.focus(),
                e.isHidden(n) && n.nextElementSibling.firstElementChild.focus()
            }
            null !== o.button && void 0 !== o.button && e.toggleAttribute(o.button, "aria-expanded"),
            i ? "undefined" != typeof i.stopPropagation ? i.stopPropagation() : i.cancelBubble = !0 : window.event.cancelBubble = !0;
            var r = this.list
              , s = e.getDocElement().querySelectorAll(".yotpo-dropdown.list-categories");
            s.forEach(function(t) {
                if (r !== t && "none" !== e.getDisplayStyle(t)) {
                    e.toggleVisibility(t);
                    var i = t.parentNode.querySelector(".yotpo-dropdown-button");
                    null !== i && void 0 !== i && e.toggleAttribute(i, "aria-expanded")
                }
            })
        },
        change: function(t) {
            this.element.setAttribute("data-value", t.element.getAttribute("data-value")),
            this.selected.setAttribute("data-selected-key", t.element.getAttribute("sort-name")),
            e.addClass(this.selected, "non-default-item-selected"),
            this.selected.innerHTML = t.element.children.length > 0 ? e.getElementText(t.element.children[0]) : ""
        },
        click: function(t, i) {
            for (var n = ["property", "label", "category"], r = 0; r < n.length; ++r)
                attrName = "data-analytic-" + n[r],
                t.element.getAttribute(attrName) && this.element.setAttribute(attrName, t.element.getAttribute(attrName));
            this.element.getAttribute("data-analytic-category") && e.currentAnalytics.trackEvent(this.element.getAttribute("data-analytic-category"), "clicked_on", this.element.getAttribute("data-analytic-label"), this.element.getAttribute("data-analytic-property")),
            o.toggle.call(this, t, i)
        }
    },
    t
}(Yotpo),
Yotpo.Stars = function(e) {
    function t(e) {
        this.element = e,
        this.stars = this.element.getElementsByClassName("review-star"),
        this.score = 0,
        i.call(this)
    }
    function i() {
        for (var t = this, i = 0; i < t.stars.length; ++i) {
            var n = function() {
                t.setScore(+this.getAttribute("data-score")),
                t.trigger("changed")
            };
            t.stars[i].onclick = n,
            e.onEnterKeyDown(t.stars[i], n),
            t.stars[i].onmouseover = function() {
                o.call(t.stars, +this.getAttribute("data-score"))
            }
        }
        t.element.onmouseout = function() {
            o.call(t.stars, t.getScore())
        }
    }
    function o(e) {
        for (var t = 0; t < this.length; ++t)
            n.call(this[t], e > t, 0 == e && 0 == t ? !0 : t == e - 1)
    }
    function n(t, i) {
        var o = t ? "yotpo-icon-star" : "yotpo-icon-empty-star"
          , n = t ? "yotpo-icon-empty-star" : "yotpo-icon-star";
        this.setAttribute("aria-checked", i),
        this.setAttribute("tabindex", i ? "0" : "-1"),
        e.hasClass(this, o) || (e.addClass(this, o),
        e.removeClass(this, n))
    }
    return t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getStars = function() {
        return this.stars
    }
    ,
    t.prototype.getScore = function() {
        return this.score
    }
    ,
    t.prototype.setScore = function(e) {
        this.score = e,
        o.call(this.stars, e)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Messages = function(e) {
    function t(e) {
        this.messages = {};
        for (var t, o = 0; t = e[o]; o++)
            for (var n = t.querySelectorAll(".yotpo-thank-you, .yotpo-thankyou-confirmation"), r = 0; r < n.length; ++r)
                this.messages[n[r].getAttribute("data-type")] = n[r];
        i.call(this.messages)
    }
    function i() {
        var t = this;
        e.forEach(Object.keys(t), function(i) {
            var o = t[i]
              , n = o.querySelectorAll(".yotpo-icon-cross")[0];
            n && (n.onclick = function() {
                e.addClass(o, "yotpo-hidden")
            }
            )
        })
    }
    return t.prototype.get = function(e) {
        return this.messages[e]
    }
    ,
    t.prototype.show = function(t) {
        e.removeClass(this.messages[t], "yotpo-hidden")
    }
    ,
    t.prototype.scrollIntoView = function(e) {
        this.messages[e].scrollIntoView(!0),
        this.messages[e].focus()
    }
    ,
    t.prototype.hide = function(t) {
        e.addClass(this.messages[t], "yotpo-hidden")
    }
    ,
    t.prototype.hideAll = function() {
        for (var t in this.messages) {
            var i = this.messages[t];
            this.messages.hasOwnProperty(t) && !e.hasClass(i, "yotpo-hidden") && e.addClass(i, "yotpo-hidden")
        }
    }
    ,
    t
}(Yotpo),
Yotpo.Form = function(e) {
    function t(t, i) {
        this._controller = t,
        this.element = i,
        this.submitButton = this.element.getElementsByClassName("yotpo-submit")[0],
        this.CustomFieldsForm = new e.CustomFieldsForm(this.getElement().getElementsByClassName("form-element yotpo-custom-tag-field")),
        o.call(this),
        n.call(this),
        r.call(this),
        this.getElement().querySelector(".socialize-wrapper") && s.call(this),
        l.call(this),
        c.call(this),
        e.Modules.Handle.popup.call(this)
    }
    function i(t, i) {
        var o = {};
        for (var n in t)
            if (-1 == n.search("custom_fields") && t.hasOwnProperty(n)) {
                t[n] = e.escapeHtml(t[n]);
                for (var r in p[n])
                    p[n].hasOwnProperty(r) && 0 == p[n][r](t[n]) && (o[n] = {
                        message: "FieldNotValid:" + n,
                        field: n,
                        type: r
                    },
                    "question" === i && "review_content" === n && "empty" === r && (o[n].type = "empty_question"))
            }
        return o
    }
    function o() {
        var t = this
          , i = this.getElement().getElementsByClassName("stars-wrapper")[0];
        if (i) {
            t.stars = new e.Stars(i),
            t.stars.on("changed", function() {
                e.currentAnalytics.trackEvent(t._controller.analyticsCategory, "clicked_on", t.stars.getScore())
            });
            for (var o = i.querySelectorAll(".review-star"), n = 0; n < o.length; ++n)
                e.onKeyDown(o[n], function() {
                    var e = this
                      , i = e.nextElementSibling;
                    i && (e.setAttribute("tabindex", -1),
                    i.setAttribute("tabindex", 0),
                    i.focus(),
                    t.stars.setScore(+i.getAttribute("data-score")))
                }, [e.keyCodes.right]),
                e.onKeyDown(o[n], function() {
                    var e = this
                      , i = e.previousElementSibling;
                    i && (e.setAttribute("tabindex", -1),
                    i.setAttribute("tabindex", 0),
                    i.focus(),
                    t.stars.setScore(+i.getAttribute("data-score")))
                }, [e.keyCodes.left])
        }
    }
    function n() {
        var t = this;
        t.error = {},
        t.error.box = t.getElement().getElementsByClassName("error-box")[0];
        var i = t.error.box.getElementsByClassName("yotpo-icon-cross")[0];
        i && (e.mouseClickOnEnterKeyDown(i),
        i.onclick = function() {
            t.hideErrorBox()
        }
        )
    }
    function r() {
        var t = this
          , i = t.getElement().querySelector(".write-form > .write-review > .yotpo-icon-btn > .yotpo-icon-cross");
        if (i) {
            var o = function() {
                e.removeClass(t.getElement(), "visible"),
                t.getElement().style.display = "none"
            };
            i.onclick = o,
            e.onEnterKeyDown(i, o)
        }
    }
    function s() {
        var t = this
          , i = new e.Session;
        i.on("checkLogin", function(e) {
            i.token && i.get("user", function(o) {
                o.token = i.token,
                a.call(t, o),
                e.submit && t.submit()
            })
        }),
        t.on("opened", function() {
            yotpo.getUserSetting("disable_social_login") || i.checkLogin()
        }),
        i.on("init", function() {
            for (var o = t.getElement().querySelectorAll(".socialize .yotpo-icon-btn"), n = 0; n < o.length; ++n) {
                var r = function(o) {
                    return function() {
                        e.currentAnalytics.trackEvent(t._controller.analyticsCategory, "clicked_on", "connect_" + o);
                        var n = window.open(i.signInNetwork(o), "", "status=no,toolbar=no,location=no,menubar=no,directories=no,scrollbars=yes,resizeable=yes,width=" + g[o][0] + ",height=" + g[o][1] + ",top=200,left=400");
                        window.focus && n.focus();
                        var r = setInterval(function() {
                            n.closed && (clearInterval(r),
                            i.checkLogin(!0))
                        }, 200);
                        return !1
                    }
                }(o[n].getAttribute("data-network"));
                o[n].onclick = r,
                e.onEnterKeyDown(o[n], r)
            }
        }),
        i.init()
    }
    function a(t) {
        this.user = t;
        var i = this.getElement().querySelector(".socialize-wrapper .username");
        i && (i.innerHTML = this.user.name);
        var o = [];
        o.push({
            elements: this.getElement().querySelectorAll(".socialize-wrapper .socialize, .socialize-wrapper .yotpo-or, .connect-wrapper .form-element"),
            name: "hide"
        }),
        o.push({
            elements: this.getElement().querySelectorAll(".socialize-wrapper .connected, .yotpo-footer"),
            name: "show"
        }),
        e.forEach(o, function(t) {
            for (var i = 0; i < t.elements.length; ++i)
                e[t.name](t.elements[i])
        }),
        this.activate()
    }
    function l() {
        var t = this;
        t.submitButton.onclick = function() {
            e.hasClass(t.submitButton, "yotpo-disabled") || t.submit()
        }
    }
    function c() {
        var t = this
          , i = t.getElement().getElementsByClassName("write-review")[0]
          , o = ["review-star", "yotpo-text-box", "yotpo-icon-btn"];
        i.onkeydown = function(i) {
            i = i || event;
            var n = i.srcElement || i.target;
            13 != i.keyCode || e.hasAnyClass(n, o) || t.submit()
        }
    }
    function d(t, i, o, n) {
        t.getElementsByClassName("yotpo-i-agree").length > 0 && o + 1 === n ? e.show(i, "block") : e.show(i)
    }
    function u(t) {
        for (var i = this.getElementsByClassName("social-link"), o = 0; o < i.length; ++o) {
            var n = i[o].getAttribute("data-network");
            i[o].href = t[n].get("link")
        }
        e.Modules.Handle.popup.call(this)
    }
    var p = {}
      , g = {};
    return t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getType = function() {
        var e = this._controller.getActiveSource() ? this._controller.getActiveSource().getType() : this._controller.get("settings").mode || "reviews";
        return e = e.substr(0, e.length - 1)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.activate = function() {
        e.removeClass(this.submitButton, "yotpo-disabled"),
        this.submitButton.setAttribute("aria-disabled", "false")
    }
    ,
    t.prototype.submit = function() {
        e.addClass(this.submitButton, "yotpo-disabled"),
        this.submitButton.setAttribute("aria-disabled", "true"),
        this.cleanErrors();
        var t = {};
        "undefined" != typeof this.stars && (t.review_score = this.stars.getScore().toString());
        for (var i = this.getElement().getElementsByClassName("form-element"), o = {}, n = 0; n < i.length; ++n) {
            var r = i[n];
            if (!e.isHidden(r)) {
                var s = r.getElementsByClassName("y-input");
                if (s.length) {
                    var a = s[0];
                    if (!a.name)
                        continue;
                    o[a.name] = a,
                    t[a.name] = a.value,
                    "checkbox" === a.type && (t[a.name] = null != a.checked && a.checked ? "agree" : "")
                }
            }
        }
        e.copy(this.CustomFieldsForm.getValues(), t);
        var l = this._controller._controller;
        l.getUserReference() && e.hasClass(this.element, "write-review-wrapper") && (t.user_reference = l.getUserReference());
        try {
            this.saveContent(this.getType(), t);
            var c = this.element.getElementsByClassName("yotpo-agree-checkbox y-input")[0];
            c && (c.checked = !1)
        } catch (d) {
            e.removeClass(this.submitButton, "yotpo-disabled"),
            this.submitButton.setAttribute("aria-disabled", "false");
            var u;
            for (err in d) {
                var p = o[err] || this.CustomFieldsForm.getFieldElement(err);
                p && (e.hasClass(p, "yotpo-custom-tag-field") ? this.showFormInputError(p, d[err].type) : e.addClass(p, "error")),
                "empty" == d[err].type && ("review_title" == d[err].field ? e.currentAnalytics.trackEvent(this._controller.analyticsCategory, "failure_forgot", "title") : "review_content" == d[err].field && e.currentAnalytics.trackEvent(this._controller.analyticsCategory, "failure_forgot", "body")),
                "review_score" == d[err].field && (p = this.stars.getElement()),
                p && !u && (u = p),
                this.showFormInputError(p, d[err].type)
            }
            u && (e.hasClass(u, "stars-wrapper") && (u = u.parentNode),
            u.focus()),
            this.showFormInputError(this.submitButton, "open_question_answer_length")
        }
    }
    ,
    t.prototype.visible = function() {
        return e.hasClass(this.getElement(), "visible")
    }
    ,
    t.prototype.clean = function() {
        function t(t, i) {
            i && i.setAttribute("aria-selected", "false"),
            e.removeClass(t, "visible"),
            t.style.display = "none"
        }
        var i, o, n = this.getType();
        ("reviews" === n || "questions" === n) && (i = "questions" === n ? "review" : "question",
        o = this._controller.element.querySelector(".write-" + i + "-button")),
        t(this.getElement(), o);
        for (var r = this.getElement().getElementsByClassName("visible"), s = r.length - 1; s >= 0; --s)
            t(r[s]);
        for (var a = this.getElement().querySelectorAll(".form-element .y-input[name]"), s = 0; s < a.length; ++s)
            a[s].value = "";
        this.CustomFieldsForm.reset(),
        "undefined" != typeof this.stars && this.stars.setScore(0),
        this.cleanErrors(),
        this.submitButton.style.marginTop = null
    }
    ,
    t.prototype.showError = function(t, i) {
        for (var o = this.error.box.getElementsByClassName("error-text"), n = 0; n < o.length; n++)
            e.hasClass(o[n], i) ? e.show(o[n]) : e.hide(o[n]);
        e.removeClass(this.error.box, "yotpo-hidden")
    }
    ,
    t.prototype.showFormInputError = function(t, i) {
        var o;
        o = "mandatory_field" === i ? t.querySelector(".form-input-error") : t.parentElement.querySelector(".form-input-error") || t.parentElement.parentElement.querySelector(".form-input-error");
        var n = this.error.box.getElementsByClassName("error-text");
        if (o) {
            for (var r = 0; r < n.length; r++)
                e.hasClass(n[r], i) && (o.textContent = n[r].textContent,
                o.setAttribute("role", "alert"),
                d(this.element, o, r, n.length));
            e.removeClass(o, "yotpo-hidden")
        }
    }
    ,
    t.prototype.hideErrorBox = function() {
        e.addClass(this.error.box, "yotpo-hidden")
    }
    ,
    t.prototype.cleanErrors = function() {
        this.hideErrorBox(),
        this.CustomFieldsForm.cleanErrors();
        for (var t = this.getElement().querySelectorAll(".y-input.error"), i = 0; i < t.length; ++i)
            e.removeClass(t[i], "error");
        for (var o = this.getElement().querySelectorAll(".form-input-error"), i = 0; i < o.length; ++i)
            o[i].textContent = "",
            e.addClass(o[i], "yotpo-hidden"),
            o[i].removeAttribute("role")
    }
    ,
    t.prototype.saveContent = function(t, o) {
        function n(e) {
            for (var t in e)
                if (e.hasOwnProperty(t))
                    return !1;
            return JSON.stringify(e) === JSON.stringify({})
        }
        var r = this
          , s = r._controller._controller
          , a = 0 != s.getUserSetting("async_create")
          , l = i(o, t)
          , c = {};
        if (r._controller.tabs && "site" == r._controller.tabs.getActive().getAttribute("data-type") ? o.product_tags && delete o.product_tags : c = this.CustomFieldsForm.validate(o),
        !n(l) || !n(c)) {
            var d = Object.assign({}, l, c);
            throw d
        }
        if (o.appkey = r._controller.getAppKey(),
        window.location.host == e.hosts.b2b.dynamic) {
            var p = window.location.pathname;
            o.review_source = "/facebook_testimonials" == p ? "widget_v2_facebook_tab" : "/site_reviews_landing_page" == p ? "widget_v2_dedicated_page" : "widget_v2"
        } else
            o.review_source = "widget_v2";
        this.user && (o.utoken = this.user.token),
        e.copy(r._controller.getProductInfo(), o);
        var g = !1
          , h = r._controller._controller.getUserSetting("vendor_review_creation");
        if (h) {
            var m = r._controller._controller.getTrustedVendorsData();
            if (Object.keys(m).length > 0 && ("1" == h.settings.show_name_field && delete m.display_name,
            g = !0,
            e.copy(m, o),
            r._controller.tabs && "site" == r._controller.tabs.getActive().getAttribute("data-type"))) {
                var f = r._controller._controller.getWidgetByName("Main");
                f && e.copy({
                    page_pid: f.settings.pid
                }, o)
            }
        }
        if (s.getUserSetting("prevent_duplicate_reviews") && (o.prevent_duplicate_review = !0),
        s.getUserSetting("bv_syndication") && "function" == typeof window.IGLOO.getBlackbox) {
            var y = window.IGLOO.getBlackbox();
            y.finished && (o.iovation_fp = y.blackbox)
        }
        var v = e[e.capitalize(t)];
        if ("undefined" == typeof v)
            throw "Error resource is undefined - " + v;
        var b = this.getElement();
        e.togglePreLoader(b),
        e.currentAnalytics.trackEvent(r._controller.analyticsCategory, "shown", "review_posted");
        var w = new v(o);
        w.on("save", function() {
            e.togglePreLoader(b);
            var i = r._controller.getActiveSource()
              , o = i ? i.getTemplate() : null
              , n = "undefined" != typeof s.getUserSetting("account_settings").settings.auto_publish && "review" == t
              , a = s.getUserSetting("show_social_links")
              , l = r._controller.get("messages");
            if ("function" == typeof w.shareLinks && u.call(l.get("share"), w.shareLinks()),
            o)
                w.render(o),
                i.trigger("updated");
            else {
                r.clean();
                var c = "pending-for-" + t + "-approval";
                "review" === t && (n || a) ? c = "share" : "question" !== t || g || l.show("question-approval"),
                l.show(c),
                l.scrollIntoView(c)
            }
        }),
        w.on("error", function() {
            e.togglePreLoader(b),
            400 == this.data.code && "duplicate_review" == this.data.message && (e.currentAnalytics.trackEvent(r._controller.analyticsCategory, "shown", "duplicate_reviews"),
            r.showError(b.querySelector("[name=review_content]"), "user-already-reviewed"))
        }),
        w.setUser(this.user),
        w.save(a)
    }
    ,
    t.prototype.setInputField = function(e, t) {
        var i = this.getInputField(e);
        i && (i.value = t)
    }
    ,
    t.prototype.getInputField = function(e) {
        return this.element.querySelector('input[name="' + e + '"]')
    }
    ,
    p = {
        appkey: {
            empty: e.validateStringMinLength,
            max_length: e.validateStringMaxLength
        },
        email: {
            email: e.validateEmail
        },
        agree: {
            agree: e.validateCheckbox
        },
        display_name: {
            display_name_empty: e.validateStringMinLength,
            max_length: function(t) {
                return e.validateStringMaxLength(t, 40)
            }
        },
        sku: {
            empty: e.validateStringMinLength,
            max_length: e.validateStringMaxLength
        },
        product_title: {
            empty: e.validateStringMinLength,
            max_length: e.validateStringMaxLength
        },
        product_description: {
            max_length: function(t) {
                return e.validateStringMaxLength(t, 1e3)
            }
        },
        product_url: {
            empty: e.validateStringMinLength,
            max_length: e.validateStringMaxLength
        },
        product_image_url: {
            max_length: e.validateStringMaxLength
        },
        review_score: {
            score: function(e) {
                return +e > 0
            }
        },
        review_title: {
            empty: e.validateStringMinLength,
            max_length: e.validateStringMaxLength
        },
        review_content: {
            empty: e.validateStringMinLength,
            max_length: function(t) {
                return e.validateStringMaxWords(t, 5e3)
            }
        },
        content: {
            empty: e.validateStringMinLength,
            max_length: function(t) {
                return e.validateStringMaxWords(t, 5e3)
            }
        }
    },
    g = {
        facebook: [984, 600],
        twitter: [680, 760],
        linkedin: [488, 577],
        google_oauth2: [960, 531]
    },
    t
}(Yotpo),
Yotpo.FileUploader = function(e) {
    function t(e, t) {
        this.file = e,
        this.errors = [],
        this.validations = t
    }
    function i(t, i) {
        e.successfulResponse(i) || this.errors.push(i.responseText),
        this.trigger("complete", {
            errors: this.errors,
            file: this.file,
            url: t.url
        })
    }
    function o(t, i, o) {
        var r = new FormData;
        switch (i) {
        case e.FileUploader.TYPE.S3:
            n.call(this, t, r, o);
            break;
        default:
            for (var s in t)
                r.append(s, t[s])
        }
        return r.append("Content-Type", this.file.type),
        r.append("file", this.file),
        r
    }
    function n(t, i, o) {
        var n = s(t, e.FileUploader.TYPE.S3, o);
        i.append("key", n),
        i.append("acl", "public-read"),
        i.append("X-Amz-Credential", t.credential),
        i.append("Policy", t.encoded_policy),
        i.append("X-Amz-Date", t.date),
        i.append("X-Amz-Signature", t.signature),
        i.append("x-amz-meta-uuid", "14365123651274"),
        i.append("X-Amz-Algorithm", "AWS4-HMAC-SHA256")
    }
    function r() {
        var t = e.generateUUID().substring(0, 8);
        return t + "_" + this.file.name.replace(/[^\w.]/g, "_")
    }
    function s(t, i, o) {
        switch (i) {
        case e.FileUploader.TYPE.S3:
            return a(t.path) + o;
        default:
            return o
        }
    }
    function a(e) {
        return "/" !== e.charAt(e.length - 1) && (e += "/"),
        e
    }
    return t.TYPE = {
        S3: 1
    },
    t.prototype.upload = function(t, n, l) {
        var c = r.call(this)
          , d = o.call(this, n, l, c)
          , u = {
            withCredentials: !1,
            requestHeaders: {},
            getXhrAsResponse: !0
        }
          , p = {
            url: a(t) + s(n, l, c),
            type: l
        };
        e.ajax(t, i.bind(this, p), "POST", d, null, u)
    }
    ,
    t.prototype.validateAndUpload = function(t, i, o) {
        var n = new e.Helpers.FileValidator(this.file,this.validations)
          , r = this;
        n.on("validated", function(e) {
            return e.length > 0 ? void r.trigger("complete", {
                errors: e,
                file: r.file,
                url: null
            }) : void r.upload(t, i, o)
        }),
        n.validate()
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.removeEvent = function(t) {
        e.Modules.Event.removeEvent.call(this, t)
    }
    ,
    t
}(Yotpo),
Yotpo.Analytics = function(Yotpo) {
    function Analytics(e) {
        this._controller = e,
        this.pageSku = e.pageSku,
        this.trackedObjects = {},
        initYotpoAnalyticsLib.call(this),
        0 === Yotpo.getCookie(PIXEL_COOKIE_KEY) && _yaq.push(["setPixelCookie", Yotpo.generateUUID()])
    }
    function trackYotpoEvent(e, t, i, o, n, r, s, a) {
        Yotpo.shouldPreventCookies || _yaq.push(["trackStructEvent", e, t, i, o, n, r, a, s])
    }
    function initYotpoAnalyticsLib() {
        if (!Yotpo.shouldPreventCookies) {
            var e = this._controller.getUserSetting("reporting_end_points");
            e ? initYotpoMultiAnalytics.apply(this, [e]) : initYotpoAnalytics.apply(this);
            var t = this._controller.getUserSetting("cookie_path");
            t && _yaq.push(["setCookiePath", t.settings.sub_path])
        }
    }
    function initYotpoAnalytics() {
        _yaq.push(["setCollectorCf", "d33im0067v833a"]),
        _yaq.push(["enableActivityTracking", 10, 10]),
        _yaq.push(["setAppId", yotpo_analytics_version]),
        _yaq.push(["setPixelCookieName", PIXEL_COOKIE_KEY]),
        _yaq.push(["setConfigPixelCookieTimeout", COOKIE_MAX_AGE])
    }
    function initYotpoMultiAnalytics(e) {
        _yaq.push(["setCollectorUrl", e]),
        _yaq.push(["enableActivityTracking", 10, 10]),
        _yaq.push(["setAppId", yotpo_analytics_version]),
        _yaq.push(["setPixelCookieName", PIXEL_COOKIE_KEY]),
        _yaq.push(["setConfigPixelCookieTimeout", COOKIE_MAX_AGE])
    }
    function isTemplateReview(e) {
        return "0" == e
    }
    this.JSON2 || (this.JSON2 = {}),
    function() {
        "use strict";
        function isArray(e) {
            if ("isArray"in Array)
                return Array.isArray(e);
            var t = Object.prototype.toString.call(e);
            return "[object Array]" === t
        }
        function f(e) {
            return 10 > e ? "0" + e : e
        }
        function objectToJSON(e, t) {
            var i = Object.prototype.toString.apply(e);
            return "[object Date]" === i ? isFinite(e.valueOf()) ? e.getUTCFullYear() + "-" + f(e.getUTCMonth() + 1) + "-" + f(e.getUTCDate()) + "T" + f(e.getUTCHours()) + ":" + f(e.getUTCMinutes()) + ":" + f(e.getUTCSeconds()) + "Z" : null : "[object String]" === i || "[object Number]" === i || "[object Boolean]" === i ? e.valueOf() : isArray(e) || "function" != typeof e.toJSON ? e : e.toJSON(t)
        }
        function quote(e) {
            return escapable.lastIndex = 0,
            escapable.test(e) ? '"' + e.replace(escapable, function(e) {
                var t = meta[e];
                return "string" == typeof t ? t : "\\u" + ("0000" + e.charCodeAt(0).toString(16)).slice(-4)
            }) + '"' : '"' + e + '"'
        }
        function str(e, t) {
            var i, o, n, r, s, a = gap, l = t[e];
            switch (l && "object" == typeof l && (l = objectToJSON(l, e)),
            "function" == typeof rep && (l = rep.call(t, e, l)),
            typeof l) {
            case "string":
                return quote(l);
            case "number":
                return isFinite(l) ? String(l) : "null";
            case "boolean":
            case "null":
                return String(l);
            case "object":
                if (!l)
                    return "null";
                if (gap += indent,
                s = [],
                isArray(l)) {
                    for (r = l.length,
                    i = 0; r > i; i += 1)
                        s[i] = str(i, l) || "null";
                    return n = 0 === s.length ? "[]" : gap ? "[\n" + gap + s.join(",\n" + gap) + "\n" + a + "]" : "[" + s.join(",") + "]",
                    gap = a,
                    n
                }
                if (rep && "object" == typeof rep)
                    for (r = rep.length,
                    i = 0; r > i; i += 1)
                        "string" == typeof rep[i] && (o = rep[i],
                        n = str(o, l),
                        n && s.push(quote(o) + (gap ? ": " : ":") + n));
                else
                    for (o in l)
                        Object.prototype.hasOwnProperty.call(l, o) && (n = str(o, l),
                        n && s.push(quote(o) + (gap ? ": " : ":") + n));
                return n = 0 === s.length ? "{}" : gap ? "{\n" + gap + s.join(",\n" + gap) + "\n" + a + "}" : "{" + s.join(",") + "}",
                gap = a,
                n
            }
        }
        var cx = new RegExp("[\x00\xad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]","g"), pattern = '\\\\\\"\x00--\x9f\xad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]', escapable = new RegExp("[" + pattern,"g"), gap, indent, meta = {
            "\b": "\\b",
            "	": "\\t",
            "\n": "\\n",
            "\f": "\\f",
            "\r": "\\r",
            '"': '\\"',
            "\\": "\\\\"
        }, rep;
        "function" != typeof JSON2.stringify && (JSON2.stringify = function(e, t, i) {
            var o;
            if (gap = "",
            indent = "",
            "number" == typeof i)
                for (o = 0; i > o; o += 1)
                    indent += " ";
            else
                "string" == typeof i && (indent = i);
            if (rep = t,
            t && "function" != typeof t && ("object" != typeof t || "number" != typeof t.length))
                throw new Error("JSON.stringify");
            return str("", {
                "": e
            })
        }
        ),
        "function" != typeof JSON2.parse && (JSON2.parse = function(text, reviver) {
            function walk(e, t) {
                var i, o, n = e[t];
                if (n && "object" == typeof n)
                    for (i in n)
                        Object.prototype.hasOwnProperty.call(n, i) && (o = walk(n, i),
                        void 0 !== o ? n[i] = o : delete n[i]);
                return reviver.call(e, t, n)
            }
            var j;
            if (text = String(text),
            cx.lastIndex = 0,
            cx.test(text) && (text = text.replace(cx, function(e) {
                return "\\u" + ("0000" + e.charCodeAt(0).toString(16)).slice(-4)
            })),
            new RegExp("^[\\],:{}\\s]*$").test(text.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})',"g"), "@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?',"g"), "]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+","g"), "")))
                return j = eval("(" + text + ")"),
                "function" == typeof reviver ? walk({
                    "": j
                }, "") : j;
            throw new SyntaxError("JSON.parse")
        }
        )
    }(),
    !function(e) {
        var t = function() {
            "use strict";
            var e = "s"
              , i = function(e) {
                var t = -e.getTimezoneOffset();
                return null !== t ? t : 0
            }
              , o = function() {
                return i(new Date(2010,0,1,0,0,0,0))
            }
              , n = function() {
                return i(new Date(2010,5,1,0,0,0,0))
            }
              , r = function(e) {
                var t = e.getMonth() > 5 ? n() : o()
                  , r = i(e);
                return t - r !== 0
            }
              , s = function() {
                var t = o()
                  , i = n()
                  , r = o() - n();
                return 0 > r ? t + ",1" : r > 0 ? i + ",1," + e : t + ",0"
            }
              , a = function() {
                var e = s();
                return new t.TimeZone(t.olson.timezones[e])
            };
            return {
                determine_timezone: function() {
                    return "undefined" != typeof console && console.log("jstz.determine_timezone() is deprecated and will be removed in an upcoming version. Please use jstz.determine() instead."),
                    a()
                },
                determine: a,
                date_is_dst: r
            }
        }();
        t.TimeZone = function(e) {
            "use strict";
            var i = null
              , o = function() {
                return i
            }
              , n = function() {
                for (var e = t.olson.ambiguity_list[i], o = e.length, n = 0, r = e[0]; o > n; n += 1)
                    if (r = e[n],
                    t.date_is_dst(t.olson.dst_start_dates[r]))
                        return void (i = r)
            }
              , r = function() {
                return "undefined" != typeof t.olson.ambiguity_list[i]
            };
            return i = e,
            r() && n(),
            {
                name: o
            }
        }
        ,
        t.olson = {},
        t.olson.timezones = {
            "-720,0": "Etc/GMT+12",
            "-660,0": "Pacific/Pago_Pago",
            "-600,1": "America/Adak",
            "-600,0": "Pacific/Honolulu",
            "-570,0": "Pacific/Marquesas",
            "-540,0": "Pacific/Gambier",
            "-540,1": "America/Anchorage",
            "-480,1": "America/Los_Angeles",
            "-480,0": "Pacific/Pitcairn",
            "-420,0": "America/Phoenix",
            "-420,1": "America/Denver",
            "-360,0": "America/Guatemala",
            "-360,1": "America/Chicago",
            "-360,1,s": "Pacific/Easter",
            "-300,0": "America/Bogota",
            "-300,1": "America/New_York",
            "-270,0": "America/Caracas",
            "-240,1": "America/Halifax",
            "-240,0": "America/Santo_Domingo",
            "-240,1,s": "America/Asuncion",
            "-210,1": "America/St_Johns",
            "-180,1": "America/Godthab",
            "-180,0": "America/Argentina/Buenos_Aires",
            "-180,1,s": "America/Montevideo",
            "-120,0": "America/Noronha",
            "-120,1": "Etc/GMT+2",
            "-60,1": "Atlantic/Azores",
            "-60,0": "Atlantic/Cape_Verde",
            "0,0": "Etc/UTC",
            "0,1": "Europe/London",
            "60,1": "Europe/Berlin",
            "60,0": "Africa/Lagos",
            "60,1,s": "Africa/Windhoek",
            "120,1": "Asia/Beirut",
            "120,0": "Africa/Johannesburg",
            "180,1": "Europe/Moscow",
            "180,0": "Asia/Baghdad",
            "210,1": "Asia/Tehran",
            "240,0": "Asia/Dubai",
            "240,1": "Asia/Yerevan",
            "270,0": "Asia/Kabul",
            "300,1": "Asia/Yekaterinburg",
            "300,0": "Asia/Karachi",
            "330,0": "Asia/Kolkata",
            "345,0": "Asia/Kathmandu",
            "360,0": "Asia/Dhaka",
            "360,1": "Asia/Omsk",
            "390,0": "Asia/Rangoon",
            "420,1": "Asia/Krasnoyarsk",
            "420,0": "Asia/Jakarta",
            "480,0": "Asia/Shanghai",
            "480,1": "Asia/Irkutsk",
            "525,0": "Australia/Eucla",
            "525,1,s": "Australia/Eucla",
            "540,1": "Asia/Yakutsk",
            "540,0": "Asia/Tokyo",
            "570,0": "Australia/Darwin",
            "570,1,s": "Australia/Adelaide",
            "600,0": "Australia/Brisbane",
            "600,1": "Asia/Vladivostok",
            "600,1,s": "Australia/Sydney",
            "630,1,s": "Australia/Lord_Howe",
            "660,1": "Asia/Kamchatka",
            "660,0": "Pacific/Noumea",
            "690,0": "Pacific/Norfolk",
            "720,1,s": "Pacific/Auckland",
            "720,0": "Pacific/Tarawa",
            "765,1,s": "Pacific/Chatham",
            "780,0": "Pacific/Tongatapu",
            "780,1,s": "Pacific/Apia",
            "840,0": "Pacific/Kiritimati"
        },
        t.olson.dst_start_dates = {
            "America/Denver": new Date(2011,2,13,3,0,0,0),
            "America/Mazatlan": new Date(2011,3,3,3,0,0,0),
            "America/Chicago": new Date(2011,2,13,3,0,0,0),
            "America/Mexico_City": new Date(2011,3,3,3,0,0,0),
            "Atlantic/Stanley": new Date(2011,8,4,7,0,0,0),
            "America/Asuncion": new Date(2011,9,2,3,0,0,0),
            "America/Santiago": new Date(2011,9,9,3,0,0,0),
            "America/Campo_Grande": new Date(2011,9,16,5,0,0,0),
            "America/Montevideo": new Date(2011,9,2,3,0,0,0),
            "America/Sao_Paulo": new Date(2011,9,16,5,0,0,0),
            "America/Los_Angeles": new Date(2011,2,13,8,0,0,0),
            "America/Santa_Isabel": new Date(2011,3,5,8,0,0,0),
            "America/Havana": new Date(2011,2,13,2,0,0,0),
            "America/New_York": new Date(2011,2,13,7,0,0,0),
            "Asia/Gaza": new Date(2011,2,26,23,0,0,0),
            "Asia/Beirut": new Date(2011,2,27,1,0,0,0),
            "Europe/Minsk": new Date(2011,2,27,2,0,0,0),
            "Europe/Helsinki": new Date(2011,2,27,4,0,0,0),
            "Europe/Istanbul": new Date(2011,2,28,5,0,0,0),
            "Asia/Damascus": new Date(2011,3,1,2,0,0,0),
            "Asia/Jerusalem": new Date(2011,3,1,6,0,0,0),
            "Africa/Cairo": new Date(2010,3,30,4,0,0,0),
            "Asia/Yerevan": new Date(2011,2,27,4,0,0,0),
            "Asia/Baku": new Date(2011,2,27,8,0,0,0),
            "Pacific/Auckland": new Date(2011,8,26,7,0,0,0),
            "Pacific/Fiji": new Date(2010,11,29,23,0,0,0),
            "America/Halifax": new Date(2011,2,13,6,0,0,0),
            "America/Goose_Bay": new Date(2011,2,13,2,1,0,0),
            "America/Miquelon": new Date(2011,2,13,5,0,0,0),
            "America/Godthab": new Date(2011,2,27,1,0,0,0)
        },
        t.olson.ambiguity_list = {
            "America/Denver": ["America/Denver", "America/Mazatlan"],
            "America/Chicago": ["America/Chicago", "America/Mexico_City"],
            "America/Asuncion": ["Atlantic/Stanley", "America/Asuncion", "America/Santiago", "America/Campo_Grande"],
            "America/Montevideo": ["America/Montevideo", "America/Sao_Paulo"],
            "Asia/Beirut": ["Asia/Gaza", "Asia/Beirut", "Europe/Minsk", "Europe/Helsinki", "Europe/Istanbul", "Asia/Damascus", "Asia/Jerusalem", "Africa/Cairo"],
            "Asia/Yerevan": ["Asia/Yerevan", "Asia/Baku"],
            "Pacific/Auckland": ["Pacific/Auckland", "Pacific/Fiji"],
            "America/Los_Angeles": ["America/Los_Angeles", "America/Santa_Isabel"],
            "America/New_York": ["America/Havana", "America/New_York"],
            "America/Halifax": ["America/Goose_Bay", "America/Halifax"],
            "America/Godthab": ["America/Miquelon", "America/Godthab"]
        },
        "undefined" != typeof exports ? exports.jstz = t : e.jstz = t
    }(this);
    var _yaq = _yaq || []
      , SnowPlow = SnowPlow || function() {
        var e = window;
        return {
            version: "js-0.13.2",
            expireDateTime: null,
            plugins: {},
            hasLoaded: !1,
            registeredOnLoadHandlers: [],
            documentAlias: document,
            windowAlias: e,
            navigatorAlias: navigator,
            screenAlias: screen,
            encodeWrapper: e.encodeURIComponent,
            decodeWrapper: e.decodeURIComponent,
            decodeUrl: unescape,
            asyncTracker: null
        }
    }();
    SnowPlow.isDefined = function(e) {
        return "undefined" != typeof e
    }
    ,
    SnowPlow.isNotNull = function(e) {
        return null !== e
    }
    ,
    SnowPlow.isFunction = function(e) {
        return "function" == typeof e
    }
    ,
    SnowPlow.isArray = "isArray"in Array ? Array.isArray : function(e) {
        return "[object Array]" === Object.prototype.toString.call(e)
    }
    ,
    SnowPlow.isEmptyArray = function(e) {
        return SnowPlow.isArray(e) && e.length < 1
    }
    ,
    SnowPlow.isObject = function(e) {
        return "object" == typeof e
    }
    ,
    SnowPlow.isJson = function(e) {
        return SnowPlow.isDefined(e) && SnowPlow.isNotNull(e) && e.constructor === {}.constructor
    }
    ,
    SnowPlow.isNonEmptyJson = function(e) {
        return SnowPlow.isJson(e) && e !== {}
    }
    ,
    SnowPlow.isString = function(e) {
        return "string" == typeof e || e instanceof String
    }
    ,
    SnowPlow.isNonEmptyString = function(e) {
        return SnowPlow.isString(e) && "" !== e
    }
    ,
    SnowPlow.isDate = function(e) {
        return "[object Date]" === Object.prototype.toString.call(e)
    }
    ,
    SnowPlow.encodeUtf8 = function(e) {
        return SnowPlow.decodeUrl(SnowPlow.encodeWrapper(e))
    }
    ,
    SnowPlow.fixupTitle = function(e) {
        if (!SnowPlow.isString(e)) {
            e = e.text || "";
            var t = SnowPlow.documentAlias.getElementsByTagName("title");
            t && SnowPlow.isDefined(t[0]) && (e = t[0].text)
        }
        return e
    }
    ,
    SnowPlow.getHostName = function(e) {
        var t = new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)")
          , i = t.exec(e);
        return i ? i[1] : e
    }
    ,
    SnowPlow.hasSessionStorage = function() {
        try {
            return !!SnowPlow.windowAlias.sessionStorage
        } catch (e) {
            return !0
        }
    }
    ,
    SnowPlow.hasLocalStorage = function() {
        try {
            return !!SnowPlow.windowAlias.localStorage
        } catch (e) {
            return !0
        }
    }
    ,
    SnowPlow.toTimestamp = function(e, t) {
        return t ? e / 1 : Math.floor(e / 1e3)
    }
    ,
    SnowPlow.toDatestamp = function(e) {
        return Math.floor(e / 864e5)
    }
    ,
    SnowPlow.fixupUrl = function(e, t, i) {
        function o(e, t) {
            var i = new RegExp("^(?:https?|ftp)(?::/*(?:[^?]+)[?])([^#]+)")
              , o = i.exec(e)
              , n = new RegExp("(?:^|&)" + t + "=([^&]*)")
              , r = o ? n.exec(o[1]) : 0;
            return r ? SnowPlow.decodeWrapper(r[1]) : ""
        }
        return "translate.googleusercontent.com" === e ? ("" === i && (i = t),
        t = o(t, "u"),
        e = SnowPlow.getHostName(t)) : ("cc.bingj.com" === e || "webcache.googleusercontent.com" === e || "74.6." === e.slice(0, 5)) && (t = SnowPlow.documentAlias.links[0].href,
        e = SnowPlow.getHostName(t)),
        [e, t, i]
    }
    ,
    SnowPlow.fixupDomain = function(e) {
        var t = e.length;
        return "." === e.charAt(--t) && (e = e.slice(0, t)),
        "*." === e.slice(0, 2) && (e = e.slice(1)),
        e
    }
    ,
    SnowPlow.getReferrer = function() {
        var e = "";
        try {
            e = SnowPlow.windowAlias.top.document.referrer
        } catch (t) {
            if (SnowPlow.windowAlias.parent)
                try {
                    e = SnowPlow.windowAlias.parent.document.referrer
                } catch (i) {
                    e = ""
                }
        }
        return "" === e && (e = SnowPlow.documentAlias.referrer),
        e
    }
    ,
    SnowPlow.addEventListener = function(e, t, i, o) {
        return e.addEventListener ? (e.addEventListener(t, i, o),
        !0) : e.attachEvent ? e.attachEvent("on" + t, i) : void (e["on" + t] = i)
    }
    ,
    SnowPlow.getCookie = function(e) {
        var t = new RegExp("(^|;)[ ]*" + e + "=([^;]*)")
          , i = t.exec(SnowPlow.documentAlias.cookie);
        return i ? SnowPlow.decodeWrapper(i[2]) : 0
    }
    ,
    SnowPlow.setCookie = function(e, t, i, o, n, r) {
        var s;
        i && (s = new Date,
        s.setTime(s.getTime() + i)),
        SnowPlow.documentAlias.cookie = e + "=" + SnowPlow.encodeWrapper(t) + (i ? ";expires=" + s.toGMTString() : "") + ";path=" + (o || "/") + (n ? ";domain=" + n : "") + (r ? ";secure" : "")
    }
    ,
    SnowPlow.executePluginMethod = function(e, t) {
        var i, o, n = "";
        for (i in SnowPlow.plugins)
            Object.prototype.hasOwnProperty.call(SnowPlow.plugins, i) && (o = SnowPlow.plugins[i][e],
            SnowPlow.isFunction(o) && (n += o(t)));
        return n
    }
    ,
    SnowPlow.sha1 = function(e) {
        var t, i, o, n, r, s, a, l, c, d, u = function(e, t) {
            return e << t | e >>> 32 - t
        }, p = function(e) {
            var t, i, o = "";
            for (t = 7; t >= 0; t--)
                i = e >>> 4 * t & 15,
                o += i.toString(16);
            return o
        }, g = [], h = 1732584193, m = 4023233417, f = 2562383102, y = 271733878, v = 3285377520, b = [];
        for (e = SnowPlow.encodeUtf8(e),
        d = e.length,
        i = 0; d - 3 > i; i += 4)
            o = e.charCodeAt(i) << 24 | e.charCodeAt(i + 1) << 16 | e.charCodeAt(i + 2) << 8 | e.charCodeAt(i + 3),
            b.push(o);
        switch (3 & d) {
        case 0:
            i = 2147483648;
            break;
        case 1:
            i = e.charCodeAt(d - 1) << 24 | 8388608;
            break;
        case 2:
            i = e.charCodeAt(d - 2) << 24 | e.charCodeAt(d - 1) << 16 | 32768;
            break;
        case 3:
            i = e.charCodeAt(d - 3) << 24 | e.charCodeAt(d - 2) << 16 | e.charCodeAt(d - 1) << 8 | 128
        }
        for (b.push(i); 14 !== (15 & b.length); )
            b.push(0);
        for (b.push(d >>> 29),
        b.push(d << 3 & 4294967295),
        t = 0; t < b.length; t += 16) {
            for (i = 0; 16 > i; i++)
                g[i] = b[t + i];
            for (i = 16; 79 >= i; i++)
                g[i] = u(g[i - 3] ^ g[i - 8] ^ g[i - 14] ^ g[i - 16], 1);
            for (n = h,
            r = m,
            s = f,
            a = y,
            l = v,
            i = 0; 19 >= i; i++)
                c = u(n, 5) + (r & s | ~r & a) + l + g[i] + 1518500249 & 4294967295,
                l = a,
                a = s,
                s = u(r, 30),
                r = n,
                n = c;
            for (i = 20; 39 >= i; i++)
                c = u(n, 5) + (r ^ s ^ a) + l + g[i] + 1859775393 & 4294967295,
                l = a,
                a = s,
                s = u(r, 30),
                r = n,
                n = c;
            for (i = 40; 59 >= i; i++)
                c = u(n, 5) + (r & s | r & a | s & a) + l + g[i] + 2400959708 & 4294967295,
                l = a,
                a = s,
                s = u(r, 30),
                r = n,
                n = c;
            for (i = 60; 79 >= i; i++)
                c = u(n, 5) + (r ^ s ^ a) + l + g[i] + 3395469782 & 4294967295,
                l = a,
                a = s,
                s = u(r, 30),
                r = n,
                n = c;
            h = h + n & 4294967295,
            m = m + r & 4294967295,
            f = f + s & 4294967295,
            y = y + a & 4294967295,
            v = v + l & 4294967295
        }
        return c = p(h) + p(m) + p(f) + p(y) + p(v),
        c.toLowerCase()
    }
    ,
    SnowPlow.murmurhash3_32_gc = function(e, t) {
        var i, o, n, r, s, a, l, c;
        for (i = 3 & e.length,
        o = e.length - i,
        n = t,
        s = 3432918353,
        a = 461845907,
        c = 0; o > c; )
            l = 255 & e.charCodeAt(c) | (255 & e.charCodeAt(++c)) << 8 | (255 & e.charCodeAt(++c)) << 16 | (255 & e.charCodeAt(++c)) << 24,
            ++c,
            l = (65535 & l) * s + (((l >>> 16) * s & 65535) << 16) & 4294967295,
            l = l << 15 | l >>> 17,
            l = (65535 & l) * a + (((l >>> 16) * a & 65535) << 16) & 4294967295,
            n ^= l,
            n = n << 13 | n >>> 19,
            r = 5 * (65535 & n) + ((5 * (n >>> 16) & 65535) << 16) & 4294967295,
            n = (65535 & r) + 27492 + (((r >>> 16) + 58964 & 65535) << 16);
        switch (l = 0,
        i) {
        case 3:
            l ^= (255 & e.charCodeAt(c + 2)) << 16;
        case 2:
            l ^= (255 & e.charCodeAt(c + 1)) << 8;
        case 1:
            l ^= 255 & e.charCodeAt(c),
            l = (65535 & l) * s + (((l >>> 16) * s & 65535) << 16) & 4294967295,
            l = l << 15 | l >>> 17,
            l = (65535 & l) * a + (((l >>> 16) * a & 65535) << 16) & 4294967295,
            n ^= l
        }
        return n ^= e.length,
        n ^= n >>> 16,
        n = 2246822507 * (65535 & n) + ((2246822507 * (n >>> 16) & 65535) << 16) & 4294967295,
        n ^= n >>> 13,
        n = 3266489909 * (65535 & n) + ((3266489909 * (n >>> 16) & 65535) << 16) & 4294967295,
        n ^= n >>> 16,
        n >>> 0
    }
    ,
    SnowPlow.base64encode = function(e) {
        if (!e)
            return e;
        if ("function" == typeof window.btoa)
            return btoa(e);
        var t, i, o, n, r, s, a, l, c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", d = 0, u = 0, p = "", g = [];
        do
            t = e.charCodeAt(d++),
            i = e.charCodeAt(d++),
            o = e.charCodeAt(d++),
            l = t << 16 | i << 8 | o,
            n = l >> 18 & 63,
            r = l >> 12 & 63,
            s = l >> 6 & 63,
            a = 63 & l,
            g[u++] = c.charAt(n) + c.charAt(r) + c.charAt(s) + c.charAt(a);
        while (d < e.length);
        p = g.join("");
        var h = e.length % 3;
        return (h ? p.slice(0, h - 3) : p) + "===".slice(h || 3)
    }
    ,
    SnowPlow.base64urlencode = function(e) {
        if (!e)
            return e;
        var t = SnowPlow.base64encode(e);
        return t.replace(/=/g, "").replace(/\+/g, "-").replace(/\//g, "_")
    }
    ,
    SnowPlow.base64decode = function(e) {
        var t, i, o, n, r, s = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", a = "", l = "", c = "", d = 0;
        e = e.replace(/[^A-Za-z0-9\+\/\=]/g, "");
        do
            o = s.indexOf(e.charAt(d++)),
            n = s.indexOf(e.charAt(d++)),
            r = s.indexOf(e.charAt(d++)),
            c = s.indexOf(e.charAt(d++)),
            t = o << 2 | n >> 4,
            i = (15 & n) << 4 | r >> 2,
            l = (3 & r) << 6 | c,
            a += String.fromCharCode(t),
            64 != r && (a += String.fromCharCode(i)),
            64 != c && (a += String.fromCharCode(l)),
            t = i = l = "",
            o = n = r = c = "";
        while (d < e.length);
        return unescape(a)
    }
    ,
    SnowPlow.Tracker = function Tracker(argmap) {
        function constructCollectorUrl(e) {
            return "undefined" == typeof e ? null : "cf"in e ? collectorUrlFromCfDist(e.cf) : "url"in e ? asCollectorUrl(e.url) : void 0
        }
        function ecommerceTransactionTemplate() {
            return {
                transaction: {},
                items: []
            }
        }
        function purify(e) {
            var t;
            return configDiscardHashTag ? (t = new RegExp("#.*"),
            e.replace(t, "")) : e
        }
        function getProtocolScheme(e) {
            var t = new RegExp("^([a-z]+):")
              , i = t.exec(e);
            return i ? i[1] : null
        }
        function resolveRelativeReference(e, t) {
            var i, o = getProtocolScheme(t);
            return o ? t : "/" === t.slice(0, 1) ? getProtocolScheme(e) + "://" + SnowPlow.getHostName(e) + t : (e = purify(e),
            (i = e.indexOf("?")) >= 0 && (e = e.slice(0, i)),
            (i = e.lastIndexOf("/")) !== e.length - 1 && (e = e.slice(0, i + 1)),
            e + t)
        }
        function isSiteHostName(e) {
            var t, i, o;
            for (t = 0; t < configHostsAlias.length; t++) {
                if (i = SnowPlow.fixupDomain(configHostsAlias[t].toLowerCase()),
                e === i)
                    return !0;
                if ("." === i.slice(0, 1)) {
                    if (e === i.slice(1))
                        return !0;
                    if (o = e.length - i.length,
                    o > 0 && e.slice(o) === i)
                        return !0
                }
            }
            return !1
        }
        function getImage(e) {
            if (SnowPlow.isString(configCollectorUrl)) {
                if (null === configCollectorUrl)
                    throw "No SnowPlow collector configured, cannot track";
                setImage(configCollectorUrl + e)
            } else if (SnowPlow.isArray(configCollectorUrl))
                for (var t = 0; t < configCollectorUrl.length; t++)
                    setImage(configCollectorUrl[t] + e)
        }
        function setImage(e) {
            var t = new Image(1,1);
            t.onload = function() {}
            ,
            t.src = e
        }
        function sendRequest(e, t) {
            var i = new Date;
            configDoNotTrack || (getImage(e),
            SnowPlow.expireDateTime = i.getTime() + t)
        }
        function getCookieName(e) {
            return configCookieNamePrefix + e + "." + domainHash
        }
        function getLegacyCookieName(e) {
            return configCookieNamePrefix + e + "." + configTrackerSiteId + "." + domainHash
        }
        function getCookieValue(e) {
            var t = SnowPlow.getCookie(getCookieName(e));
            return t ? t : SnowPlow.getCookie(getLegacyCookieName(e))
        }
        function hasCookies() {
            var e = getCookieName("testcookie");
            return SnowPlow.isDefined(SnowPlow.navigatorAlias.cookieEnabled) ? SnowPlow.navigatorAlias.cookieEnabled ? "1" : "0" : (SnowPlow.setCookie(e, "1"),
            "1" === SnowPlow.getCookie(e) ? "1" : "0")
        }
        function updateDomainHash() {
            domainHash = hash((configCookieDomain || domainAlias) + (configCookiePath || "/")).slice(0, 4)
        }
        function activityHandler() {
            var e = new Date;
            lastActivityTime = e.getTime()
        }
        function scrollHandler() {
            updateMaxScrolls(),
            activityHandler()
        }
        function getPageOffsets() {
            var e = SnowPlow.documentAlias.compatMode && "BackCompat" != SnowPlow.documentAlias.compatMode ? SnowPlow.documentAlias.documentElement : SnowPlow.documentAlias.body;
            return [e.scrollLeft || SnowPlow.windowAlias.pageXOffset, e.scrollTop || SnowPlow.windowAlias.pageYOffset]
        }
        function resetMaxScrolls() {
            var e = getPageOffsets()
              , t = e[0];
            minXOffset = t,
            maxXOffset = t;
            var i = e[1];
            minYOffset = i,
            maxYOffset = i
        }
        function updateMaxScrolls() {
            var e = getPageOffsets()
              , t = e[0];
            minXOffset > t ? minXOffset = t : t > maxXOffset && (maxXOffset = t);
            var i = e[1];
            minYOffset > i ? minYOffset = i : i > maxYOffset && (maxYOffset = i)
        }
        function setDomainUserIdCookie(e, t, i, o, n, r) {
            SnowPlow.setCookie(getCookieName("id"), e + "." + t + "." + i + "." + o + "." + n, configVisitorCookieTimeout, configCookiePath, configCookieDomain, r)
        }
        function loadDomainUserIdCookie() {
            var e, t = new Date, i = Math.round(t.getTime() / 1e3), o = getCookieValue("id");
            return o ? (e = o.split("."),
            e.unshift("0")) : (domainUserId || (domainUserId = hash((SnowPlow.navigatorAlias.userAgent || "") + (SnowPlow.navigatorAlias.platform || "") + JSON2.stringify(browserFeatures) + i).slice(0, 16)),
            e = ["1", domainUserId, i, 0, i, ""]),
            e
        }
        function getTimestamp() {
            var e = new Date
              , t = e.getTime();
            return t
        }
        function getRequest(e, t) {
            var i, o, n, r, s, a, l, c, d = new Date, u = Math.round(d.getTime() / 1e3), p = getCookieName("id"), g = getCookieName("ses"), h = loadDomainUserIdCookie(), m = getCookieValue("ses"), f = configCustomUrl || locationHrefAlias;
            if (configDoNotTrack)
                return SnowPlow.setCookie(p, "", -1, configCookiePath, configCookieDomain),
                SnowPlow.setCookie(g, "", -1, configCookiePath, configCookieDomain),
                "";
            o = h[0],
            n = h[1],
            s = h[2],
            r = h[3],
            a = h[4],
            l = h[5],
            m || (r++,
            l = a),
            e.addRaw("dtm", getTimestamp()),
            e.addRaw("tid", String(Math.random()).slice(2, 8)),
            e.addRaw("vp", detectViewport()),
            e.addRaw("ds", detectDocumentSize()),
            e.addRaw("vid", r),
            e.addRaw("duid", n),
            e.add("p", configPlatform),
            e.add("tv", SnowPlow.version),
            e.add("fp", fingerprint),
            e.add("aid", configTrackerSiteId),
            e.add("lang", browserLanguage),
            e.add("cs", documentCharset),
            e.add("tz", timezone),
            e.add("uid", businessUserId),
            configReferrerUrl.length && e.add("refr", purify(configReferrerUrl));
            for (i in browserFeatures)
                Object.prototype.hasOwnProperty.call(browserFeatures, i) && (c = "res" === i || "cd" === i || "cookie" === i ? "" : "f_",
                e.addRaw(c + i, browserFeatures[i]));
            e.add("url", purify(f));
            var y = e.build()
              , v = location.protocol.startsWith("https");
            return setDomainUserIdCookie(n, s, r, u, l, v),
            SnowPlow.setCookie(g, "*", configSessionCookieTimeout, configCookiePath, configCookieDomain, v),
            y += SnowPlow.executePluginMethod(t)
        }
        function collectorUrlFromCfDist(e) {
            return asCollectorUrl(e + ".cloudfront.net")
        }
        function asCollectorUrl(e) {
            if (SnowPlow.isString(e))
                return ("https:" == SnowPlow.documentAlias.location.protocol ? "https" : "http") + "://" + e + "/i";
            if (SnowPlow.isArray(e)) {
                for (var t = [], i = 0; i < e.length; i++)
                    t.push(("https:" == SnowPlow.documentAlias.location.protocol ? "https" : "http") + "://" + e[i] + "/i");
                return t
            }
        }
        function requestStringBuilder(e) {
            var t = ""
              , i = function(e, i, o) {
                if (void 0 !== i && null !== i && "" !== i) {
                    var n = t.length > 0 ? "&" : "?";
                    t += n + e + "=" + (o ? SnowPlow.encodeWrapper(i) : i)
                }
            }
              , o = function(e) {
                var t = new RegExp("\\$(.[^\\$]+)$")
                  , i = t.exec(e);
                return i ? i[1] : void 0
            }
              , n = function(e, t) {
                switch (t) {
                case "tms":
                    return SnowPlow.toTimestamp(e, !0);
                case "ts":
                    return SnowPlow.toTimestamp(e, !1);
                case "dt":
                    return SnowPlow.toDatestamp(e);
                default:
                    return e
                }
            }
              , r = function() {
                function e(t) {
                    var i = {};
                    for (var r in t) {
                        var s = r
                          , a = t[r];
                        t.hasOwnProperty(s) && (SnowPlow.isDate(a) && (type = o(s),
                        type || (type = "tms",
                        s += "$" + type),
                        a = n(a, type)),
                        SnowPlow.isJson(a) && (a = e(a))),
                        i[s] = a
                    }
                    return i
                }
                return e
            }()
              , s = function(e, t) {
                i(e, t, !0)
            }
              , a = function(e, t) {
                i(e, t, !1)
            }
              , l = function(t, i, o) {
                if (SnowPlow.isNonEmptyJson(o)) {
                    var n = r(o)
                      , l = JSON2.stringify(n);
                    e ? a(t, SnowPlow.base64urlencode(l)) : s(i, l)
                }
            };
            return {
                add: s,
                addRaw: a,
                addJson: l,
                build: function() {
                    return t
                }
            }
        }
        function getContextWithPixelId(e) {
            var t = SnowPlow.getCookie(pixelCookieName)
              , i = {
                pixel_id: t
            };
            return e ? (e.pixel_id || (i = Object.assign(e, i)),
            i) : i
        }
        function logPageView(e, t, i, o, n, r, s, a) {
            var l = SnowPlow.fixupTitle(e || configTitle)
              , c = getContextWithPixelId(t)
              , d = requestStringBuilder(configEncodeBase64);
            d.add("e", "pv"),
            d.add("page", l),
            d.add("se_ca", i),
            d.add("se_ac", o),
            d.add("se_la", n),
            d.add("se_pr", r),
            d.add("se_psk", s),
            d.add("se_va", a),
            d.addJson("cx", "co", c);
            var u = getRequest(d, "pageView");
            sendRequest(u, configTrackerPause);
            var p = new Date;
            configMinimumVisitTime && configHeartBeatTimer && !activityTrackingInstalled && (activityTrackingInstalled = !0,
            resetMaxScrolls(),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "click", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "mouseup", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "mousedown", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "mousemove", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "mousewheel", activityHandler, supportsPassive() ? {
                passive: !0
            } : !1),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "DOMMouseScroll", activityHandler),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "scroll", scrollHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "keypress", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "keydown", activityHandler),
            SnowPlow.addEventListener(SnowPlow.documentAlias, "keyup", activityHandler),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "resize", activityHandler),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "focus", activityHandler),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "blur", activityHandler),
            lastActivityTime = p.getTime(),
            setInterval(function() {
                var e = new Date;
                lastActivityTime + configHeartBeatTimer > e.getTime() && configMinimumVisitTime < e.getTime() && logPagePing(l, c, i, o, n, r, s, a)
            }, configHeartBeatTimer))
        }
        function logPagePing(e, t, i, o, n, r, s, a) {
            var l = getContextWithPixelId(t)
              , c = requestStringBuilder(configEncodeBase64);
            c.add("e", "pp"),
            c.add("page", e),
            c.add("se_ca", i),
            c.add("se_ac", o),
            c.add("se_la", n),
            c.add("se_pr", r),
            c.add("se_psk", s),
            c.add("se_va", a),
            c.addRaw("pp_mix", parseInt(minXOffset)),
            c.addRaw("pp_max", parseInt(maxXOffset)),
            c.addRaw("pp_miy", parseInt(minYOffset)),
            c.addRaw("pp_may", parseInt(maxYOffset)),
            c.addJson("cx", "co", l),
            resetMaxScrolls();
            var d = getRequest(c, "pagePing");
            sendRequest(d, configTrackerPause)
        }
        function logStructEvent(e, t, i, o, n, r, s, a) {
            var l = getContextWithPixelId(s)
              , c = requestStringBuilder(configEncodeBase64);
            c.add("e", "se"),
            c.add("se_ca", e),
            c.add("se_ac", t),
            c.add("se_la", i),
            c.add("se_pr", o),
            c.add("se_psk", n),
            c.add("se_va", r),
            c.add("se_tg", a),
            c.addJson("cx", "co", l);
            var d = getRequest(c, "structEvent");
            sendRequest(d, configTrackerPause)
        }
        function logUnstructEvent(e, t, i) {
            var o = getContextWithPixelId(i)
              , n = requestStringBuilder(configEncodeBase64);
            n.add("e", "ue"),
            n.add("ue_na", e),
            n.addJson("ue_px", "ue_pr", t),
            n.addJson("cx", "co", o);
            var r = getRequest(n, "unstructEvent");
            sendRequest(r, configTrackerPause)
        }
        function logTransaction(e, t, i, o, n, r, s, a, l, c) {
            var d = getContextWithPixelId(c)
              , u = requestStringBuilder(configEncodeBase64);
            u.add("e", "tr"),
            u.add("tr_id", e),
            u.add("tr_af", t),
            u.add("tr_tt", i),
            u.add("tr_tx", o),
            u.add("tr_sh", n),
            u.add("tr_ci", r),
            u.add("tr_st", s),
            u.add("tr_co", a),
            u.add("tr_cu", l),
            u.addJson("cx", "co", d);
            var p = getRequest(u, "transaction");
            sendRequest(p, configTrackerPause)
        }
        function logTransactionItem(e, t, i, o, n, r, s, a) {
            var l = getContextWithPixelId(a)
              , c = requestStringBuilder(configEncodeBase64);
            c.add("e", "ti"),
            c.add("ti_id", e),
            c.add("ti_sk", t),
            c.add("ti_na", i),
            c.add("ti_ca", o),
            c.add("ti_pr", n),
            c.add("ti_qu", r),
            c.add("ti_cu", s),
            c.addJson("cx", "co", l);
            var d = getRequest(c, "transactionItem");
            sendRequest(d, configTrackerPause)
        }
        function logLink(e, t, i) {
            var o = getContextWithPixelId(i)
              , n = requestStringBuilder(configEncodeBase64);
            n.add("e", t),
            n.add("t_url", purify(e)),
            n.addJson("cx", "co", o);
            var r = getRequest(n, "link");
            sendRequest(r, configTrackerPause)
        }
        function logImpression(e, t, i, o, n) {
            var r = getContextWithPixelId(n)
              , s = requestStringBuilder(configEncodeBase64);
            s.add("e", "ad"),
            s.add("ad_ba", e),
            s.add("ad_ca", t),
            s.add("ad_ad", i),
            s.add("ad_uid", o),
            s.addJson("cx", "co", r);
            var a = getRequest(s, "impression");
            sendRequest(a, configTrackerPause)
        }
        function logConversionEvent(e, t, i, o) {
            var n = getContextWithPixelId()
              , r = requestStringBuilder(configEncodeBase64);
            r.add("e", "tr"),
            r.add("se_va", e),
            r.add("tr_id", t),
            r.add("tr_tt", i),
            r.add("tr_cu", o),
            r.addJson("cx", "co", n);
            var s = getRequest(r, "conversion_tracking");
            sendRequest(s, configTrackerPause)
        }
        function prefixPropertyName(e, t) {
            return "" !== e ? e + t.charAt(0).toUpperCase() + t.slice(1) : t
        }
        function trackCallback(e) {
            var t, i, o, n = ["", "webkit", "ms", "moz"];
            if (!configCountPreRendered)
                for (i = 0; i < n.length; i++)
                    if (o = n[i],
                    Object.prototype.hasOwnProperty.call(SnowPlow.documentAlias, prefixPropertyName(o, "hidden"))) {
                        "prerender" === SnowPlow.documentAlias[prefixPropertyName(o, "visibilityState")] && (t = !0);
                        break
                    }
            return t ? void SnowPlow.addEventListener(SnowPlow.documentAlias, o + "visibilitychange", function r() {
                SnowPlow.documentAlias.removeEventListener(o + "visibilitychange", r, !1),
                e()
            }) : void e()
        }
        function getClassesRegExp(e, t) {
            var i, o = "(^| )(piwik[_-]" + t;
            if (e)
                for (i = 0; i < e.length; i++)
                    o += "|" + e[i];
            return o += ")( |$)",
            new RegExp(o)
        }
        function getLinkType(e, t, i) {
            if (!i)
                return "lnk";
            var o = getClassesRegExp(configDownloadClasses, "download")
              , n = getClassesRegExp(configLinkClasses, "link")
              , r = new RegExp("\\.(" + configDownloadExtensions + ")([?&#]|$)","i");
            return n.test(e) ? "lnk" : o.test(e) || r.test(t) ? "dl" : 0
        }
        function processClick(e) {
            for (var t, i, o; null !== (t = e.parentNode) && SnowPlow.isDefined(t) && "A" !== (i = e.tagName.toUpperCase()) && "AREA" !== i; )
                e = t;
            if (SnowPlow.isDefined(e.href)) {
                var n = e.hostname || SnowPlow.getHostName(e.href)
                  , r = n.toLowerCase()
                  , s = e.href.replace(n, r)
                  , a = new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript|mailto):","i");
                a.test(s) || (o = getLinkType(e.className, s, isSiteHostName(r)),
                o && (s = SnowPlow.decodeUrl(s),
                logLink(s, o)))
            }
        }
        function clickHandler(e) {
            var t, i;
            e = e || SnowPlow.windowAlias.event,
            t = e.which || e.button,
            i = e.target || e.srcElement,
            "click" === e.type ? i && processClick(i) : "mousedown" === e.type ? 1 !== t && 2 !== t || !i ? lastButton = lastTarget = null : (lastButton = t,
            lastTarget = i) : "mouseup" === e.type && (t === lastButton && i === lastTarget && processClick(i),
            lastButton = lastTarget = null)
        }
        function addClickListener(e, t) {
            t ? (SnowPlow.addEventListener(e, "mouseup", clickHandler, !1),
            SnowPlow.addEventListener(e, "mousedown", clickHandler, !1)) : SnowPlow.addEventListener(e, "click", clickHandler, !1)
        }
        function addClickListeners(e) {
            if (!linkTrackingInstalled) {
                linkTrackingInstalled = !0;
                var t, i = getClassesRegExp(configIgnoreClasses, "ignore"), o = SnowPlow.documentAlias.links;
                if (o)
                    for (t = 0; t < o.length; t++)
                        i.test(o[t].className) || addClickListener(o[t], e)
            }
        }
        function generateFingerprint() {
            var e = [navigator.userAgent, [screen.height, screen.width, screen.colorDepth].join("x"), (new Date).getTimezoneOffset(), SnowPlow.hasSessionStorage(), SnowPlow.hasLocalStorage()]
              , t = [];
            if (navigator.plugins)
                for (var i = 0; i < navigator.plugins.length; i++) {
                    for (var o = [], n = 0; n < navigator.plugins[i].length; n++)
                        o.push([navigator.plugins[i][n].type, navigator.plugins[i][n].suffixes]);
                    t.push([navigator.plugins[i].name + "::" + navigator.plugins[i].description, o.join("~")])
                }
            return SnowPlow.murmurhash3_32_gc(e.join("###") + "###" + t.sort().join(";"), 123412414)
        }
        function detectTimezone() {
            var e = jstz.determine();
            return "undefined" == typeof e ? "" : e.name()
        }
        function detectViewport() {
            var e = SnowPlow.windowAlias
              , t = "inner";
            return "innerWidth"in SnowPlow.windowAlias || (t = "client",
            e = SnowPlow.documentAlias.documentElement || SnowPlow.documentAlias.body),
            e[t + "Width"] + "x" + e[t + "Height"]
        }
        function detectDocumentSize() {
            var e = SnowPlow.documentAlias.documentElement
              , t = Math.max(e.clientWidth, e.offsetWidth, e.scrollWidth)
              , i = Math.max(e.clientHeight, e.offsetHeight, e.scrollHeight);
            return t + "x" + i
        }
        function supportsPassive() {
            try {
                var e = Object.defineProperty({}, "passive", {
                    get: function() {
                        supportsPassive = !0
                    }
                });
                window.addEventListener("test", null, e),
                window.removeEventListener("test", null, e)
            } catch (t) {}
            return supportsPassive
        }
        function detectBrowserFeatures() {
            var e, t, i = {
                pdf: "application/pdf",
                qt: "video/quicktime",
                realp: "audio/x-pn-realaudio-plugin",
                wma: "application/x-mplayer2",
                dir: "application/x-director",
                fla: "application/x-shockwave-flash",
                java: "application/x-java-vm",
                gears: "application/x-googlegears",
                ag: "application/x-silverlight"
            }, o = {};
            if (SnowPlow.navigatorAlias.mimeTypes && SnowPlow.navigatorAlias.mimeTypes.length)
                for (e in i)
                    Object.prototype.hasOwnProperty.call(i, e) && (t = SnowPlow.navigatorAlias.mimeTypes[i[e]],
                    o[e] = t && t.enabledPlugin ? "1" : "0");
            return "unknown" != typeof navigator.javaEnabled && SnowPlow.isDefined(SnowPlow.navigatorAlias.javaEnabled) && SnowPlow.navigatorAlias.javaEnabled() && (o.java = "1"),
            SnowPlow.isFunction(SnowPlow.windowAlias.GearsFactory) && (o.gears = "1"),
            o.res = SnowPlow.screenAlias.width + "x" + SnowPlow.screenAlias.height,
            o.cd = screen.colorDepth,
            o.cookie = hasCookies(),
            o
        }
        function registerHook(hookName, userHook) {
            var hookObj = null;
            if (SnowPlow.isString(hookName) && !SnowPlow.isDefined(registeredHooks[hookName]) && userHook) {
                if (SnowPlow.isObject(userHook))
                    hookObj = userHook;
                else if (SnowPlow.isString(userHook))
                    try {
                        eval("hookObj =" + userHook)
                    } catch (e) {}
                registeredHooks[hookName] = hookObj
            }
            return hookObj
        }
        var registeredHooks = {}, locationArray = SnowPlow.fixupUrl(SnowPlow.documentAlias.domain, SnowPlow.windowAlias.location.href, SnowPlow.getReferrer()), domainAlias = SnowPlow.fixupDomain(locationArray[0]), locationHrefAlias = locationArray[1], configReferrerUrl = locationArray[2], configRequestMethod = "GET", configPlatform = "web", configCollectorUrl = constructCollectorUrl(argmap), configTrackerSiteId = "", configCustomUrl, configTitle = SnowPlow.documentAlias.title, configDownloadExtensions = "7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|ppt|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xls|xml|z|zip", configHostsAlias = [domainAlias], configIgnoreClasses = [], configDownloadClasses = [], configLinkClasses = [], configTrackerPause = 500, configMinimumVisitTime, configHeartBeatTimer, configDiscardHashTag, configCookieNamePrefix = "_sp_", configCookieDomain, configCookiePath, configDoNotTrack, configCountPreRendered, configVisitorCookieTimeout = 63072e6, configSessionCookieTimeout = 18e5, configReferralCookieTimeout = 15768e6, configEncodeBase64 = !0, documentCharset = SnowPlow.documentAlias.characterSet || SnowPlow.documentAlias.charset, browserLanguage = SnowPlow.navigatorAlias.userLanguage || SnowPlow.navigatorAlias.language, browserFeatures = detectBrowserFeatures(), timezone = detectTimezone(), fingerprint = generateFingerprint(), linkTrackingInstalled = !1, activityTrackingInstalled = !1, lastActivityTime, minXOffset, maxXOffset, minYOffset, maxYOffset, lastButton, lastTarget, hash = SnowPlow.sha1, domainHash, domainUserId, businessUserId, pixelCookieName, configPixelCookieTimeout, ecommerceTransaction = ecommerceTransactionTemplate();
        return updateDomainHash(),
        SnowPlow.executePluginMethod("run", registerHook),
        {
            hook: registeredHooks,
            getHook: function(e) {
                return registeredHooks[e]
            },
            getUserId: function() {
                return businessUserId
            },
            getDomainUserId: function() {
                return loadDomainUserIdCookie()[1]
            },
            getDomainUserInfo: function() {
                return loadDomainUserIdCookie()
            },
            getVisitorId: function() {
                return "undefined" != typeof console && console.log("SnowPlow: getVisitorId() is deprecated and will be removed in an upcoming version. Please use getDomainUserId() instead."),
                loadVisitorIdCookie()[1]
            },
            getVisitorInfo: function() {
                return "undefined" != typeof console && console.log("SnowPlow: getVisitorInfo() is deprecated and will be removed in an upcoming version. Please use getDomainUserInfo() instead."),
                loadVisitorIdCookie()
            },
            setSiteId: function(e) {
                "undefined" != typeof console && console.log("SnowPlow: setSiteId() is deprecated and will be removed in an upcoming version. Please use setAppId() instead."),
                configTrackerSiteId = e
            },
            setAppId: function(e) {
                configTrackerSiteId = e
            },
            setLinkTrackingTimer: function(e) {
                configTrackerPause = e
            },
            setDownloadExtensions: function(e) {
                configDownloadExtensions = e
            },
            addDownloadExtensions: function(e) {
                configDownloadExtensions += "|" + e
            },
            setDomains: function(e) {
                configHostsAlias = SnowPlow.isString(e) ? [e] : e,
                configHostsAlias.push(domainAlias)
            },
            setIgnoreClasses: function(e) {
                configIgnoreClasses = SnowPlow.isString(e) ? [e] : e
            },
            setReferrerUrl: function(e) {
                configReferrerUrl = e
            },
            setCustomUrl: function(e) {
                configCustomUrl = resolveRelativeReference(locationHrefAlias, e)
            },
            setDocumentTitle: function(e) {
                configTitle = e
            },
            setDownloadClasses: function(e) {
                configDownloadClasses = SnowPlow.isString(e) ? [e] : e
            },
            setLinkClasses: function(e) {
                configLinkClasses = SnowPlow.isString(e) ? [e] : e
            },
            discardHashTag: function(e) {
                configDiscardHashTag = e
            },
            setCookieNamePrefix: function(e) {
                configCookieNamePrefix = e
            },
            setCookieDomain: function(e) {
                configCookieDomain = SnowPlow.fixupDomain(e),
                updateDomainHash()
            },
            setCookiePath: function(e) {
                configCookiePath = e,
                updateDomainHash()
            },
            setPixelCookieName: function(e) {
                pixelCookieName = e
            },
            setConfigPixelCookieTimeout: function(e) {
                configPixelCookieTimeout = e
            },
            setPixelCookie: function(e) {
                SnowPlow.setCookie(pixelCookieName, e, configPixelCookieTimeout, configCookiePath)
            },
            setVisitorCookieTimeout: function(e) {
                configVisitorCookieTimeout = 1e3 * e
            },
            setSessionCookieTimeout: function(e) {
                configSessionCookieTimeout = 1e3 * e
            },
            setReferralCookieTimeout: function(e) {
                configReferralCookieTimeout = 1e3 * e
            },
            setDoNotTrack: function(e) {
                var t = SnowPlow.navigatorAlias.doNotTrack || SnowPlow.navigatorAlias.msDoNotTrack;
                configDoNotTrack = e && ("yes" === t || "1" === t)
            },
            addListener: function(e, t) {
                addClickListener(e, t)
            },
            enableLinkTracking: function(e) {
                SnowPlow.hasLoaded ? addClickListeners(e) : SnowPlow.registeredOnLoadHandlers.push(function() {
                    addClickListeners(e)
                })
            },
            enableActivityTracking: function(e, t) {
                var i = new Date;
                configMinimumVisitTime = i.getTime() + 1e3 * e,
                configHeartBeatTimer = 1e3 * t
            },
            killFrame: function() {
                SnowPlow.windowAlias.location !== SnowPlow.windowAlias.top.location && (SnowPlow.windowAlias.top.location = SnowPlow.windowAlias.location)
            },
            redirectFile: function(e) {
                "file:" === SnowPlow.windowAlias.location.protocol && (SnowPlow.windowAlias.location = e)
            },
            setCountPreRendered: function(e) {
                configCountPreRendered = e
            },
            setUserId: function(e) {
                businessUserId = e
            },
            attachUserId: function() {
                "undefined" != typeof console && console.log("SnowPlow: attachUserId() is deprecated and will be removed in an upcoming version. It no longer does anything (because nuid and duid have been separated out).")
            },
            setCollectorCf: function(e) {
                configCollectorUrl = collectorUrlFromCfDist(e)
            },
            setCollectorUrl: function(e) {
                configCollectorUrl = asCollectorUrl(e)
            },
            setPlatform: function(e) {
                configPlatform = e
            },
            encodeBase64: function(e) {
                configEncodeBase64 = e
            },
            trackPageView: function(e, t, i, o, n, r, s, a) {
                trackCallback(function() {
                    logPageView(e, t, i, o, n, r, s, a)
                })
            },
            trackEvent: function(e, t, i, o, n, r) {
                "undefined" != typeof console && console.log("SnowPlow: trackEvent() is deprecated and will be removed in an upcoming version. Please use trackStructEvent() instead."),
                logStructEvent(e, t, i, o, n, r)
            },
            trackStructEvent: function(e, t, i, o, n, r, s, a) {
                logStructEvent(e, t, i, o, n, r, s, a)
            },
            trackUnstructEvent: function(e, t, i) {
                logUnstructEvent(e, t, i)
            },
            addTrans: function(e, t, i, o, n, r, s, a, l, c) {
                ecommerceTransaction.transaction = {
                    orderId: e,
                    affiliation: t,
                    total: i,
                    tax: o,
                    shipping: n,
                    city: r,
                    state: s,
                    country: a,
                    currency: l,
                    context: c
                }
            },
            addItem: function(e, t, i, o, n, r, s, a) {
                ecommerceTransaction.items.push({
                    orderId: e,
                    sku: t,
                    name: i,
                    category: o,
                    price: n,
                    quantity: r,
                    currency: s,
                    context: a
                })
            },
            trackTrans: function() {
                logTransaction(ecommerceTransaction.transaction.orderId, ecommerceTransaction.transaction.affiliation, ecommerceTransaction.transaction.total, ecommerceTransaction.transaction.tax, ecommerceTransaction.transaction.shipping, ecommerceTransaction.transaction.city, ecommerceTransaction.transaction.state, ecommerceTransaction.transaction.country, ecommerceTransaction.transaction.currency, ecommerceTransaction.transaction.context);
                for (var e = 0; e < ecommerceTransaction.items.length; e++) {
                    var t = ecommerceTransaction.items[e];
                    logTransactionItem(t.orderId, t.sku, t.name, t.category, t.price, t.quantity, t.currency, t.context)
                }
                ecommerceTransaction = ecommerceTransactionTemplate()
            },
            trackConversion: function(e, t, i, o) {
                logConversionEvent(e, t, i, o)
            },
            trackLink: function(e, t, i) {
                trackCallback(function() {
                    logLink(e, t, i)
                })
            },
            trackImpression: function(e, t, i, o, n) {
                logImpression(e, t, i, o, n)
            }
        }
    }
    ,
    SnowPlow.build = function() {
        "use strict";
        function e() {
            var e, t, i;
            for (e = 0; e < arguments.length; e += 1)
                i = arguments[e],
                t = i.shift(),
                SnowPlow.isString(t) ? SnowPlow.asyncTracker[t].apply(SnowPlow.asyncTracker, i) : t.apply(SnowPlow.asyncTracker, i)
        }
        function t() {
            var e;
            if (SnowPlow.executePluginMethod("unload"),
            SnowPlow.expireDateTime)
                do
                    e = new Date;
                while (e.getTimeAlias() < SnowPlow.expireDateTime)
        }
        function i() {
            var e;
            if (!SnowPlow.hasLoaded)
                for (SnowPlow.hasLoaded = !0,
                SnowPlow.executePluginMethod("load"),
                e = 0; e < SnowPlow.registeredOnLoadHandlers.length; e++)
                    SnowPlow.registeredOnLoadHandlers[e]();
            return !0
        }
        function o() {
            var e;
            SnowPlow.documentAlias.addEventListener ? SnowPlow.addEventListener(SnowPlow.documentAlias, "DOMContentLoaded", function t() {
                SnowPlow.documentAlias.removeEventListener("DOMContentLoaded", t, !1),
                i()
            }) : SnowPlow.documentAlias.attachEvent && (SnowPlow.documentAlias.attachEvent("onreadystatechange", function o() {
                "complete" === SnowPlow.documentAlias.readyState && (SnowPlow.documentAlias.detachEvent("onreadystatechange", o),
                i())
            }),
            SnowPlow.documentAlias.documentElement.doScroll && SnowPlow.windowAlias === SnowPlow.windowAlias.top && !function n() {
                if (!SnowPlow.hasLoaded) {
                    try {
                        SnowPlow.documentAlias.documentElement.doScroll("left")
                    } catch (e) {
                        return void setTimeout(n, 0)
                    }
                    i()
                }
            }()),
            new RegExp("WebKit").test(SnowPlow.navigatorAlias.userAgent) && (e = setInterval(function() {
                (SnowPlow.hasLoaded || /loaded|complete/.test(SnowPlow.documentAlias.readyState)) && (clearInterval(e),
                i())
            }, 10)),
            SnowPlow.addEventListener(SnowPlow.windowAlias, "load", i, !1)
        }
        function n() {
            return {
                push: e
            }
        }
        SnowPlow.addEventListener(SnowPlow.windowAlias, "beforeunload", t, !1),
        o(),
        Date.prototype.getTimeAlias = Date.prototype.getTime,
        SnowPlow.asyncTracker = new SnowPlow.Tracker;
        for (var r = 0; r < _yaq.length; r++)
            e(_yaq[r]);
        return _yaq = new n,
        {
            addPlugin: function(e, t) {
                SnowPlow.plugins[e] = t
            },
            getTrackerCf: function(e) {
                return new SnowPlow.Tracker({
                    cf: e
                })
            },
            getTrackerUrl: function(e) {
                return new SnowPlow.Tracker({
                    url: e
                })
            },
            getAsyncTracker: function() {
                return SnowPlow.asyncTracker
            }
        }
    }
    ,
    !function() {
        var e = SnowPlow.build();
        for (var t in e)
            e.hasOwnProperty(t) && void 0 === SnowPlow[t] && (SnowPlow[t] = e[t])
    }();
    var yotpo_analytics_version = "onsite_v2"
      , PIXEL_COOKIE_KEY = "yotpo_pixel"
      , COOKIE_MAX_AGE = 31536e3;
    return Yotpo.getCookie = function(e) {
        return Yotpo.shouldPreventCookies ? null : SnowPlow.getCookie(e)
    }
    ,
    Yotpo.setCookie = function(e, t, i, o, n, r) {
        Yotpo.shouldPreventCookies || SnowPlow.setCookie(e, t, i, o, n, r)
    }
    ,
    Yotpo.allowCookies = function() {
        yotpo.allowCookies()
    }
    ,
    Analytics.prototype.trackEvent = function(e, t, i, o, n) {
        if (!Yotpo.shouldPreventCookies) {
            1 == this._firstEvent && (this.trackPageView(this),
            this._firstEvent = !1);
            var r = Yotpo.testingGroupsHandler.getTestingGroupsForAnalytics();
            void 0 != r && (n = Object.assign({
                testing_group_user_allocation: Yotpo.testingGroupsHandler.getUserAllocation()
            }, n)),
            n = Object.assign({
                pv_uuid: this.getPageUniqueIdPerView()
            }, n),
            trackYotpoEvent.apply(this, [e, t, i, o, this.pageSku, this._controller.getAppKey(), r, n])
        }
    }
    ,
    Analytics.prototype.trackUniqueEvent = function(e, t, i, o, n) {
        if (!Yotpo.shouldPreventCookies) {
            var r = e + t + (o || "") + (JSON.stringify(n) || "");
            this.trackedObjects[r] || (this.trackEvent(e, t, i, o, n),
            this.trackedObjects[r] = !0)
        }
    }
    ,
    Analytics.prototype.trackReview = function(e, t, i, o) {
        var n = e.getAttribute("data-review-id");
        isTemplateReview(n) || this.trackUniqueEvent(t, i, "review", n, o)
    }
    ,
    Analytics.prototype.trackReviews = function(e, t, i, o) {
        o = Object.assign({
            review_id: e,
            count_reviews: e.length
        }, o),
        this.trackUniqueEvent(t, i, "review", null, o)
    }
    ,
    Analytics.prototype.getPageUniqueIdPerView = function() {
        return void 0 == this._pv_uuid && (this._pv_uuid = Math.floor(1e9 * Math.random())),
        this._pv_uuid
    }
    ,
    Analytics.prototype.trackPageView = function() {
        Yotpo.shouldPreventCookies || _yaq.push(["trackPageView", null, {
            pv_uuid: this.getPageUniqueIdPerView()
        }, null, null, null, null, this.pageSku, this._controller.getAppKey()])
    }
    ,
    Analytics.prototype.trackConversion = function(e, t, i, o) {
        Yotpo.shouldPreventCookies || _yaq.push(["trackConversion", e, t, i, o])
    }
    ,
    Analytics.prototype.getYaq = function() {
        return _yaq
    }
    ,
    Analytics.prototype.getDomainUserId = function() {
        return SnowPlow.asyncTracker.getDomainUserId()
    }
    ,
    Analytics.prototype.init = function() {
        initYotpoAnalyticsLib.call(this)
    }
    ,
    Analytics
}(Yotpo),
Yotpo.Inview = function(e) {
    function t(e) {
        var t = e || {};
        t.offset = t.offset || 0,
        this.options = t,
        this.verifyInviewT = s.apply(this, [this.verifyInview, 25]),
        this.saveWinOffsetT = s.apply(this, [this.saveWinOffset, 50]),
        this.objects = [],
        this.winHeight = 0,
        this.winWidth = 0,
        this.modalObjCounter = 0,
        this.saveWinOffset(),
        this.allWidgetsAreReady = !1,
        this.registerAllWidgetsReady(e)
    }
    function i(t) {
        return !(e.isHidden(t) || e.isHidden(t.parentElement) || e.hasClass(t, "yotpo-hidden") || e.hasClass(t, "yotpo-ignore-inview"))
    }
    function o(e, t) {
        var i = n(e)
          , o = 0
          , s = this.winHeight + this.options.offset;
        if (t) {
            var a = r(e)
              , l = n(a);
            o = l.top,
            s = l.bottom,
            0 > o && 0 > s && (o += window.scrollY,
            s += window.scrollY)
        }
        return i.left >= 0 && i.right <= this.winWidth + this.options.offset && (i.top >= o && i.top <= s || i.bottom <= s && i.bottom >= o - this.options.offset)
    }
    function n(t) {
        return e.isIEFamily && null == t.parentElement || t === document ? {
            height: 0,
            width: 0,
            left: 0,
            right: 0,
            top: 0,
            bottom: 0
        } : t.getBoundingClientRect()
    }
    function r(e) {
        var t = getComputedStyle(e)
          , i = "absolute" === t.position
          , o = /(auto|scroll)/;
        if ("fixed" === t.position)
            return document.body;
        var n = null;
        for (n = e; n = n.parentElement; )
            if (t = getComputedStyle(n),
            (!i || "static" !== t.position) && o.test(t.overflow + t.overflowY))
                return n;
        return document
    }
    function s(e, t) {
        var i = 0
          , o = this;
        return function() {
            var n = +new Date;
            t > n - i || (i = n,
            e.call(o))
        }
    }
    return t.prototype.registerAllWidgetsReady = function(e) {
        var t = this;
        e.onAllWidgetsReady(function() {
            t.allWidgetsAreReady = !0,
            t.verifyInviewT()
        })
    }
    ,
    t.prototype.register = function(e, t) {
        this.objects.push({
            element: e,
            callback: t,
            modalCalc: !1
        }),
        1 == this.objects.length && this.bindEvents(),
        this.verifyInviewT()
    }
    ,
    t.prototype.registerinModal = function(e, t) {
        if (null !== e) {
            var i = r(e).parentNode;
            this.objects.push({
                element: e,
                callback: t,
                modalCalc: i
            }),
            1 == this.objects.length && this.bindEvents(),
            i && (this.modalObjCounter++,
            1 == this.modalObjCounter && this.bindEvents(e)),
            this.verifyInviewT()
        }
    }
    ,
    t.prototype.bindEvents = function(t) {
        var i = void 0 === t ? window : r(t);
        e.addEventListener(i, "scroll", this.verifyInviewT),
        e.addEventListener(i, "resize", this.verifyInviewT),
        e.addEventListener(i, "resize", this.saveWinOffsetT),
        e.addEventListener(i, "pageshow", this.verifyInviewT)
    }
    ,
    t.prototype.unbindEvents = function(t) {
        var i = void 0 === t ? window : r(t);
        e.removeEventListener(i, "scroll", this.verifyInviewT),
        e.removeEventListener(i, "resize", this.verifyInviewT),
        e.removeEventListener(i, "resize", this.saveWinOffsetT),
        e.removeEventListener(i, "pageshow", this.verifyInviewT)
    }
    ,
    t.prototype.verifyInview = function() {
        if (this.allWidgetsAreReady)
            for (var e, t = this.objects.length - 1; e = this.objects[t]; t--)
                o.apply(this, [e.element, e.modalCalc]) && i.apply(this, [e.element]) && (e.callback.apply(),
                this.objects.splice(t, 1),
                e.modalCalc && this.modalObjCounter--,
                0 == this.modalObjCounter && this.unbindEvents(e.element),
                0 == this.objects.length && this.unbindEvents())
    }
    ,
    t.prototype.saveWinOffset = function() {
        this.winHeight = window.innerHeight || document.documentElement.clientHeight,
        this.winWidth = window.innerWidth || document.documentElement.clientWidth
    }
    ,
    t
}(Yotpo),
document.getElementsByClassName || (document.getElementsByClassName = function(e) {
    return this.querySelectorAll("." + e)
}
,
Element.prototype.getElementsByClassName = document.getElementsByClassName),
"function" != typeof String.prototype.trim && (String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g, "")
}
),
Object.keys || (Object.keys = function() {
    "use strict";
    var e = Object.prototype.hasOwnProperty
      , t = !{
        toString: null
    }.propertyIsEnumerable("toString")
      , i = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"]
      , o = i.length;
    return function(n) {
        if ("object" != typeof n && ("function" != typeof n || null === n))
            throw new TypeError("Object.keys called on non-object");
        var r, s, a = [];
        for (r in n)
            e.call(n, r) && a.push(r);
        if (t)
            for (s = 0; o > s; s++)
                e.call(n, i[s]) && a.push(i[s]);
        return a
    }
}()),
String.prototype.includes || (String.prototype.includes = function(e, t) {
    return "number" != typeof t && (t = 0),
    t + e.length > this.length ? !1 : -1 !== this.indexOf(e, t)
}
),
"function" != typeof Object.assign && Object.defineProperty(Object, "assign", {
    value: function(e) {
        "use strict";
        if (null == e)
            throw new TypeError("Cannot convert undefined or null to object");
        for (var t = Object(e), i = 1; i < arguments.length; i++) {
            var o = arguments[i];
            if (null != o)
                for (var n in o)
                    Object.prototype.hasOwnProperty.call(o, n) && (t[n] = o[n])
        }
        return t
    },
    writable: !0,
    configurable: !0
}),
String.prototype.startsWith || (String.prototype.startsWith = function(e, t) {
    return t = t || 0,
    this.indexOf(e, t) === t
}
),
window.NodeList && !NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach),
Yotpo.API = function(e) {
    function t(e) {
        this.instance = e
    }
    return t.prototype.changeProductID = function(t, i) {
        var o = !1;
        e.forEach(this.instance.getWidgets(), function(e) {
            e.settings.pid == t && (e.settings.pid = i,
            o = !0)
        }),
        o && this.instance.updateContent()
    }
    ,
    t.prototype.refreshWidgets = function() {
        this.instance.refreshWidgets()
    }
    ,
    t.prototype.openForm = function(t, i) {
        var o = function() {
            if (i = i || 1300,
            !t)
                throw "openForm must be passed a type(such as review|question)";
            var o = this.getWidgetByName("Main");
            if (!o || !o.get("element").getElementsByClassName("write-" + t + "-button"))
                throw "openForm must be called on a page with a main widget";
            o.get("element").getElementsByClassName("write-" + t + "-button")[0].click();
            for (var n = o.get("forms")[t + "s"].getElement().getBoundingClientRect().top, r = [document.body, document.documentElement], s = 0; s < r.length; ++s) {
                var a = r[s]
                  , l = a.scrollTop;
                if (e.scrollTo(a, n + l, i, !0),
                l !== a.scrollTop)
                    break
            }
        };
        "ready" == this.instance.getState() ? o.call(this.instance) : this.instance.on("ready", o)
    }
    ,
    t.prototype.setFormOpenCallback = function(t) {
        var i = function() {
            e.forEach(this.getWidgetsByNames(["Testimonials", "Main"]), function(e) {
                e.writeContentCallback = t;
                var i = e.forms || {};
                for (var o in i) {
                    var n = o.substr(0, o.length - 1)
                      , r = e.element.getElementsByClassName("write-" + n + "-button");
                    if (r.length > 0)
                        for (var s = 0; s < r.length; s++)
                            r[s].open = function() {
                                this.click()
                            }
                }
            })
        };
        "ready" == this.instance.getState() && i.call(this.instance),
        this.instance.on("ready", i)
    }
    ,
    t.prototype.trackConversion = function(t, i, o) {
        if (!e.shouldPreventCookies) {
            var n = {
                orderId: t,
                orderAmount: i,
                orderCurrency: o
            };
            e.Libraries.Tracker.trackConversionOrder(this.instance.appKey, n)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.ShareLink = function(e) {
    function t(e, t) {
        if (!i(e))
            throw "Type is not valid";
        this.type = e,
        o.call(this, t)
    }
    function i(t) {
        return l && (c = {
            facebook: {
                url: a("facebook", "feed_link"),
                options: function(t) {
                    var i = {
                        app_key: t.appkey,
                        sku: t.sku,
                        user_email: t.email
                    }
                      , o = {
                        app_id: a("facebook", "application_id"),
                        display: "popup",
                        link: t.social_link,
                        redirect_uri: "http://" + e.hosts.b2b.dynamic + "/shares?" + e.convertHashToQueryStringParams(i)
                    };
                    return o
                }
            },
            twitter: {
                url: a("twitter", "intent_link"),
                options: function(e) {
                    return {
                        url: e.social_link,
                        text: e.review_content,
                        via: "yotpo"
                    }
                }
            },
            google: {
                url: a("google", "share_link"),
                options: function(e) {
                    return {
                        url: e.social_link
                    }
                }
            },
            linkedin: {
                url: a("linkedin", "share_link"),
                options: function(e) {
                    return {
                        mini: !0,
                        url: e.social_link,
                        title: e.review_title,
                        source: "Yotpo",
                        summary: e.review_content
                    }
                }
            }
        },
        l = !1),
        c[t]
    }
    function o(t) {
        t.social_link = d[this.type].call(this, t);
        var o = i(this.get("type"));
        this.link = o.url + "?" + e.convertHashToQueryStringParams(e.compact(o.options(t)))
    }
    function n(t) {
        var i = {
            image_url: decodeURIComponent(s(t.product_image_url)),
            product_url: s(t.product_url),
            review: t.review_content ? t.review_content.replace(e.emojiRegex, "") : "",
            social_title: t.review_title ? t.review_title.replace(e.emojiRegex, "") : ""
        };
        return "https://" + e.hosts.reviews_me.dynamic + "/facebook_post?" + e.convertHashToQueryStringParams(i)
    }
    function r(t) {
        var i = {
            reference_name: this.get("type") + "_social_share",
            url: s(t.product_url || document.location.href),
            app_key: t.appkey,
            redirect: !0
        };
        return "https://" + e.hosts.base.dynamic + "/go?" + e.convertHashToQueryStringParams(i)
    }
    function s(e) {
        return e && /^\/\//i.test(e) ? "http:" + e : e && !/^https?:\/\//i.test(e) ? "http://" + e : e
    }
    function a(t, i) {
        return e.socialData[t][i]
    }
    var l = !0
      , c = {}
      , d = {
        facebook: n,
        twitter: r,
        google: r,
        linkedin: r
    };
    return e.socialData = {
        facebook: {
            application_id: null,
            feed_link: "https://www.facebook.com/dialog/feed"
        },
        twitter: {
            intent_link: "https://twitter.com/intent/tweet"
        },
        google: {
            share_link: "https://plus.google.com/share"
        },
        linkedin: {
            share_link: "https://www.linkedin.com/shareArticle"
        }
    },
    t.prototype.get = function(e) {
        return this[e]
    }
    ,
    t
}(Yotpo),
Yotpo.CustomFields = function(e) {
    function t(t, i) {
        function o() {
            e.currentAnalytics.trackEvent(l, "clicked_on", "crf_free_text_expanded", i)
        }
        e.Modules.CollapsibleElement.bind(t, c, "yotpo-question-field-answer", o)
    }
    function i(e) {
        var t = e.getElementsByClassName("product-related-fields-footer");
        if (t.length) {
            var i = t[0]
              , n = i.getElementsByClassName("product-related-fields-see-more")[0];
            n.onclick = function() {
                o.call(self, e)
            }
            ;
            var r = i.getElementsByClassName("product-related-fields-see-less")[0];
            r.onclick = function() {
                a.call(self, e)
            }
        }
    }
    function o(t) {
        for (var i = t, o = i.getElementsByClassName("product-related-fields-column"), n = 0; n < o.length; n++)
            for (var r = o[n], s = r.querySelectorAll(".product-related-fields-item.yotpo-hidden"), a = 0; a < s.length; a++)
                e.show(s[a], "table-row");
        e.hide(i.getElementsByClassName("product-related-fields-see-more")[0]),
        e.show(i.getElementsByClassName("product-related-fields-see-less")[0], "block")
    }
    function n(t, i) {
        for (var o = 0; o < t.length; o++)
            for (var n = t[o], r = n.getElementsByClassName("product-related-fields-item"), s = i; s < r.length; s++)
                e.hide(r[s])
    }
    function r(e) {
        var t = e.getElementsByClassName("product-related-fields-desktop-layout")[0]
          , i = t.getElementsByClassName("product-related-fields-column");
        n(i, u)
    }
    function s(e) {
        var t = e.getElementsByClassName("product-related-fields-mobile-layout")[0]
          , i = t.getElementsByClassName("product-related-fields-column");
        n(i, p)
    }
    function a(t) {
        var i = t;
        r(i),
        s(i),
        e.hide(i.getElementsByClassName("product-related-fields-see-less")[0]),
        e.show(i.getElementsByClassName("product-related-fields-see-more")[0], "block")
    }
    var l = "reviews"
      , c = 349
      , d = {}
      , u = 1
      , p = 3;
    return d.bind = function(e, i) {
        for (var o = 0; o < e.length; o++) {
            var n = e[o];
            n.classList.contains("yotpo-question-field") && t(n, i)
        }
    }
    ,
    d.bindProductRelatedFields = function(e) {
        for (var t = 0; t < e.length; t++) {
            var o = e[t];
            i(o)
        }
    }
    ,
    d
}(Yotpo),
Yotpo.CustomFieldsForm = function(e) {
    function t(t) {
        e.addClass(t.querySelector(".yotpo-field-title"), "yotpo-custom-field-error")
    }
    function i(t) {
        var i = t.querySelector(".yotpo-custom-field-error");
        i && e.removeClass(i, "yotpo-custom-field-error")
    }
    function o(t) {
        var i = t.querySelector(".error-text");
        i && e.hide(i)
    }
    function n() {
        for (var t = {}, i = 0; i < this.element.length; i++) {
            var o = this.element[i];
            if (e.hasClass(o, "yotpo-mandatory-custom-field")) {
                var n = o.querySelector("input, textarea, select").name
                  , r = this.inputParams["custom_fields[" + n + "]"];
                (!r || r.constructor == Array && !r.length) && (t[n] = {
                    message: "FieldNotValid:" + r,
                    field: n,
                    type: "mandatory_field"
                })
            }
        }
        return t
    }
    function r() {
        for (var t = {}, i = 0; i < this.element.length; i++) {
            var o = this.element[i];
            if (e.hasClass(o, "yotpo-input-size-limited")) {
                var n = parseInt(o.getAttribute("data-min-length"))
                  , r = parseInt(o.getAttribute("data-max-length"))
                  , s = o.querySelector("input, textarea").name
                  , a = this.inputParams["custom_fields[" + s + "]"];
                a && a.length > 0 && (a.length > r || a.length < n) && (t[s] = {
                    message: "FieldNotValid:" + a,
                    field: s,
                    type: "open_question_answer_length"
                })
            }
        }
        return t
    }
    function s(e, t, i) {
        if ("checkbox" === i) {
            for (var o = [], n = e.querySelectorAll('input[name="' + t + '"]:checked'), r = 0; r < n.length; r++)
                o.push(n[r].value);
            return o
        }
        if ("textarea" === i) {
            var s = e.querySelector('textarea[name="' + t + '"]');
            return s.value
        }
        if ("select-one" === i) {
            var a = e.querySelector('select[name="' + t + '"]');
            return "__default_none" === a.value ? "" : a.value
        }
        var l = e.querySelector('input[name="' + t + '"]' + ("hidden" != i ? ":checked" : ""));
        return l ? l.value : ""
    }
    function a() {
        for (var e = 0; e < this.element.length; e++) {
            var t = this.element[e].getElementsByClassName("yotpo-open-text-field")[0];
            t && l.call(t)
        }
    }
    function l() {
        var e = this.getElementsByClassName("yotpo-text-box")[0]
          , t = parseInt(e.getAttribute("maxlength"))
          , i = this.getElementsByClassName("current-chars")[0];
        e.onkeyup = function() {
            var o = e.value.length;
            o > t && (e.value = e.value.substring(0, t),
            o = t),
            i.innerHTML = o
        }
    }
    var c = function(e) {
        this.element = e,
        this.inputParams = {},
        this.fieldElements = {},
        a.call(this)
    };
    return c.prototype.getFieldElement = function(e) {
        return this.fieldElements[e] ? this.fieldElements[e] : null
    }
    ,
    c.prototype.getValues = function() {
        this.inputParams = {};
        for (var t = 0; t < this.element.length; ++t) {
            var i = this.element[t];
            if (!e.isHidden(i) || e.hasClass(i, "yotpo-product-tag-param")) {
                var o = i.querySelector("input, textarea, select")
                  , n = o.name
                  , r = o.type
                  , a = s(i, n, r);
                this.fieldElements[n] = i,
                "product_tags" == n ? this.inputParams[n] = a : e.isEmptyString(a) || (this.inputParams["custom_fields[" + n + "]"] = a)
            }
        }
        return this.inputParams
    }
    ,
    c.prototype.reset = function() {
        for (var e = 0; e < this.element.length; ++e) {
            var t = this.element[e].querySelector("input, textarea, select")
              , i = t.type;
            if ("textarea" === i)
                t.value = "";
            else if ("select-one" === i)
                t.value = "__default_none";
            else
                for (var o = this.element[e].querySelectorAll('input[type="' + i + '"]:checked'), n = 0; n < o.length; ++n)
                    o[n].checked = !1
        }
    }
    ,
    c.prototype.cleanErrors = function() {
        for (var e = 0; e < this.element.length; ++e) {
            var t = this.element[e];
            i(t),
            o(t)
        }
    }
    ,
    c.prototype.validate = function() {
        var e = n.call(this)
          , t = r.call(this);
        return Object.assign({}, e, t)
    }
    ,
    c.prototype.showFieldError = function(i, o) {
        t(i);
        var n = i.getElementsByClassName(o)[0];
        n && e.show(n)
    }
    ,
    c
}(Yotpo),
Yotpo.CustomFieldsRenderer = function(e) {
    function t(e) {
        var t = {};
        for (var i in e)
            i.indexOf("custom_fields") > -1 && (t[i] = e[i]);
        return t
    }
    function i(t, i, o) {
        if (!i)
            return !1;
        for (var n = !1, r = 0; r < o.length; r++) {
            var s = o[r]
              , a = s.querySelector(".yotpo-template-field").cloneNode(!0);
            a.querySelector(".yotpo-field-description").innerHTML = t + ":",
            a.querySelector(".yotpo-field-answer").innerHTML = i,
            e.removeClass(a, "yotpo-hidden"),
            e.removeClass(a, "yotpo-template-field"),
            s.appendChild(a),
            n = !0
        }
        return n
    }
    function o(e, t, i, o, n) {
        var s = e.querySelector(".yotpo-product-related-fields")
          , l = 2;
        t && (l = t % 2 == 1 ? 0 : 1);
        var c = s.querySelectorAll(".yotpo-product-related-fields-column")[l];
        r(c, o),
        a(c, i, n)
    }
    function n(t, i, o, n, r, a) {
        var c, d = t.querySelector(".yotpo-product-related-fields");
        if (i) {
            var p = o % u
              , g = d.querySelector(".product-related-fields-desktop-layout");
            c = g.querySelectorAll(".product-related-fields-column")[p]
        } else {
            var g = d.querySelector(".product-related-fields-mobile-layout");
            c = g.querySelector(".product-related-fields-column")
        }
        var h = c.querySelector(".product-related-fields-item")
          , m = h.cloneNode(!0);
        e.removeClass(m, "yotpo-hidden"),
        e.removeClass(m, "yotpo-template-field"),
        s(m, r),
        l(m, n, a),
        c.appendChild(m)
    }
    function r(t, i) {
        var o = t.querySelector(".yotpo-product-related-fields-names")
          , n = o.querySelector(".yotpo-product-related-field-name.yotpo-template-field")
          , r = n.cloneNode(!0);
        r.innerHTML = i + ":",
        e.removeClass(r, "yotpo-hidden"),
        e.removeClass(r, "yotpo-template-field");
        var s = document.createElement("div");
        s.appendChild(r),
        o.insertAdjacentHTML("beforeend", s.innerHTML)
    }
    function s(e, t) {
        var i = e.querySelector(".product-related-fields-item-title");
        i.innerHTML = t
    }
    function a(t, i, o) {
        var n = t.querySelector(".yotpo-product-related-fields-bars")
          , r = n.querySelector(".yotpo-" + i.toLowerCase() + "-bars.yotpo-template-field")
          , s = r.cloneNode(!0);
        c(o, s, i),
        e.removeClass(s, "yotpo-hidden"),
        e.removeClass(s, "yotpo-template-field");
        var a = document.createElement("div");
        a.appendChild(s);
        var l = document.createElement("div");
        e.addClass(l, "yotpo-clr"),
        a.appendChild(l),
        n.insertAdjacentHTML("beforeend", a.innerHTML)
    }
    function l(t, i, o) {
        var n, r = t.querySelector(".product-related-fields-item-value"), s = i.toLowerCase();
        if ("rating" == s) {
            var a = t.querySelector(".yotpo-" + s + "-bars.yotpo-template-field");
            n = a.cloneNode(!0),
            c(o, n, i),
            e.removeClass(n, "yotpo-hidden"),
            e.removeClass(n, "yotpo-template-field")
        } else
            "size" == s && (n = document.createTextNode(o));
        var l = document.createElement("div");
        l.appendChild(n);
        var d = document.createElement("div");
        e.addClass(d, "yotpo-clr"),
        l.appendChild(d),
        r.insertAdjacentHTML("beforeend", l.innerHTML)
    }
    function c(t, i, o) {
        var n = parseInt(t)
          , r = i.getElementsByClassName("yotpo-product-related-field-score-bar");
        switch (o.toLowerCase()) {
        case "rating":
            for (var s = 0; s < r.length && n >= s + 1; s++)
                e.addClass(r[s], "yotpo-rating-bar-full");
            break;
        case "size":
            var a = r[2 * (n - 1)]
              , l = 2 == n ? "fit" : "offset";
            e.removeClass(a, "yotpo-size-bar-empty"),
            e.addClass(a, "yotpo-size-bar-" + l)
        }
    }
    var d = {}
      , u = 3;
    return d.render = function(r, s) {
        var a = yotpo.getUserSettings().custom_fields_info
          , l = yotpo.getUserSettings().new_main_widget_layout
          , c = {
            ".yotpo-product-related-fields": !1,
            ".yotpo-user-related-fields": !1,
            ".yotpo-open-question-fields": !1
        }
          , d = 1
          , u = t(s);
        for (var p in u) {
            var g = p.match(/\[(.*?)\]/).pop()
              , h = a[g].field_type
              , m = a[g].title
              , f = u[p];
            if (["Rating", "Size"].indexOf(h) > -1 && f > 0) {
                if (l) {
                    if ("Size" == h) {
                        var y = parseInt(f);
                        f = a[g].options[y - 1]
                    }
                    n(r, !0, d - 1, h, m, f),
                    n(r, !1, null, h, m, f)
                } else
                    o(r, d, h, m, f),
                    o(r, null, h, m, f);
                d++,
                c[".yotpo-product-related-fields"] = !0
            } else if (["SingleChoice", "MultipleChoice"].indexOf(h) > -1) {
                if (f instanceof Array) {
                    if (!(f.length > 0))
                        continue;
                    f = f.join(", ")
                }
                var v = r.querySelectorAll(".yotpo-user-related-fields")
                  , b = i(m, f, v);
                b && (c[".yotpo-user-related-fields"] = !0)
            } else if (["CustomerFreeText", "ProductFreeText"].indexOf(h) > -1) {
                var w = r.querySelectorAll(".yotpo-open-question-fields");
                f && (f = f.replace(/\n/g, "</br>"));
                var b = i(m, f, w);
                b && (c[".yotpo-open-question-fields"] = !0)
            }
        }
        for (var _ in c)
            if (!c[_]) {
                var S = r.querySelector(_);
                S && e.addClass(S, "yotpo-hidden")
            }
    }
    ,
    d
}(Yotpo),
Yotpo.Libraries = Yotpo.Libraries || {},
Yotpo.Libraries.Tracker = function(e) {
    var t = {};
    return t.trackConversionOrder = function(t, i) {
        if (!e.shouldPreventCookies) {
            var o = i.orderId
              , n = i.orderAmount
              , r = i.orderCurrency;
            t && o && n && r && e.Libraries.YotpoTracker.trackConversionOrder(t, i)
        }
    }
    ,
    t.fbTracking = function(t, i) {
        if (!e.shouldPreventCookies) {
            var o = new e.Libraries.FacebookAds(t.pixel_id);
            1 == t.page_view && o.trackPageView(),
            1 == t.purchase && i && o.trackPurchase(i)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.Libraries = Yotpo.Libraries || {},
Yotpo.Libraries.YotpoTracker = function(e) {
    var t = 1
      , i = {};
    return i.adaptConversionOrderObject = function(e) {
        var t = [];
        if (e.products)
            for (var i = 0; i < e.products.length; ++i) {
                var o = e.products[i];
                t.push({
                    id: o.productId,
                    name: o.productName,
                    url: o.productUrl,
                    image: o.productImage,
                    price: o.productPrice,
                    description: o.productDescription,
                    specs: o.productSpecs
                })
            }
        var n = {
            order_id: e.orderId,
            order_name: e.orderName,
            order_number: e.orderNumber,
            source: e.source,
            platform: e.platform,
            order_amount: e.orderAmount,
            order_currency: e.orderCurrency,
            order_date: e.orderDate,
            customer_name: e.customerName,
            customer_email: e.customerEmail,
            products: t
        };
        return n
    }
    ,
    i.trackConversionOrder = function(i, o) {
        var n = e.getApiHost() + "/conversion_tracking?app_key=" + i + "&v=" + t
          , r = function(t) {
            t = JSON.parse(t),
            e.currentAnalytics.trackConversion(t.appKey, t.orderId, t.orderAmount, t.orderCurrency)
        }
          , s = this.adaptConversionOrderObject(o)
          , a = e.removeUndefinedFields(s);
        e.ajax(n, r, "POST", e.convertComplexObjectToQueryStringParams(a))
    }
    ,
    i
}(Yotpo),
Yotpo.Libraries = Yotpo.Libraries || {},
Yotpo.Libraries.FacebookAds = function() {
    function e(e) {
        window.fbq && t() || (!function(e, t, i, o, n, r, s) {
            e.fbq || (n = e.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }
            ,
            e._fbq || (e._fbq = n),
            n.push = n,
            n.loaded = !0,
            n.version = "2.0",
            n.queue = [],
            r = t.createElement(i),
            r.async = !0,
            r.src = o,
            s = t.getElementsByTagName(i)[0],
            s.parentNode.insertBefore(r, s))
        }(window, document, "script", "//connect.facebook.net/en_US/fbevents.js"),
        fbq("init", e),
        fbq.yotpoInited = !0)
    }
    function t() {
        return "undefined" != typeof yotpoTrackConversionData
    }
    var i = .01
      , o = "USD";
    return e.prototype.trackPageView = function() {
        fbq("track", "PageView")
    }
    ,
    e.prototype.trackPurchase = function(e) {
        var t = {};
        t.value = e.orderAmount ? e.orderAmount : i,
        t.currency = e.orderCurrency ? e.orderCurrency : o,
        e.orderSkus && (t.content_ids = e.orderSkus,
        t.content_type = "product"),
        fbq.yotpoInited && fbq("track", "Purchase", t)
    }
    ,
    e
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Lightbox = function(e) {
    function t(e, t, i, o, n, r) {
        this._controller = e,
        this.element = t,
        this.contentProvider = i,
        this.analyticTracker = o || {
            track: function() {}
        },
        this.wrapperElement = n,
        this.lightboxNewDesign = e.getUserSetting("lightbox_new_design"),
        this.minImageContainers = r ? r + 2 : Y,
        L.call(this),
        x.call(this)
    }
    function i(e) {
        var t = "video" == e.mediaType ? "video" : "image"
          , i = "video" == t ? e.videoId : e.imageId
          , o = "reviews" == this.contentProvider.analyticsCategory ? {
            media_type: t,
            media_id: i,
            review_id: this.element.dataset.reviewId
        } : null;
        return o
    }
    function o(e) {
        for (var t = this.lightbox.getElementsByClassName("yotpo-lightbox-mobile-content"), i = 0; i < t.length; i++) {
            var o = t[i];
            if (o.previousElementSibling != e)
                for (; o.hasChildNodes(); )
                    o.removeChild(o.lastChild)
        }
    }
    function n() {
        var e = this.currImageIndex === R ? this.numLightboxImages - 1 : this.currImageIndex - R - 1
          , t = this.currImageIndex - R
          , i = this.currImageIndex === this.numLightboxImages + 1 ? 0 : this.currImageIndex - R + 1;
        return this.singleImage && (e = t = i = this.currImageIndex),
        {
            current: Object.assign({
                current: !0
            }, this.imagesInfo[t]),
            prev: this.imagesInfo[e],
            next: this.imagesInfo[i]
        }
    }
    function r() {
        var e = this.lightboxImages[this.currImageIndex].dataset.imageId;
        s.call(this, e) && this.videoPlayers[e].kalturaPlayer && this.videoPlayers[e].kalturaPlayer.pause()
    }
    function s(e) {
        return this.videoPlayers[e]
    }
    function a(e, t) {
        m.call(this, e, t),
        _.call(this, t),
        T.call(this, t)
    }
    function l() {
        for (var e = 0; e < this.numImageContainers; e++)
            this.lightboxImageContainers[e].style.width = 100 / this.numImageContainers + "%";
        this.lightboxContainer.style.width = 100 * this.numImageContainers + "%"
    }
    function c() {
        if (this.lightboxImageContainers) {
            for (var e = 0; e < this.lightboxImageContainers.length; e++)
                this.lightboxImageContainers[e].style.width = "";
            this.lightboxImageContainers[0].style.width = "100%",
            this.lightboxContainer.style.width = "100%"
        }
    }
    function d() {
        for (var t = 0; t < this.lightboxImageContainers.length; t++) {
            var i = this.lightboxImageContainers[t];
            t < this.numImageContainers ? e.removeClass(i, "yotpo-hidden") : e.addClass(i, "yotpo-hidden")
        }
    }
    function u(e, t) {
        "image" == e.dataset.mediaType && (e.src !== t.url && (e.src = t.url),
        e.setAttribute("data-image-id", t.imageId)),
        t.externalImageId && e.setAttribute("data-external-image-id", t.externalImageId)
    }
    function p(e, t) {
        var i = ("image" == t.dataset.mediaType ? "Image" : "Video") + " taken by ";
        this.review && this.review.querySelector(".yotpo-user-name") && (i += this.review.querySelector(".yotpo-user-name").textContent.trim());
        var o = this.contentProvider.getProductName(e);
        o && (i += " of " + o);
        for (var n = 0; n < this.lightboxImages.length; n++)
            this.lightboxImages[n].removeAttribute("data-lbimage-index");
        t.setAttribute("data-lbimage-index", 0),
        this.modal.setAttribute("aria-label", i);
        var r = this.lightboxContentContainer.getElementsByClassName("vote-btn");
        r.length && (r[0].setAttribute("aria-label", "vote up " + i),
        r[1].setAttribute("aria-label", "vote down " + i))
    }
    function g(t, i) {
        var o = t.index;
        T.call(this, this.lightboxImages[o]),
        e.removeClass(this.lightboxContainer, "yotpo-hidden"),
        e.addClass(this.loader, "yotpo-hidden"),
        e.removeClass(this.lightboxImages[o], "yotpo-hidden"),
        this.lightboxNewDesign && M() && e.removeClass(this.lightboxImages[o].nextElementSibling, "yotpo-hidden"),
        A.call(this);
        var n = this;
        setTimeout(function() {
            S.call(n)
        }, 100),
        N.call(this, "shown", i),
        this.firstFocusElement.focus()
    }
    function h() {
        var t = this;
        document.body.style.overflow = "hidden",
        setTimeout(function() {
            e.addClass(t.modal, "yotpo-modal-active"),
            e.addClass(t.mask, "yotpo-active-display"),
            setTimeout(function() {
                e.addClass(t.modalContainer, "yotpo-active-display"),
                t.firstFocusElement.focus()
            }, 100)
        }, 10),
        t.wrapperElement && document.body.appendChild(t.wrapperElement),
        C.call(this),
        k.call(this),
        e.addClass(t.lightboxContainer, "yotpo-hidden"),
        e.removeClass(t.loader, "yotpo-hidden")
    }
    function m(t, i) {
        this._controller.appKey;
        this.review = this.contentProvider.getContent(t);
        var o = this.lightboxContentContainer;
        for (this.lightboxNewDesign && M() && (o = i.parentElement.querySelector(".yotpo-lightbox-mobile-content")); o.hasChildNodes(); )
            o.removeChild(o.lastChild);
        this.isSliding && this.lightboxNewDesign && M() && (e.addClass(o, "yotpo-hidden"),
        e.addClass(o, "only-invisible")),
        o.appendChild(this.review),
        this.lightboxNewDesign && F.call(this, o)
    }
    function f(e) {
        if (1 == this.lightboxImages.length)
            return this.lightboxImages[0];
        var t;
        switch (e) {
        case "prev":
            t = this.currImageIndex - 1,
            R > t && (t = this.numLightboxImages + R - 1);
            break;
        case "current":
            t = this.currImageIndex;
            break;
        case "next":
            t = this.currImageIndex + 1,
            t >= this.numLightboxImages + R && (t = R)
        }
        return this.lightboxImages[t]
    }
    function y(e) {
        for (var t, i = Object.keys(e), o = 0; o < i.length; o++)
            t = i[o],
            "video" == e[t].mediaType && v.call(this, e[t], t)
    }
    function v(e, t) {
        var i = f.call(this, t);
        this.videoPlayers[i.dataset.imageId] ? b.call(this, e, i) : w.call(this, e, i)
    }
    function b(e, t) {
        var i = t.dataset.imageId;
        e.kalturaPlayer = this.videoPlayers[i]
    }
    function w(t, i) {
        var o = i.dataset.imageId;
        i.id = "lightbox-" + o;
        var n = new e.Modules.KalturaManager(i,this._controller);
        n.initLightboxPlayer(void 0 === t.current),
        this.videoPlayers[o] = t.kalturaPlayer = n
    }
    function _(t) {
        e.Modules.Handle.popup.call(this.lightboxNewDesign && M() ? t.parentElement.querySelector(".yotpo-lightbox-mobile-content") : this.lightboxContentContainer)
    }
    function S() {
        this.rightArrow.style.display = this.leftArrow.style.display = 1 === this.numLightboxImages ? "none" : "block",
        this.lightboxNewDesign && M() && (this.arrows.style.top = this.lightboxImages[this.currImageIndex].clientHeight / 2 + "px")
    }
    function C() {
        this.rightArrow.style.display = this.leftArrow.style.display = "none"
    }
    function A() {
        var e = this;
        this.oldKeyDownFunction = document.onkeydown,
        document.onkeydown = function(t) {
            switch (t = t || window.event,
            t.keyCode) {
            case 27:
                e.close();
                break;
            case 37:
                if (1 === e.numLightboxImages)
                    break;
                e.slide(W.PREVIOUS_IMAGE);
                break;
            case 39:
                if (1 === e.numLightboxImages)
                    break;
                e.slide(W.NEXT_IMAGE)
            }
        }
    }
    function E() {
        document.onkeydown = this.oldKeyDownFunction
    }
    function k() {
        var t, i, o = this._controller.getWidgetByName("Testimonials"), n = this._controller.getWidgetByName("Main");
        o && n && (t = o.getElement(),
        i = t.querySelector("#yotpo_testimonials_btn"),
        e.toggleClass(i, "only-invisible"),
        e.toggleClass(i, "yotpo-hidden"))
    }
    function x() {
        var t = this;
        this.mask.onclick = this.modalDialog.onclick = this.closeBtn.onclick = function() {
            t.close()
        }
        ,
        this.closeBtn.onkeydown = function(e) {
            13 == e.keyCode && t.close()
        }
        ,
        this.leftArrow.onclick = function() {
            t.slide(W.PREVIOUS_IMAGE)
        }
        ,
        this.leftArrow.onkeydown = function(e) {
            13 == e.keyCode && t.slide(W.PREVIOUS_IMAGE)
        }
        ,
        this.rightArrow.onclick = function() {
            t.slide(W.NEXT_IMAGE)
        }
        ,
        this.rightArrow.onkeydown = function(e) {
            13 == e.keyCode && t.slide(W.NEXT_IMAGE)
        }
        ;
        for (var i = 0; i < this.lightboxImageContainers.length; ++i)
            this.lightboxImageContainers[i].onclick = function(e) {
                e && "undefined" != typeof e.stopPropagation && e.stopPropagation()
            }
            ;
        this.lightboxNewDesign && (this.lightbox.addEventListener("touchstart", function(e) {
            I.call(t, e)
        }, e.supportsPassive() ? {
            passive: !0
        } : !1),
        this.lightbox.addEventListener("touchmove", function(e) {
            P.call(t, e)
        }, e.supportsPassive() ? {
            passive: !0
        } : !1))
    }
    function I(e) {
        this.initialX = e.touches[0].clientX,
        this.initialY = e.touches[0].clientY
    }
    function P(e) {
        if (null !== this.initialX && null !== this.initialY) {
            var t = e.touches[0].clientX
              , i = e.touches[0].clientY
              , o = this.initialX - t
              , n = this.initialY - i;
            Math.abs(o) > 2 * Math.abs(n) && Math.abs(o) > 50 && (this.slide(o > 0 ? W.NEXT_IMAGE : W.PREVIOUS_IMAGE),
            this.initialX = null,
            this.initialY = null,
            e.preventDefault())
        }
    }
    function T(e) {
        var t = this.lightboxContentContainer;
        this.lightboxNewDesign && M() && (t = e.parentElement.querySelector(".yotpo-lightbox-mobile-content"));
        var i = t.querySelector('.social-link[data-network="facebook"]');
        if (i) {
            var o, n = i.href.split("&picture")[0], r = this.lightboxImages[this.currImageIndex].src || "";
            o = n + "&picture=" + r,
            i.href = o
        }
    }
    function q() {
        this.lightboxImages = this.lightboxContainer.querySelectorAll(".yotpo-lightbox-image"),
        this.lightboxImageContainers = this.lightboxContainer.querySelectorAll(".yotpo-lightbox-image-container")
    }
    function F(t) {
        var i = t.getElementsByClassName("yotpo-instagram");
        if (i.length) {
            var o = i[0].getElementsByClassName("yotpo-regular-box");
            o.length && setTimeout(function() {
                if (o[0].scrollHeight > o[0].clientHeight) {
                    var t = i[0].getElementsByClassName("show-more")[0]
                      , n = i[0].getElementsByClassName("show-less")[0];
                    e.addClass(i[0], "collapse-text"),
                    e.addEventListener(t, "click", function() {
                        o[0].focus(),
                        e.addClass(i[0], "open-text")
                    }),
                    e.addEventListener(n, "click", function() {
                        o[0].focus(),
                        e.removeClass(i[0], "open-text")
                    })
                }
            }, 10)
        }
    }
    function M() {
        return window.innerWidth < 1e3
    }
    function L() {
        this.currImageIndex = 0,
        this.lightbox = this.element,
        this.videoPlayers = {},
        this.modalContainer = this.lightbox.getElementsByClassName("yotpo-lightbox-container")[0],
        this.lightboxContentContainer = this.lightbox.getElementsByClassName("yotpo-lightbox-content-container")[0],
        this.lightboxSliderContainer = this.lightbox.getElementsByClassName("yotpo-lightbox-slider-container")[0],
        this.lightboxContainer = this.lightbox.getElementsByClassName("y-slider-container")[0],
        q.call(this),
        this.firstFocusElement = this.lightbox.getElementsByClassName("yotpo-icon-cross")[0],
        this.closeBtn = this.lightbox.getElementsByClassName("yotpo-icon-btn-small")[0],
        this.modal = this.lightbox.getElementsByClassName("yotpo-modal")[0],
        this.modalDialog = this.modal.getElementsByClassName("yotpo-modal-dialog")[0],
        this.mask = this.modal.getElementsByClassName("yotpo-modal-mask")[0],
        this.loader = this.modal.getElementsByClassName("yotpo-image-loader-wrapper")[0],
        this.arrows = this.lightbox.getElementsByClassName("yotpo-lightbox-arrows")[0],
        this.leftArrow = this.lightbox.getElementsByClassName("yotpo-icon-left-arrow-thin")[0],
        this.rightArrow = this.lightbox.getElementsByClassName("yotpo-icon-right-arrow-thin")[0],
        this.body_overflow_style = document.body.style.overflow
    }
    function H(e, t) {
        if ("reviews" == this.contentProvider.analyticsCategory)
            var i = "video" == e.current.mediaType ? e.current.videoId : e.current.imageId
              , o = {
                media_id: i,
                review_id: this.review.dataset.reviewId
            };
        else
            var o = {
                source: e.current.mediaSource,
                media_id: e.current.imageId,
                has_cta: t
            };
        return o
    }
    function N(t, i) {
        var o = this.element.querySelector(".yotpo-lightbox-product-button")
          , n = o ? !e.isHidden(o) : !1
          , r = H.call(this, i, n);
        if (n) {
            var s = o.className.indexOf("yotpo-lightbox-add-to-cart-button") >= 0 ? "add_to_cart" : "shop_now";
            r.cta_type = s
        }
        var a = "video" == i.current.mediaType ? "video" : "image";
        this.analyticTracker.track(t, a, null, r)
    }
    function D() {
        var t = this
          , i = t.element
          , o = '[tabindex]:not([tabindex="-1"])';
        e.trapModalFocus(i, o)
    }
    var Y = 3
      , B = 1
      , O = 1
      , R = 2
      , W = {
        NEXT_IMAGE: "next",
        PREVIOUS_IMAGE: "previous"
    };
    return t.prototype.open = function(t, i) {
        var o, r, s = [];
        this.lastFocusElement = document.activeElement,
        this.isOpen = !0,
        this.isSliding = !1,
        r = this.contentProvider.getImages(t),
        this.numLightboxImages = r.length,
        this.singleImage = 1 == this.numLightboxImages,
        this.singleImage ? this.numImageContainers = 1 : (this.numImageContainers = this.numLightboxImages + R,
        this.numImageContainers < this.minImageContainers && (this.numImageContainers = this.minImageContainers)),
        this.slider = new e.Modules.Slide(this.lightboxContainer,{
            imageCount: this.numLightboxImages,
            displayWindowCount: B,
            animationDuration: 300
        }),
        this.slider.start();
        var m = t.getAttribute("data-image-id");
        for (o = 0; o < this.numLightboxImages; o++) {
            var f = r[o].getAttribute("data-original-src")
              , v = r[o].getAttribute("data-image-id")
              , b = r[o].getAttribute("data-external-image-id")
              , w = r[o].getAttribute("data-media-type")
              , _ = r[o].getAttribute("data-source")
              , S = {
                url: f,
                imageId: v,
                externalImageId: b,
                mediaType: w,
                mediaSource: _
            }
              , C = r[o].getAttribute("data-entry-id")
              , A = r[o].getAttribute("data-video-id");
            C && (S.entryId = C),
            A && (S.videoId = A),
            s.push(S),
            v === m && (this.currImageIndex = this.singleImage ? 0 : o + R,
            this.slider.setCurrentPosition(this.currImageIndex))
        }
        this.imagesInfo = s,
        i && d.call(this),
        this.numImageContainers > 1 ? l.call(this) : c.call(this),
        h.call(this);
        var E = n.call(this);
        y.call(this, E);
        var k = this;
        e.preloadImages([E.prev, E.current, E.next], function(e) {
            g.call(k, e, E)
        }, {
            index: k.currImageIndex,
            id: E.current.imageId
        }),
        currentImage = this.lightboxImages[this.currImageIndex],
        u.call(this, currentImage, E.current),
        a.call(this, t, currentImage),
        p.call(this, t, currentImage),
        N.call(this, "loaded", E),
        D.call(this)
    }
    ,
    t.prototype.close = function() {
        var t = this;
        if (this.isOpen) {
            this.isOpen = !1,
            r.call(this),
            e.removeClass(t.modalContainer, "yotpo-active-display"),
            document.body.style.overflow = t.body_overflow_style;
            for (var i = 0; i < t.numImageContainers; i++)
                t.lightboxImages[i].src = "";
            setTimeout(function() {
                e.removeClass(t.mask, "yotpo-active-display"),
                setTimeout(function() {
                    e.hasClass(t.mask, "yotpo-active-display") || e.hasClass(t.modalContainer, "yotpo-active-display") || (e.removeClass(t.modal, "yotpo-modal-active"),
                    k.call(t),
                    e.Modules.Event.trigger("popupClosed"))
                }, 300)
            }, 300),
            E.call(this),
            t.wrapperElement && document.body.removeChild(t.wrapperElement)
        }
        this.lastFocusElement.focus()
    }
    ,
    t.prototype.slide = function(t) {
        if (!this.isSliding && 1 != this.imagesInfo.length) {
            r.call(this),
            this.isSliding = !0,
            t == W.NEXT_IMAGE ? (this.currImageIndex += 1,
            this.currImageIndex >= this.numLightboxImages + R && (this.currImageIndex = R)) : (this.currImageIndex += -1,
            this.currImageIndex < R && (this.currImageIndex = this.numLightboxImages + R - 1));
            var s;
            if ("image" == this.lightboxImages[this.currImageIndex].dataset.mediaType) {
                var l = this.lightboxImages[this.currImageIndex].querySelector("source") || this.lightboxImages[this.currImageIndex];
                currImageSrc = l.attributes.src.value,
                s = currImageSrc.length <= O
            } else
                s = !this.videoPlayers[this.lightboxImages[this.currImageIndex].dataset.imageId];
            s && (e.removeClass(this.loader, "yotpo-hidden"),
            e.addClass(this.lightboxImages[this.currImageIndex], "yotpo-hidden"));
            var c = n.call(this)
              , d = this.lightboxImages[this.currImageIndex];
            u.call(this, d, c.current),
            a.call(this, d, d),
            p.call(this, d, d);
            var h = t == W.NEXT_IMAGE ? c.prev : c.next
              , m = i.call(this, h);
            t == W.NEXT_IMAGE ? (this.slider.right(),
            this.analyticTracker.track("clicked_on", "popup_next_image", null, m)) : (this.slider.left(),
            this.analyticTracker.track("clicked_on", "popup_previous_image", null, m));
            var f = this;
            y.call(this, c),
            e.preloadImages([c.prev, c.current, c.next], function(e) {
                g.call(f, e, c)
            }, {
                index: f.currImageIndex,
                id: c.current.imageId
            }),
            setTimeout(function() {
                f.isSliding = !1,
                o.call(f, d)
            }, 500)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.ReviewContentCreator = function(e) {
    var t = {
        getElement: function(t, i) {
            var o = t.cloneNode(!0);
            elements = o.querySelectorAll(".yotpo-review-images-wrapper, .yotpo-multiple-rating-fields, .yotpo-user-related-fields, .yotpo-review-media-wrapper");
            for (var n = 0; n < elements.length; n++)
                elements[n].parentNode.removeChild(elements[n]);
            e.removeClass(o, "yotpo-regular-box");
            var r = e.Review.load(o, i);
            return r.openReadMore(o),
            r.setOriginalElement(t),
            o
        }
    };
    return t
}(Yotpo),
Yotpo.InstagramContentCreator = function(e) {
    var t = {
        getElement: function(t, i) {
            var o = t.cloneNode(!0);
            return e.InstagramPost.load(o, t, i),
            o
        }
    };
    return t
}(Yotpo),
Yotpo.ProductContentCreator = function(e) {
    function t(e) {
        this.contentCreator = e
    }
    function i(t, i, o, n) {
        var r = t.parentElement.querySelector(".yotpo-lightbox-products-container");
        if (r) {
            var s = r.cloneNode(!0);
            e.TaggedProducts.load(s, o, n);
            var a = document.createElement("div");
            return a.appendChild(s),
            a.appendChild(i),
            a
        }
        return i
    }
    return t.prototype.getElement = function(e, t, o) {
        var n = this.contentCreator.getElement(e, t, o);
        return i(e, n, t, o)
    }
    ,
    t
}(Yotpo),
Yotpo.SingleReviewContentProvider = function(e) {
    function t() {
        this.reviewElement = null,
        this.analyticsCategory = "reviews"
    }
    return t.prototype.clear = function() {
        this.reviewElement = null
    }
    ,
    t.prototype.getImages = function(e) {
        if (e.parentNode && e.parentNode.parentNode) {
            var t = e.parentNode.parentNode.querySelectorAll(".media-review");
            if (t && t.length > 0) {
                for (var i = [], o = 0; o < t.length; o++)
                    i.push(t[o]);
                t = i
            }
            return t
        }
        return []
    }
    ,
    t.prototype.getContent = function(t) {
        if (!this.reviewElement) {
            var i = e.Modules.Helper.findAncestorByClass(t, "yotpo-review");
            this.reviewElement = e.ReviewContentCreator.getElement(i, this.analyticsCategory)
        }
        return this.reviewElement
    }
    ,
    t.prototype.getProductName = function(e) {
        var t = this.getContent(e)
          , i = t.querySelector(".product-link-wrapper");
        return i ? i.getAttribute("aria-label") : null
    }
    ,
    t
}(Yotpo),
Yotpo.SliderContentProvider = function(e) {
    function t(t, i, o, n, r) {
        this.images = t,
        this.contents = i,
        this.galleryId = r,
        this.analyticsCategory = n,
        this.reviewContentCreator = o ? new e.ProductContentCreator(e.ReviewContentCreator) : e.ReviewContentCreator,
        this.instagramContentCreator = o ? new e.ProductContentCreator(e.InstagramContentCreator) : e.InstagramContentCreator
    }
    function i(t, i, o, n, r) {
        var s = this
          , n = n || t.querySelector(i);
        n && e.addEventListener(n, "click", function() {
            e.currentAnalytics.trackEvent(s.analyticsCategory, "clicked_on", o, null, r)
        })
    }
    function o(e, t, o, n, r) {
        i.call(this, e, ".facebook", "share_facebook"),
        i.call(this, e, ".twitter", "share_twitter");
        for (var s = ".yotpo-lightbox-product", a = e.querySelectorAll(".yotpo-lightbox-product"), l = 0; l < a.length; l++) {
            var c = a[l]
              , d = c.getAttribute("data-product-id")
              , u = {
                product_id: d,
                media_id: t,
                source: o,
                media_type: n,
                gallery_id: r
            }
              , p = c.querySelector(s + "-button");
            i.call(this, null, null, "shop_now", c.querySelector(s + "-main-image"), u),
            p.className.indexOf("yotpo-lightbox-add-to-cart-button") < 0 && i.call(this, null, null, "shop_now", p, u),
            i.call(this, null, null, "shop_now", c.querySelector(s + "-name"), u)
        }
    }
    return t.prototype.getImages = function() {
        return this.images
    }
    ,
    t.prototype.getProductName = function(e) {
        var t = e.getAttribute("data-image-id")
          , i = this.contents.querySelector(".yotpo-slider-content-" + t)
          , o = i.getAttribute("data-source");
        if ("review" === o) {
            var n = i.querySelector(".yotpo-lightbox-product-name");
            return n ? n.textContent.trim() : null
        }
        if ("instagram" === o) {
            var n = i.querySelector(".yotpo-lightbox-product-name");
            return n ? n.textContent.trim() : null
        }
        return null
    }
    ,
    t.prototype.getContent = function(e) {
        var t, i = e.getAttribute("data-image-id"), n = this.contents.querySelector(".yotpo-slider-content-" + i), r = n.getAttribute("data-source"), s = e.getAttribute("data-media-type"), a = {
            imageId: i,
            source: r,
            mediaType: s,
            galleryId: this.galleryId
        };
        if ("review" === r) {
            var l = n.querySelector(".yotpo-review");
            t = this.reviewContentCreator.getElement(l, this.analyticsCategory, a)
        } else if ("instagram" === r) {
            var c = n.querySelector(".yotpo-instagram");
            t = this.instagramContentCreator.getElement(c, this.analyticsCategory, a)
        } else if ("onsite_upload" === r || "manual_upload" === r || "import" === r) {
            var d = n.querySelector(".yotpo-onsite-upload");
            t = this.instagramContentCreator.getElement(d, this.analyticsCategory, a)
        }
        return o.call(this, t, i, r, s, this.galleryId),
        t
    }
    ,
    t
}(Yotpo),
Yotpo.TaggedProducts = function(e) {
    function t(t, a, l) {
        var c = this;
        this.element = t,
        this.analyticsCategory = a,
        s.call(this),
        i.call(this),
        o.call(this),
        this.addToCartButtons.length && (e.AddToCart.load(t, a, l, n.bind(c)),
        r(this.addToCartButtons))
    }
    function i() {
        for (var t = this, i = 0; i < this.smallProducts.length; i++)
            e.addEventListener(this.smallProducts[i], "click", function() {
                t.changeProduct(this)
            })
    }
    function o() {
        var t = this;
        this.showMore && e.addEventListener(this.showMore, "click", function() {
            e.addClass(t.productsList, "show-all")
        }),
        this.showLess && e.addEventListener(this.showLess, "click", function() {
            e.removeClass(t.productsList, "show-all")
        })
    }
    function n(t, i) {
        var o = t.querySelector(".yotpo-lightbox-add-to-cart-button");
        i || e.addClass(o, "unavailable"),
        e.show(o)
    }
    function r(t) {
        var i = function(t) {
            setTimeout(function() {
                var i = !document.body.querySelector(".yotpo-add-to-cart-button-tooltip")
                  , o = t.parentElement.querySelector(":hover") === t
                  , n = t.className.indexOf("unavailable") >= 0;
                if (o && i && n) {
                    var r = document.createElement("div");
                    r.className = "yotpo yotpo-add-to-cart-button-tooltip";
                    var s = t.getBoundingClientRect();
                    r.style.top = s.top + s.height + 5 + "px",
                    r.style.left = s.left - (165 - s.width) / 2 + "px";
                    var a = document.createElement("div")
                      , l = document.createElement("li");
                    l.className = "yotpo-icon yotpo-icon-info",
                    a.className = "tool-tip-unavailable",
                    a.innerText = e.texts.add_to_cart_currently_unavailable,
                    a.insertBefore(l, a.childNodes[0]),
                    r.appendChild(a),
                    document.body.appendChild(r)
                }
            }, 500)
        }
          , o = this;
        e.forEach(t, function(t) {
            e.addEventListener(t, "mouseenter", i.bind(o, t)),
            e.addEventListener(t, "mouseleave", function() {
                var e = document.body.querySelector(".yotpo-add-to-cart-button-tooltip");
                e && e.parentNode.removeChild(e)
            })
        })
    }
    function s() {
        this.smallProducts = this.element.querySelectorAll(".yotpo-lightbox-product-select-image"),
        this.selectedProduct = this.element.querySelector(".yotpo-lightbox-product-selected"),
        this.products = this.element.querySelectorAll(".yotpo-lightbox-product"),
        this.productsList = this.element.querySelector(".yotpo-lightbox-products-footer"),
        this.showMore = this.element.querySelector(".yotpo-lightbox-more-products .show-more"),
        this.showLess = this.element.querySelector(".yotpo-lightbox-more-products .show-less"),
        this.addToCartButtons = this.element.querySelectorAll(".yotpo-lightbox-add-to-cart-button");
        var t = this.element.querySelectorAll("img[data-src]");
        e.forEach(t, function(e) {
            e.setAttribute("src", e.attributes["data-src"].value),
            e.removeAttribute("data-src")
        });
        var i = this.element.getElementsByClassName("review-stars")
          , o = this.element.getElementsByClassName("link-to-product-tab")[0];
        i.length && e.addEventListener(i[0], "keydown", function(e) {
            13 == e.keyCode && o.click()
        })
    }
    return t.load = function(t, i, o) {
        return new e.TaggedProducts(t,i,o)
    }
    ,
    t.prototype.changeProduct = function(t) {
        e.removeClass(this.selectedProduct, "yotpo-lightbox-product-selected"),
        this.selectedProduct = t,
        e.addClass(this.selectedProduct, "yotpo-lightbox-product-selected");
        for (var i = this.selectedProduct.getAttribute("data-product-id"), o = 0; o < this.products.length; o++)
            this.products[o].getAttribute("data-product-id") === i ? e.removeClass(this.products[o], "yotpo-hidden") : e.addClass(this.products[o], "yotpo-hidden")
    }
    ,
    t
}(Yotpo),
Yotpo.ImagesHandler = function(e) {
    function t(t, i) {
        this.imageWidget = i,
        this.appKey = t,
        this.loadedImagesOffest = 0,
        this.loadVideoPlayer = !1,
        this.analyticsContext = {},
        this.analyticsTracker = new e.AnalyticsTracker("upload_media",this.analyticsContext),
        this.lazyLoadingHandler = new e.Modules.lazyLoading
    }
    function i(e, t) {
        if (t.naturalHeight < y || t.naturalWidth < y) {
            var i = n.bind(this)(e);
            i && (t.naturalHeight < i.height || t.naturalWidth < i.width) && i.setAttribute("src", i.src.replace("low_resolution", "standard_resolution"))
        }
    }
    function o(t) {
        if (e.isIE10OrLess || e.isIE11)
            for (var i = this.imageWidget.element.querySelectorAll(h + "[" + g + "='" + t + "']"), o = 0; o < i.length; o++) {
                var n = i[o].naturalHeight > i[o].naturalWidth ? "yotpo-image-tall" : "yotpo-image-wide";
                e.addClass(i[o], n)
            }
    }
    function n(e) {
        return this.imageWidget.element.querySelector(h + "[" + g + "='" + e + "']")
    }
    function r(e) {
        var t = this.imageWidget.element.querySelectorAll(v + "[" + g + "='" + e + "']");
        return Array.prototype.slice.call(t)
    }
    function s(t, i) {
        var o = r.bind(this)(t)
          , n = this;
        e.forEach(o, function(t) {
            if (t) {
                var o = new e.Modules.KalturaManager(t,n.imageWidget._controller,i);
                o.loadThumbRotator()
            }
        })
    }
    function a(t) {
        e.forEach(t, function(t) {
            e.Modules.KalturaManager.setElementThumbnailPlaceholder(t)
        })
    }
    function l(e) {
        if (e) {
            if (e.querySelector(v))
                return "video";
            if (e.querySelector(h))
                return "image"
        }
        return -1
    }
    function c(e) {
        if (e) {
            if ("video" == l(e))
                return e.querySelector(v);
            if ("image" == l(e))
                return e.querySelector(h)
        }
        return null
    }
    function d(e) {
        var t = c(e);
        return t ? t.getAttribute(g) : -1
    }
    function u(t) {
        if (t) {
            if ("video" == l(t))
                return e.Modules.KalturaManager.getThumbnailPlaceholderUrl(c(t));
            if ("image" == l(t))
                return c(t).getAttribute("src") || c(t).getAttribute("data-src")
        }
        return null
    }
    function p(e, t) {
        for (var i = 0; i < e.length; i++)
            if (e[i].id === t)
                return !0;
        return !1
    }
    var g = "data-image-id"
      , h = ".yotpo-image"
      , m = ".y-image-overlay"
      , f = "data-original-src"
      , y = 320
      , v = ".yotpo-video";
    return t.prototype.removeBrokenImages = function(t) {
        for (var i = this.imageWidget.getImageElements(), o = 0; o < i.length; o++) {
            var n = d(i[o]);
            t.indexOf(n) > -1 && e.remove(i[o])
        }
    }
    ,
    t.prototype.replaceBrokenImages = function(t) {
        for (var i = this.imageWidget.getImageElements(), o = e.getDefualtImage(), n = 0; n < i.length; n++) {
            var r = d(i[n]);
            if (p(t, r)) {
                var s = i[n].querySelector(v);
                if (s)
                    s.style.background = "url(" + o.size_180 + ") 0px center",
                    s.style.backgroundSize = "cover";
                else {
                    var a = i[n].querySelector(h);
                    a && a.setAttribute("src", o.size_180)
                }
                var l = i[n].querySelector(m);
                l.setAttribute(f, o.size_656)
            }
        }
    }
    ,
    t.prototype.getImageSource = function(e) {
        var t = null
          , i = this.imageWidget.element.querySelector('.yotpo-single-image-container [data-image-id="' + e + '"]');
        if (i) {
            var o = i.parentElement.querySelector(".y-image-overlay");
            t = o.getAttribute("data-source")
        }
        return t
    }
    ,
    t.prototype.loadImages = function(t, i, o) {
        this.lazyLoadingHandler.setImages({
            onFinish: t,
            onLoadError: i,
            onLoad: o
        }, this.imageWidget),
        this.imageWidget && this.imageWidget._controller.cssReady && (this.lazyLoadingHandler.loadImagesCalled = !0,
        this.lazyLoadingHandler.loadImages(!0));
        var n = this.imageWidget.getImageElements()
          , r = []
          , s = [];
        this.loadVideoPlayer = !1;
        for (var c = this.loadedImagesOffest; c < n.length; c++) {
            var p = u(n[c])
              , g = d(n[c])
              , h = l(n[c])
              , m = n[c].querySelector(".yotpo-video");
            m && (s.push(m),
            this.loadVideoPlayer = !0),
            "image" != h && r.push({
                url: p,
                imageId: g,
                mediaType: h
            })
        }
        this.loadVideoPlayer && a.call(this, s),
        this.loadedImagesOffest = n.length,
        e.preloadImages(r, t, this.imageWidget, i, this.imageWidget, o)
    }
    ,
    t.prototype.handleMediaAfterLoad = function(e, t, n) {
        i.call(this, e, t),
        o.call(this, e, t),
        s.call(this, e, n)
    }
    ,
    t.prototype.verifyKalturaLoad = function() {
        if (this.loadVideoPlayer && "undefined" == typeof KalturaPlayer) {
            var e = {
                error: "Failed to load kaltura script",
                type: "script_load"
            };
            this.analyticsTracker.track("video_upload", "error", null, e)
        }
    }
    ,
    t.prototype.adjustImageHoverStyle = function() {
        for (var t = this.imageWidget.container.querySelectorAll(".y-image-wrapper"), i = "", o = 196, n = 680, r = 0; r < t.length; r++) {
            var s = t[r].querySelector(".yotpo-hover-icon")
              , a = t[r].querySelector(".yotpo-hover-cta");
            i = t[r].offsetWidth <= o ? "yotpo-hover-image-small" : t[r].offsetWidth > o && t[r].offsetWidth <= n ? "yotpo-hover-image-medium" : "yotpo-hover-image-large",
            e.addClass(t[r], i),
            s && a || e.addClass(t[r], "yotpo-hover-big-icon")
        }
    }
    ,
    t
}(Yotpo),
Yotpo.VideoPlayerLoader = function() {
    function e(e, t) {
        this.widget = e,
        this.hasVideo = this.checkAndUpdateIfHasVideo(),
        this.kalturaCreds = t
    }
    return e.prototype.loadKalturaScript = function() {
        var e = document.createElement("script");
        e.type = "text/javascript",
        e.src = "https://cdnapisec.kaltura.com/p/" + this.kalturaCreds.partner_id + "/embedPlaykitJs/uiconf_id/" + this.kalturaCreds.player_id,
        document.body.appendChild(e);
        var t;
        return "undefined" != typeof requirejs && requirejs.config ? t = requirejs : "undefined" != typeof require && require.config && (t = require),
        t && (t.config({
            paths: {
                KalturaPlayer: e.src
            }
        }),
        t(["scripts/config"], function() {
            window.KalturaPlayer = KalturaPlayer
        })),
        !0
    }
    ,
    e.prototype.checkAndUpdateIfHasVideo = function() {
        return this.hasVideo ? !0 : this.widget.element.getElementsByClassName("yotpo-video").length > 0
    }
    ,
    e
}(Yotpo),
Yotpo.ImagesAnalyticsHandler = function(e) {
    function t(t, i) {
        this.element = t,
        this.tracker = i,
        this.bindedImagesOffest = 0,
        n.call(this),
        i.track("loaded"),
        e.currentInview.register(this.element, function() {
            i.track("shown", null, null)
        }),
        e.hoverAnalytics.register(self.element, function() {
            e.currentAnalytics.trackUniqueEvent(self.analyticsCategory, "hovered", null, null, self.analyticsContext)
        })
    }
    function i(e) {
        var t = e.querySelector(".y-image-overlay")
          , i = t ? t.getAttribute("data-source") : "unkown"
          , o = t ? t.getAttribute("data-image-id") : "unkown";
        return {
            source: i,
            media_id: o
        }
    }
    function o(e) {
        return e.getElementsByClassName("yotpo-image").length > 0 ? "image" : "video"
    }
    function n() {
        this.tracker.eventContext.has_video = this.element.getElementsByClassName("yotpo-video").length > 0
    }
    return t.prototype.bindImageElementAnalytics = function(t) {
        var n = this
          , r = o(t);
        e.currentInview.register(t, function(e) {
            return function() {
                n.tracker.track("shown", r, null, i(e))
            }
        }(t)),
        e.addEventListener(t, "click", function() {
            n.tracker.track("clicked_on", r, null, i(t))
        }),
        e.hoverAnalytics.register(t, function() {
            n.tracker.track("hovered", r, null, i(t))
        })
    }
    ,
    t.prototype.bindAnalyticsForloadedImages = function(e) {
        n.call(this);
        for (var t = this.bindedImagesOffest; t < e.length; t++)
            this.bindImageElementAnalytics(e[t]);
        this.bindedImagesOffest = e.length
    }
    ,
    t
}(Yotpo),
Yotpo.AnalyticsTracker = function(e) {
    function t(e, t) {
        this.category = e,
        this.eventContext = t
    }
    return t.prototype.track = function(t, i, o, n) {
        if (!e.shouldPreventCookies) {
            var r = n ? Object.assign(n, this.eventContext) : this.eventContext;
            e.currentAnalytics.trackEvent(this.category, t, i, o, r)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.ShoppableProductsSlider = function(e) {
    function t(t, i, o) {
        this._controller = t,
        this.element = o,
        this.titleElement = document.createElement("div"),
        e.addClass(this.titleElement, "yotpo-shoppable-tagged-products-title"),
        this.element.appendChild(this.titleElement),
        this.productsElement = document.createElement("div"),
        e.addClass(this.productsElement, "yotpo-shoppable-products-elements"),
        this.element.appendChild(this.productsElement),
        this.analyticsTracker = i,
        r.call(this)
    }
    function i(t) {
        this.mobileSlider = new e.Modules.MobileSlide(this.productsElement,t || {})
    }
    function o(t, o, r, a) {
        var l = [{
            method: "promoted_products",
            params: {
                domain_key: t[0].domainKey,
                widget: "shoppable_instagram"
            },
            format: "json"
        }];
        this.currentOpenViewImageId = o,
        this._controller.getBatch(function(l) {
            if (this.currentOpenViewImageId === o) {
                this.currentOpenViewImageId = null;
                var c = JSON.parse(l);
                c = c[0].result;
                for (var u = [], p = 0; p < c.promoted_products.length; p++)
                    n(t, c.promoted_products[p].products_app_id) || u.push({
                        id: c.promoted_products[p].products_app_id,
                        name: c.promoted_products[p].name,
                        link: c.promoted_products[p].url,
                        imageUrl: c.promoted_products[p].image,
                        score: c.promoted_products[p].average_score,
                        reviewsCount: c.promoted_products[p].total_review
                    });
                u.length > 0 && (e.removeClass(this.element, "yotpo-hidden"),
                s.call(this, u, r, a, !0),
                i.call(this, {
                    separatorSize: 20,
                    separatorClass: d
                }),
                t.length > 1 ? this.titleElement.innerHTML += " and related products" : this.titleElement.innerHTML = "Related products")
            }
        }
        .bind(this), l)
    }
    function n(e, t) {
        for (var i = 0; i < e.length; i++)
            if (t == e[i].id)
                return !0
    }
    function r() {
        var t = document.createElement("div");
        e.addClass(t, "yotpo-mobile-slides-container"),
        this.mobileSliderElement = document.createElement("div"),
        e.addClass(this.mobileSliderElement, "yotpo-mobile-slider"),
        this.mobileSliderElement.appendChild(t),
        this.productsElement.appendChild(this.mobileSliderElement)
    }
    function s(t, i, o, n) {
        for (var r = this.mobileSliderElement.querySelector(".yotpo-mobile-slides-container"), s = 0; s < t.length; s++) {
            var l = a.call(this, t[s], i, o);
            r.appendChild(l),
            n && 0 == s && e.addClass(l, d)
        }
    }
    function a(t, i, o) {
        var n = this
          , r = document.createElement("span");
        e.addClass(r, "yotpo-mobile-slide"),
        e.addClass(r, "yotpo-shoppable-product");
        var s = document.createElement("a");
        s.href = t.link,
        e.addEventListener(s, "click", function() {
            n.analyticsTracker.track("clicked_on", "shop_now")
        });
        var a = document.createElement("img");
        a.src = t.imageUrl,
        e.addClass(a, "yotpo-shoppable-product-image"),
        s.appendChild(a);
        var d = document.createElement("div");
        if (d.innerHTML = t.name,
        e.addClass(d, "yotpo-shoppable-product-name"),
        s.appendChild(d),
        i) {
            var u = l(t.score, t.reviewsCount);
            s.appendChild(u)
        }
        if (o) {
            var p = c(o);
            s.appendChild(p)
        }
        return r.appendChild(s),
        r
    }
    function l(t, i) {
        var o = document.createElement("div");
        e.addClass(o, "yotpo-shoppable-gallery-header-reviews-stars");
        var n = e.getStars(t);
        i || (i = 0);
        var r = document.createElement("span");
        return e.addClass(r, "yotpo-shoppable-product-reviews-count"),
        r.innerHTML = "(" + i + ")",
        n.appendChild(r),
        o.appendChild(n),
        o
    }
    function c(t) {
        var i = document.createElement("button");
        return e.addClass(i, "yotpo-shoppable-product-button"),
        i.innerHTML = t,
        i
    }
    var d = "yotpo-shoppable-separator";
    return t.prototype.adjustSize = function() {
        this.mobileSlider.adjustSize()
    }
    ,
    t.prototype.showElement = function(t, n, r, a, l) {
        return this.titleElement.innerHTML = "",
        t.length > 1 ? (e.removeClass(this.element, "yotpo-hidden"),
        this.titleElement.innerHTML = "Tagged products",
        s.call(this, t, n, r),
        i.call(this)) : e.addClass(this.element, "yotpo-hidden"),
        a && o.call(this, t, l, n, r),
        this.element
    }
    ,
    t.prototype.destroy = function() {
        for (var e = this.element; e.hasChildNodes(); )
            e.removeChild(e.firstChild);
        this.mobileSlider && this.mobileSlider.destroy()
    }
    ,
    t
}(Yotpo),
Yotpo.SuggestedTopics = function(e) {
    function t(t, i) {
        for (var o = t.getElementsByClassName("suggested-topic"), n = t.getElementsByClassName("suggested-topics-row"), r = null, s = null, a = null, l = null, c = 0; c < o.length; c++)
            e.hasClass(o[c], "suggested-topic-expand") || e.addEventListener(o[c], "click", function() {
                if (r = t.querySelector(".active-topic"),
                null !== r) {
                    var o = r.querySelector(".suggested-topic-text");
                    o && (s = o.innerHTML.trim()),
                    r.setAttribute("aria-checked", "false"),
                    e.removeClass(r, "active-topic")
                }
                l = this === r,
                l ? a = null : (a = this.querySelector(".suggested-topic-text").innerHTML.trim(),
                this.setAttribute("aria-checked", "true"),
                e.addClass(this, "active-topic")),
                i(s, a)
            }),
            e.onKeyDown(o[c], function() {
                var t = this
                  , i = t.parentElement
                  , o = t.nextElementSibling;
                if (o) {
                    var n = o.nextElementSibling;
                    if (e.isHidden(o)) {
                        if (n && !e.isHidden(n))
                            n.click(),
                            n.focus();
                        else if (i.nextElementSibling) {
                            var r = i.nextElementSibling.firstElementChild;
                            r.click(),
                            r.focus()
                        }
                    } else
                        o.click(),
                        o.focus()
                } else if (i.nextElementSibling) {
                    var r = i.nextElementSibling.firstElementChild;
                    r.click(),
                    r.focus()
                }
            }, [e.keyCodes.right]),
            e.onKeyDown(o[c], function() {
                var t = this
                  , i = t.parentElement
                  , o = t.previousElementSibling;
                if (o) {
                    var n = o.previousElementSibling;
                    if (e.isHidden(o)) {
                        if (n && !e.isHidden(n))
                            n.click(),
                            n.focus();
                        else if (i.previousElementSibling) {
                            var r = i.previousElementSibling.lastElementChild;
                            r.click(),
                            r.focus()
                        }
                    } else
                        o.click(),
                        o.focus()
                } else if (i.previousElementSibling) {
                    var s = i.previousElementSibling
                      , r = s.children[s.childElementCount - 2];
                    r.click(),
                    r.focus()
                }
            }, [e.keyCodes.left]);
        var d = t.querySelector(".suggested-topic-expand");
        d && (e.addEventListener(d, "click", function() {
            this.setAttribute("aria-expanded", "true");
            for (var t = 0; t < o.length; t++)
                e.removeClass(o[t], "yotpo-hidden");
            for (var t = 0; t < n.length; t++)
                e.removeClass(n[t], "yotpo-hidden");
            e.addClass(this, "yotpo-hidden")
        }),
        e.onEnterKeyDown(d, function() {
            d.previousElementSibling.focus()
        }))
    }
    var i = {};
    return i.bind = function(e, i) {
        for (var o = 0; o < e.length; o++)
            t(e[o], i)
    }
    ,
    i.resetSelectedTopic = function(t) {
        for (var i = 0; i < t.length; i++)
            e.removeClass(t[i], "active-topic")
    }
    ,
    i
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Cart = function(e) {
    function t(e) {
        var t = e.split("?")[0]
          , i = t.split("/");
        return i[i.length - 1]
    }
    function i(t, i) {
        e.ajax("/cart.js", function(e) {
            var e = JSON.parse(e);
            if (e && e.currency) {
                var n;
                n = t.price_min == t.price_max ? o(t.price / 100, e.currency) : o(t.price_min / 100, e.currency) + " - " + o(t.price_max / 100, e.currency),
                i(!0, n)
            } else
                i(!1)
        })
    }
    function o(e, t) {
        var i = e.toLocaleString(navigator.language, {
            style: "currency",
            currency: t
        });
        return e % 1 === 0 && (i = i.slice(0, -3)),
        i
    }
    var n = {};
    return n.getProductVariants = function(o, n) {
        var r = t(o);
        e.ajax("/products/" + r + ".js", function(e) {
            var t = e ? JSON.parse(e) : null;
            t && t.options && t.variants ? i(t, function(e, i) {
                var o = {
                    title: t.title,
                    images: t.images,
                    image: t.featured_image,
                    options: t.options,
                    variants: t.variants
                };
                e && (o.price = i),
                n(!0, o)
            }) : n(!1)
        })
    }
    ,
    n.addToCart = function(t, o) {
        var n = {
            id: t
        };
        n = JSON.stringify(n);
        var r = function(e) {
            var e = JSON.parse(e);
            e && e.id ? i(e, function(t, i) {
                t && (e.product_price = i),
                o(!0, e)
            }) : o(!1)
        };
        e.ajax("/cart/add.js", r, "POST", n, void 0, {
            requestHeaders: {
                "Content-type": "application/json"
            }
        })
    }
    ,
    n
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.CollapsibleElement = function(e) {
    function t(e, t, i) {
        var o = e.getAttribute("yotpo-content-collapsed");
        if (null !== o)
            return !1;
        var n = e.getElementsByClassName(i)[0]
          , r = n.innerHTML;
        return r.length > t
    }
    function i(e, t) {
        function i() {
            var e = r > -1 && -1 === s && l > -1
              , t = s > -1 && -1 === s && a > -1;
            return e || t
        }
        var o = e.substr(0, t)
          , n = e.substr(t)
          , r = o.lastIndexOf("<")
          , s = o.lastIndexOf(">");
        r > s && (s = -1);
        var a = n.indexOf("<")
          , l = n.indexOf(">");
        return l > a && a > -1 && (l = -1),
        i() ? r : t
    }
    function o(t, o, r) {
        var a = t.getElementsByClassName(r)[0]
          , l = a.innerHTML;
        o = i(l, o);
        var c = s(a.id, l)
          , d = l.substring(0, o) + "<span class='yotpo-read-more' data-position='closed' aria-expanded='false' role='button' tabindex='0' aria-labelledby='" + a.id + "-read-more'>..." + e.texts.read_more + "</span><span class='sr-only' aria-hidden='true' id='" + a.id + "-read-more'>" + e.texts.read_more_about + " " + c + "</span>"
          , u = '<p class="rest-content-collapsed">' + l.substring(o) + "<span class='yotpo-read-more' data-position='opened' aria-expanded='true' role='button' tabindex='0' aria-labelledby='" + a.id + "-read-less'>" + e.texts.read_less + "</span><span class='sr-only' aria-hidden='true' id='" + a.id + "-read-less'>" + e.texts.read_less_about + " " + c + "</span></p>";
        return a.innerHTML = t.classList.contains("yotpo-review") ? n(l, d, u, o, a.id) : d + u,
        !0
    }
    function n(t, i, o, n, r) {
        var a = t.substring(0, n)
          , l = /<span class="[^"]*?highlight-text[^"]*?">(.*?)/g
          , c = /<\/span>/g
          , d = s(r, t)
          , u = (a.match(l) || []).length
          , p = (a.match(c) || []).length;
        return u > p && (i = t.substring(0, n) + "</span><span class='yotpo-read-more' data-position='closed' aria-expanded='false' role='button' aria-labelledby='" + r + "-read-more'>..." + e.texts.read_more + "</span><span class='sr-only' aria-hidden='true' id='" + r + "-read-more'>" + e.texts.read_more_about + " " + d + " </span>",
        o = '<p class="rest-content-collapsed"><span class="highlight-text">' + t.substring(n) + "<span class='yotpo-read-more' data-position='opened' aria-expanded='true' role='button' aria-labelledby='" + r + "-read-less'>" + e.texts.read_less + "</span><span class='sr-only' aria-hidden='true' id='" + r + "-read-less'>" + e.texts.read_less_about + " " + d + "</span></p>"),
        i + o
    }
    function r(t, i) {
        var o = t.getElementsByClassName("rest-content-collapsed")[0]
          , n = t.getElementsByClassName("yotpo-read-more")
          , r = !1;
        "function" == typeof i && (r = !0);
        for (var s = function() {
            if ("closed" == this.getAttribute("data-position")) {
                var n = t.querySelector(".yotpo-read-more[data-position=opened]");
                this.style.display = "none",
                e.Animations.fadeIn(o, "1000"),
                n.focus(),
                r && i()
            } else {
                var s = t.querySelector(".yotpo-read-more[data-position=closed]");
                e.Animations.fadeOut(o, "500"),
                setTimeout(function() {
                    s.style.display = "inline",
                    s.focus()
                }, 500)
            }
        }, a = 0; a < n.length; ++a)
            n[a].onclick = s,
            e.onEnterKeyDown(n[a], s)
    }
    function s(e, t) {
        var i = document.getElementById(e + "-ada-title-text");
        return i || (i = document.getElementById(e + "-ada-summary-text")),
        i ? i.innerText || a(t, 40) : a(t, 40)
    }
    function a(e, t) {
        if (!e || e.length < t)
            return e || "";
        var i = e.substr(0, t)
          , o = i.lastIndexOf(" ");
        return o > 0 && (i = i.substr(0, o)),
        i
    }
    var l = {};
    return l.bind = function(e, i, n, s) {
        t(e, i, n) && (o(e, i, n),
        r(e, s),
        e.setAttribute("yotpo-content-collapsed", !0))
    }
    ,
    l
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.DynamicLayout = function(e) {
    function t(t, r) {
        this.elementsContainer = t,
        this.settings = r,
        i.call(this),
        e.isMobile() ? o.call(this) : n.call(this),
        r.animation && s.call(this)
    }
    function i() {
        this.clickableElements = this.elementsContainer.querySelectorAll(this.settings.clickable_elements_selector || a),
        this.expandableElementContainer = this.elementsContainer.querySelector(this.settings.expandable_element_container_selector || l)
    }
    function o() {
        this.mobileSlider = new e.Modules.MobileSlide(this.elementsContainer,{
            slidesSelector: this.settings.clickable_elements_selector || a,
            fixedSlideWidth: this.settings.mobile_slides_fixed_width || d
        })
    }
    function n() {
        this.expandableElementContainer && (this.expandableElementContainer.onclick = r.bind(this))
    }
    function r() {
        for (var t = 0; t < this.clickableElements.length; t++)
            e.removeClass(this.clickableElements[t], "yotpo-hidden");
        e.addClass(this.expandableElementContainer, "yotpo-hidden")
    }
    function s() {
        for (var e = 0; e < this.clickableElements.length; e++)
            this.clickableElements[e].complete ? (this.clickableElements[e].style.transition = "opacity 1s",
            this.clickableElements[e].style.opacity = "1") : this.clickableElements[e].onload = function() {
                this.style.transition = "opacity 1s",
                this.style.opacity = "1"
            }
            ;
        if (this.expandableElementContainer) {
            var t = this.expandableElementContainer.querySelector(this.settings.expandable_element_selector || c);
            t.complete ? (t.style.transition = "opacity 1s",
            t.style.opacity = "0.8") : t.onload = function() {
                this.style.transition = "opacity 1s",
                this.style.opacity = "0.8"
            }
        }
    }
    var a = ".media-review"
      , l = ".expandable-image-container"
      , c = ".expandable-image"
      , d = 100;
    return t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.ButtonEndlessScroll = function(e) {
    function t(t, i, o, n, r) {
        var s = EndlessScroll(e);
        return new s(t,i,o,n,!0,r)
    }
    return t
}(Yotpo),
Yotpo.Modules.InviewEndlessScroll = function(e) {
    function t(t, i, o, n) {
        var r = EndlessScroll(e);
        return new r(t,i,o,n,!1)
    }
    return t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Event = function(e) {
    var t = {};
    return t.on = function(e, t) {
        this.callbacks = this.callbacks || {},
        this.callbacks[e] = this.callbacks[e] || [],
        this.callbacks[e].push(t)
    }
    ,
    t.trigger = function(t, i, o) {
        var n = this;
        e.forEach(n.callbacks && n.callbacks[t] || [], function(e) {
            e.call(n, i, o)
        })
    }
    ,
    t.removeEvent = function(e) {
        var t = this;
        t.callbacks[e] && delete t.callbacks[e]
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.GallerySettings = function(e) {
    function t() {}
    function i(e, t) {
        t.use_div_settings = e.hasAttribute("data-source") || e.classList.contains("yotpo-pictures-widget")
    }
    function o(e, t) {
        var i = e.getAttribute("data-album-id");
        i && (t.album_id = i,
        t.sorting_enabled = !1)
    }
    function n(e, t) {
        t.source = e.getAttribute("data-source") || t.source,
        "all" === t.source && (t.source = ["yotpo_reviews", "instagram", "onsite_upload", "manual_upload", "import"]),
        t.sort = e.getAttribute("data-sort") || t.sort
    }
    function r(e, t) {
        t.title = t.title || {},
        t.title.show_title = e.getAttribute("data-title") ? "1" === e.getAttribute("data-title") : t.title.show_title,
        t.title.text = e.getAttribute("data-title-text") || t.title.text,
        t.title.color = e.getAttribute("data-title-color") || t.title.color,
        t.title.alignment = e.getAttribute("data-title-alignment") || t.title.alignment,
        t.title.font_size = (e.getAttribute("data-title-font-size") || t.title.font_size) + "px",
        t.title.mobile_font_size = (e.getAttribute("data-title-mobile-font-size") || t.title.mobile_font_size) + "px"
    }
    function s(e, t) {
        t.button = {},
        t.button.show_button = e.getAttribute("data-upload-button") ? "1" === e.getAttribute("data-upload-button") : !1,
        t.button.button_text = e.getAttribute("data-upload-button-text"),
        t.button.text_color = e.getAttribute("data-upload-button-text-color"),
        t.button.background_color = e.getAttribute("data-upload-button-background-color"),
        t.button.font_family = e.getAttribute("data-upload-button-font-family"),
        t.title.alignment = !t.title.alignment || !t.title.show_title && t.button.show_button ? "left" : t.title.alignment,
        t.button.alignment = "right" === t.title.alignment.toLowerCase() ? "left" : "left" === t.title.alignment.toLowerCase() ? "right" : "center"
    }
    function a(e, t) {
        t.hover = t.hover || {},
        t.hover.background_color = e.getAttribute("data-hover-color") || t.hover.background_color,
        t.hover.opacity = e.getAttribute("data-hover-opacity") || t.hover.opacity,
        t.hover.show_icon = e.getAttribute("data-hover-icon") ? "true" === e.getAttribute("data-hover-icon") : t.hover.show_icon
    }
    function l(e, t) {
        t.lightbox = t.lightbox || {}
    }
    function c(e, t) {
        t.cta = e.getAttribute("data-cta") || t.cta || "1",
        t.cta_text = e.getAttribute("data-cta-text") || t.cta_text,
        t.cta_color = e.getAttribute("data-cta-color") || t.cta_color
    }
    function d(e, t) {
        t.use_full_width = e.getAttribute("data-full-width") ? "1" === e.getAttribute("data-full-width") : t.use_full_width,
        t.auto_play = e.getAttribute("data-auto-slide") ? "1" === e.getAttribute("data-auto-slide") : t.auto_play,
        t.per_page = e.getAttribute("data-number-of-images") || t.per_page,
        t.spacing = e.getAttribute("data-spacing") || t.spacing,
        t.rounded_corners = "1" === String(t.spacing) ? "3px" : "0",
        t.layout_settings = t.layout_settings || {},
        t.layout_settings.mode = e.getAttribute("data-layout") || t.layout_settings.mode,
        e.getAttribute("data-layout-rows") && (t.layout_settings.rows = e.getAttribute("data-layout-rows"),
        t.layout_settings.mode = "num_of_rows"),
        e.getAttribute("data-layout-scroll") && (t.layout_settings.load_more_button = "1" === e.getAttribute("data-layout-scroll") ? 0 : 1),
        t.layout = t.layout || {},
        e.getAttribute("data-num-of-images-to-display") && (t.layout.num_of_images_to_display = e.getAttribute("data-num-of-images-to-display"))
    }
    function u(e, t) {
        t.load_lightbox_sync = e.getAttribute("data-preview") ? "true" === e.getAttribute("data-preview") : !1,
        t.is_preview = "true" === e.getAttribute("data-preview"),
        t.is_css_editor = "true" === e.getAttribute("data-css-editor"),
        t.is_preview && (t.timestamp = Date.now())
    }
    return t.prototype.overrideSettingsFromDiv = function(e, t) {
        i(e, t),
        n(e, t),
        r(e, t),
        a(e, t),
        l(e, t),
        c(e, t),
        d(e, t),
        u(e, t),
        o(e, t),
        s(e, t)
    }
    ,
    t.prototype.getDivSettings = function(e) {
        var t = {};
        return t.album_id = e.getAttribute("data-album-id"),
        t.layout_type = e.getAttribute("data-layout-type"),
        t.lightbox = {
            cta_type: e.getAttribute("data-lightbox-cta-type"),
            cta_text: e.getAttribute("data-lightbox-cta-text"),
            cta_color: e.getAttribute("data-lightbox-cta-color"),
            cta_transparent_background: e.getAttribute("data-lightbox-cta-transparent-background") ? "true" === e.getAttribute("data-lightbox-cta-transparent-background") : void 0,
            cta_font_weight: e.getAttribute("data-lightbox-cta-font-weight"),
            cta_border_radius: e.getAttribute("data-lightbox-cta-border-radius"),
            cta_text_color: e.getAttribute("data-lightbox-cta-text-color"),
            cta_outline: e.getAttribute("data-lightbox-cta-outline"),
            display_star_rating: e.getAttribute("data-lightbox-star-rating") ? "true" === e.getAttribute("data-lightbox-star-rating") : void 0,
            star_rating: e.getAttribute("data-star-rating"),
            display_caption: e.getAttribute("data-lightbox-caption") ? "true" === e.getAttribute("data-lightbox-caption") : void 0,
            display_date: e.getAttribute("data-lightbox-date") ? "true" === e.getAttribute("data-lightbox-date") : void 0,
            display_tagged_products: e.getAttribute("data-lightbox-tagged-product") ? "true" === e.getAttribute("data-lightbox-tagged-product") : void 0
        },
        t.font = {
            font_family: e.getAttribute("data-gallery-font-family"),
            font_weight: e.getAttribute("data-gallery-font-weight")
        },
        t.title = {
            text: e.getAttribute("data-title-text"),
            color: e.getAttribute("data-title-color"),
            alignment: e.getAttribute("data-title-alignment"),
            font_size: e.getAttribute("data-title-font-size"),
            mobile_font_size: e.getAttribute("data-title-mobile-font-size")
        },
        t.title.show_title = e.getAttribute("data-title") && "1" === e.getAttribute("data-title"),
        t.upload_button = {
            show_button: e.getAttribute("data-upload-button") && "true" === e.getAttribute("data-upload-button"),
            button_text: e.getAttribute("data-upload-button-text"),
            text_color: e.getAttribute("data-upload-button-text-color"),
            background_color: e.getAttribute("data-upload-button-background-color"),
            font_family: e.getAttribute("data-upload-button-font-family")
        },
        t.title.alignment && (t.button = {
            alignment: "right" === t.title.alignment.toLowerCase() ? "left" : "left" === t.title.alignment.toLowerCase() ? "right" : "center"
        }),
        t.hover = {
            background_color: e.getAttribute("data-hover-color"),
            opacity: e.getAttribute("data-hover-opacity"),
            show_icon: e.getAttribute("data-hover-icon") ? "true" === e.getAttribute("data-hover-icon") : void 0,
            icon_color: e.getAttribute("data-hover-icon-color"),
            display_cta: e.getAttribute("data-hover-cta") ? "true" === e.getAttribute("data-hover-cta") : void 0,
            cta_text: e.getAttribute("data-hover-cta-text"),
            cta_color: e.getAttribute("data-hover-cta-color"),
            cta_transparent_background: e.getAttribute("data-hover-cta-transparent-background") ? "true" === e.getAttribute("data-hover-cta-transparent-background") : void 0,
            cta_font_weight: e.getAttribute("data-hover-cta-font-weight"),
            cta_border_radius: e.getAttribute("data-hover-cta-border-radius"),
            cta_text_color: e.getAttribute("data-hover-cta-text-color"),
            cta_outline: e.getAttribute("data-hover-cta-outline")
        },
        t.video_hover = {
            hover_type: e.getAttribute("data-video-hover")
        },
        t.use_full_width = e.getAttribute("data-full-width") ? "1" === e.getAttribute("data-full-width") : t.use_full_width,
        t.layout = {
            show_more: e.getAttribute("data-layout-show-more"),
            spacing: e.getAttribute("data-spacing")
        },
        e.getAttribute("data-auto-slide") && (t.layout.auto_slide = "1" === e.getAttribute("data-auto-slide")),
        e.getAttribute("data-layout-rows") && (t.layout.rows = e.getAttribute("data-layout-rows")),
        e.getAttribute("data-images-per-row") && (t.layout.images_per_row = e.getAttribute("data-images-per-row")),
        e.getAttribute("data-num-of-images-to-display") && (t.layout.num_of_images_to_display = e.getAttribute("data-num-of-images-to-display")),
        t.rounded_corners = "1" === String(t.spacing) ? "3px" : "0",
        u(e, t),
        t
    }
    ,
    t.prototype.getGallerySettings = function(t) {
        var i = t.querySelector("#generic_gallery_settings");
        if (!i)
            return null;
        try {
            var o = JSON.parse(i.innerHTML);
            return o.gallery_id = i.dataset.galleryId,
            o
        } catch (n) {
            return e.safeConsole("Failed to parse gallery settings: " + n, "error"),
            null
        }
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Handle = function(e) {
    var t = {};
    return t.write = function(t) {
        function i(t, i, o, n, r, s, a, l, c) {
            t.push({
                type: o,
                initiators: t[0].affected.querySelectorAll(i),
                action: function() {
                    if (("function" != typeof l || l()) && (e.currentAnalytics.trackEvent(n, r, s, c),
                    1 == a))
                        for (var t, i = 0; t = this.initiators[i]; ++i)
                            e.removeEventListener(t, this.type, this.handler)
                }
            })
        }
        function o(e) {
            for (var t = 0; t < r.length; t++)
                if (r[t].name == e)
                    return r[t]
        }
        var n = this
          , r = []
          , s = n.element.getElementsByClassName("write-" + t + "-wrapper")[0];
        if (s) {
            n.buttons = n.element.querySelectorAll(".write-button");
            for (var a = 0; a < n.buttons.length; ++a)
                e.onKeyDown(n.buttons[a], function() {
                    var e = this
                      , t = e.nextElementSibling;
                    t && (t.click(),
                    t.focus())
                }, [e.keyCodes.right]),
                e.onKeyDown(n.buttons[a], function() {
                    var e = this
                      , t = e.previousElementSibling;
                    t && (t.click(),
                    t.focus())
                }, [e.keyCodes.left]);
            var l = t + "s";
            "reviews" == l && (l = n.analyticsCategory);
            var c = n._controller.getUserSetting("vendor_review_creation") ? n._controller.getUserSetting("vendor_review_creation").settings : null
              , d = !1;
            if (c && (d = function() {
                return 0 != Object.keys(n._controller.getTrustedVendorsData()).length
            }
            ),
            n.forms = n.forms || {},
            n.forms[t + "s"] = new e.Form(n,s),
            r.push({
                name: "show_resource_content_field",
                type: "click",
                initiators: n.element.getElementsByClassName("write-" + t + "-button"),
                affected: s,
                validate: null != c,
                skipAnimation: function() {
                    return c && "1" == c.require_external_sign_in && "review" == t && 0 == Object.keys(n._controller.getTrustedVendorsData()).length
                },
                effect: "slideDown",
                action: function() {
                    n.get("messages").hideAll();
                    const i = n.element.querySelector(".write-" + t + "-button");
                    i && i.setAttribute("aria-expanded", "true");
                    var o = n.get("tabs").getTab(t + "s");
                    o && e.simulateClickEvent(o);
                    var r = n.forms[t + "s"];
                    if (!r.visible()) {
                        r.trigger("opened"),
                        e.currentAnalytics.trackEvent(l, "clicked_on", "write");
                        var s = this.affected.querySelector(".form-group").getAttribute("data-custom-form-id");
                        s && e.currentAnalytics.trackEvent(l, "shown", "custom_form", s)
                    }
                    var a = !0
                      , d = !0
                      , u = ".yotpo-footer,.connect-wrapper";
                    c ? (d = "1" == c.show_name_field,
                    d && (u += ",.name-input")) : u += ",.name-input,.email-input";
                    var p = r.element.querySelectorAll(u);
                    if (e.addClassToElements(p, "visible"),
                    e.setElementsVisibility(p, "block"),
                    c) {
                        var g = n._controller.getTrustedVendorsData()
                          , r = n.forms[t + "s"];
                        if (d) {
                            var h = r.getInputField("display_name");
                            g.display_name && "" == h.value && r.setInputField("display_name", g.display_name)
                        }
                        (Object.keys(g).length > 0 || "function" == typeof r.writeContentCallback) && (a = !1)
                    }
                    a || (r.element.getElementsByClassName("email-input")[0].style.display = "none"),
                    setTimeout(function() {
                        if (t + "s" == "reviews") {
                            var e = n.forms[t + "s"].getElement().getElementsByClassName("stars-wrapper");
                            e && e[0].children.length > 0 && e[0].children[0].focus()
                        } else if (t + "s" == "questions") {
                            var i = n.forms[t + "s"].getElement().querySelector("#yotpo_input_question_content");
                            i && i.focus()
                        }
                    }, 350),
                    n.forms[t + "s"].activate()
                }
            }),
            r[0].affected) {
                r.push({
                    name: "show_name_input_field",
                    type: ["keyup", "paste"],
                    initiators: r[0].affected.querySelectorAll(".write-" + t + "-content .form-element .y-input"),
                    affected: r[0].affected.getElementsByClassName("yotpo-footer")[0],
                    skipAnimation: function() {
                        return c && !("1" == c.show_name_field)
                    },
                    effect: "fadeIn",
                    action: function() {
                        if (c) {
                            var e = n._controller.getTrustedVendorsData()
                              , i = n.forms[t + "s"]
                              , r = i.getInputField("display_name");
                            if (e.display_name && "" == r.value && i.setInputField("display_name", e.display_name),
                            Object.keys(e).length > 0 || "function" == typeof i.writeContentCallback) {
                                var s = o("enable_form_submit");
                                s && s.handler()
                            }
                        }
                    }
                }),
                r.push({
                    name: "show_social_sign_in",
                    type: ["keyup", "paste"],
                    initiators: r[1].initiators,
                    affected: r[1].affected.getElementsByClassName("socialize-wrapper")[0],
                    skipAnimation: d,
                    effect: "fadeIn"
                }),
                r.push({
                    name: "show_email_input_field",
                    type: ["keyup", "paste"],
                    initiators: r[1].affected ? r[1].affected.getElementsByClassName("name-input") : [],
                    affected: r[1].affected ? r[1].affected.getElementsByClassName("email-input")[0] : [],
                    effect: "fadeIn",
                    skipAnimation: d,
                    action: function() {
                        n.forms[t + "s"].submitButton.style.marginTop = "15px"
                    }
                });
                var u = r.length - 1
                  , p = n._controller.getUserSetting("css_preview");
                "undefined" != typeof p && p || r.push({
                    name: "enable_form_submit",
                    type: ["keyup", "paste"],
                    initiators: [r[u].affected],
                    affected: null,
                    action: function() {
                        n.forms[t + "s"].activate()
                    }
                }),
                i(r, ".write-review .y-input[name=review_title]", "click", l, "clicked_on", "title_field", !1),
                i(r, ".write-review .y-input[name=review_title]", "keydown", l, "typed", "title_field", !0),
                i(r, ".write-review .y-input[name=review_content]", "click", l, "clicked_on", "body_field", !1),
                i(r, ".write-review .y-input[name=review_content]", "keydown", l, "typed", "body_field", !0),
                i(r, ".write-review .y-input[name=display_name]", "click", l, "clicked_on", "name_field", !1),
                i(r, ".write-review .y-input[name=display_name]", "keydown", l, "typed", "name_field", !0),
                i(r, ".write-review .y-input[name=email]", "click", l, "clicked_on", "email_field", !1),
                i(r, ".write-review .y-input[name=email]", "keydown", l, "typed", "email_field", !0),
                i(r, ".yotpo-submit", "click", l, "clicked_on", "post_button", !0),
                i(r, ".write-review .y-input[name=content]", "click", l, "clicked_on", "name_field", !1);
                var g = function() {
                    return c && Object.keys(n._controller.getTrustedVendorsData()).length > 0
                };
                i(r, ".yotpo-submit", "click", l, "clicked_on", "post_button", !0, g, "verified")
            }
            e.forEach(r, function(t) {
                for (var i = 0; i < t.initiators.length; ++i)
                    t.handler = function(i) {
                        return function() {
                            if (t.validate && "function" == typeof n.writeContentCallback && 0 === Object.keys(n._controller.getTrustedVendorsData()).length)
                                return void n.writeContentCallback(this);
                            "function" == typeof t.action && t.action.call(t, this);
                            var o = t.skipAnimation ? t.skipAnimation() : !1;
                            o || !i || e.hasClass(i, "visible") && "toggleSlide" != t.effect || (e.toggleClass(i, "visible"),
                            t.effect && (e.Animations[t.effect](i),
                            e.hasClass(n.getElement(), "testimonials") && e.scrollTo(n.getElement().querySelectorAll(".yotpo-modal-body")[0], 0, 1300)))
                        }
                    }(t.affected),
                    t.type instanceof Array || (t.type = [t.type]),
                    e.forEach(t.type, function(o) {
                        e.addEventListener(t.initiators[i], o, t.handler)
                    })
            })
        }
    }
    ,
    t.action = function() {
        for (var t = this.querySelectorAll(".yotpo-action[data-type]"), i = 0; i < t.length; ++i) {
            var o = t[i]
              , n = o.getAttribute("data-type");
            o.onclick = function() {
                if (e.bindAnimation(this),
                "toggleFade" == n) {
                    var t = o.getAttribute("aria-expanded")
                      , i = "true" == t;
                    o.setAttribute("aria-expanded", (!i).toString())
                }
            }
            ,
            e.onEnterKeyDown(o, function() {
                e.bindAnimation(this)
            })
        }
    }
    ,
    t.tooltip = function() {
        for (var t = this.querySelectorAll(".yotpo-action-hover[data-type]"), i = 0; i < t.length; ++i)
            t[i].onfocus = function() {
                e.bindAnimation(this, "fadeIn")
            }
            ,
            t[i].onblur = function() {
                e.bindAnimation(this, "fadeOut")
            }
            ,
            t[i].onmouseover = function() {
                e.bindAnimation(this, "fadeIn")
            }
            ,
            t[i].onmouseout = function() {
                e.bindAnimation(this, "fadeOut")
            }
    }
    ,
    t.sources = function() {
        var t = this
          , i = t.get("sources");
        for (var o in i)
            i.hasOwnProperty(o) && "function" == typeof i[o].getType && i[o].on("updated", function(i) {
                return function() {
                    var o = i.getType()
                      , n = t.get("messages");
                    if (i.getTemplate()) {
                        t.get("forms")[o].clean(),
                        n.show("share"),
                        n.scrollIntoView("share");
                        var r = o.substring(0, o.length - 1)
                          , s = t.getElement().querySelector(".write-" + r + "-button")
                          , a = t.getElement().querySelector(".yotpo-first-" + r);
                        a && (e.removeClass(s, "yotpo-hidden"),
                        e.addClass(a, "yotpo-hidden"))
                    }
                    e.Modules.Handle.popup.call(i)
                }
            }(i[o]));
        for (var n, r = t.element.querySelectorAll(".yotpo-icon-yotpo-logo"), s = 0; n = r[s]; s++)
            e.addEventListener(n, "click", function() {
                e.currentAnalytics.trackEvent(t.analyticsCategory, "clicked_on", "widget_branding_link")
            })
    }
    ,
    t.desktopDropDown = function(t, i, o) {
        var n = this;
        void 0 === n.filtersDropDowns && (n.filtersDropDowns = []);
        for (var r = i.getElementsByClassName(o), s = 0; s < r.length; ++s) {
            var a = new e.Select(r[s]);
            a.defaultAnswerItem = a.element.querySelector("[data-is-default-answer=true]"),
            a.currentSelectedItem = a.element.querySelector('li[data-value="' + a.element.getAttribute("data-value") + '"]'),
            n.filtersDropDowns.push(a),
            a.on("change", function(e) {
                if (this.previousSelectedItem = this.currentSelectedItem,
                !this.previousSelectedItem) {
                    var i = this.getElement().querySelector(".selected-item");
                    i && (this.previousSelectedItem = i.parentElement)
                }
                this.currentSelectedItem = e.element,
                t.call(n, this.element, this.currentSelectedItem, this.previousSelectedItem)
            })
        }
    }
    ,
    t.select = function() {
        for (var t = this, i = t.getElement().getElementsByClassName("yotpo-nav-dropdown"), o = 0; o < i.length; ++o) {
            var n = new e.Select(i[o]);
            n.on("change", function(i) {
                return function() {
                    for (var o = t.getActiveSource(), n = i.getType().split(" "), r = i.getValue().split(" "), s = 0; s < n.length; ++s)
                        o.settings[n[s]] = r[s];
                    o.settings[i.getType()] = i.getValue().split(","),
                    o.settings.page = 1,
                    o.refresh(),
                    e.togglePreLoader(o.getElement())
                }
            }(n))
        }
    }
    ,
    t.mobileMenu = function() {
        var t = this.getElement().getElementsByClassName("yotpo-visible-mobile")[0];
        if (t) {
            var i = t.parentNode.getElementsByClassName("yotpo-menu-mobile-collapse");
            e.addEventListener(t, "click", function() {
                for (var t = 0; t < i.length; ++t)
                    e.Animations.toggleSlide(i[t])
            })
        }
    }
    ,
    t.popup = function() {
        for (var t = this, i = "function" == typeof t.getElement ? t.getElement() : t, o = i.getElementsByClassName("popup-link"), n = 0; n < o.length; ++n) {
            var r = void 0 != window.screenLeft ? window.screenLeft : screen.left
              , s = void 0 != window.screenTop ? window.screenTop : screen.top
              , a = {
                height: parseInt(o[n].getAttribute("data_height") || 400),
                width: parseInt(o[n].getAttribute("data_width") || 580),
                top: parseInt(o[n].getAttribute("data_top") || 200),
                left: parseInt(o[n].getAttribute("data_left") || 400)
            }
              , l = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width
              , c = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
            a.left = l / 2 - a.width / 2 + r,
            a.top = c / 2 - a.height / 2 + s,
            o[n].onclick = function(t) {
                return function() {
                    for (var i = "", o = this.className.split(" "), n = 0; n < o.length; n++)
                        ("yotpo-custom-badge-link" === o[n] || "yotpo-toa-link" === o[n]) && (i += o[n]);
                    if (i) {
                        var r = e.globals[i];
                        (!r || r.closed) && (r = e.globals[i] = window.open(this.href, "", "status=no,toolbar=no,location=no,menubar=no,directories=no,scrollbars=yes,resizeable=yes,height=" + t.height + ",width=" + t.width + ",top=" + t.top + ",left=" + t.left)),
                        window.focus && r.focus()
                    } else
                        window.open(this.href, "", "status=no,toolbar=no,location=no,menubar=no,directories=no,scrollbars=yes,resizeable=yes,height=" + t.height + ",width=" + t.width + ",top=" + t.top + ",left=" + t.left);
                    return !1
                }
            }(a)
        }
    }
    ,
    t.semiWhiteLabel = function() {
        var e = this.getElement().querySelector(".yotpo-semi-label");
        e && t.tooltip.call(e)
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Helper = function(e) {
    var t = {}
      , i = {
        initialized: function() {
            return this.getElement().getElementsByClassName("yotpo-display-wrapper").length > 0
        }
    };
    return t.state = function(e) {
        return "undefined" != typeof e && (this._state = e),
        this._state
    }
    ,
    t.is = function(e) {
        return i[e] ? i[e].call(this) : this.state() == e
    }
    ,
    t.findAncestorByClass = function(t, i) {
        do
            if (t = t.parentElement,
            !t)
                break;
        while (!e.hasClass(t, i));
        return t
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.KalturaManager = function(e) {
    function t(e, t, i) {
        this.element = e,
        this.videoCredentials = t.userSettings.video_support.settings,
        this.isReviews = i
    }
    function i(t, i) {
        var o, n;
        t ? (o = "lightbox-" + this.element.dataset.imageId,
        n = !0) : (o = this.element.dataset.imageId,
        n = !1);
        try {
            this.kalturaPlayer = KalturaPlayer.setup({
                targetId: o,
                disableUserCache: !0,
                provider: {
                    partnerId: this.element.dataset.sourcePartnerId || this.videoCredentials.partner_id,
                    uiConfId: this.element.dataset.sourcePlayerId || this.videoCredentials.player_id
                },
                player: {
                    playback: {
                        preload: "auto",
                        autoplay: n,
                        pictureInPicture: !1,
                        muted: i,
                        volume: .5
                    }
                }
            })
        } catch (r) {
            this.element.style.background = "url(" + e.getDefualtImage().size_656 + ") 0px center",
            this.element.style.backgroundSize = "cover"
        }
    }
    function o(t, i) {
        var o = Math.floor(t.offsetWidth);
        return i && 0 == o && (o = e.isMobile() ? 80 : 130),
        {
            thumbWidth: o,
            sliceTime: 230,
            element: t,
            bindEvents: function() {
                var t = this;
                this.element.setAttribute("data-kframe", 0),
                this.element.setAttribute("data-ktimer", 0),
                this.element.addEventListener("mouseover", function(e) {
                    t.mouseOver.call(t, e)
                }),
                this.element.addEventListener("touchstart", function(e) {
                    t.mouseOver.call(t, e)
                }, e.supportsPassive() ? {
                    passive: !0
                } : !1),
                this.element.addEventListener("mouseout", function(e) {
                    t.mouseOut.call(t, e)
                }),
                this.element.addEventListener("touchend", function(e) {
                    t.mouseOut.call(t, e)
                }),
                this.element.addEventListener("mouseup", function(e) {
                    t.mouseOut.call(t, e)
                })
            },
            mouseOver: function(e) {
                var t = e.target;
                t.setAttribute("data-loop", 1),
                this.loopthumb(t)
            },
            loopthumb: function(e) {
                var t = parseInt(e.getAttribute("data-loop"));
                if (t > 0) {
                    var i = parseInt(e.getAttribute("data-kframe")) - this.thumbWidth;
                    e.style.backgroundPosition = i + "px",
                    e.setAttribute("data-kframe", i);
                    var o = this
                      , n = setTimeout(function() {
                        o.loopthumb(e)
                    }, o.sliceTime);
                    e.setAttribute("data-ktimer", n)
                }
            },
            mouseOut: function(e) {
                var t = e.target;
                t.setAttribute("data-loop", 0),
                t.style.backgroundPosition = "0px",
                t.setAttribute("data-kframe", 0),
                t.setAttribute("data-ktimer", 0)
            }
        }
    }
    function n(t, i) {
        function o(t, i, o) {
            eventContext = {
                percentage: t.currentTarget.currentTime / t.currentTarget.duration,
                video_duration: t.currentTarget.duration,
                currentTime: t.currentTarget.currentTime,
                gallery_id: o,
                partner_id: t.currentTarget.dispatchTarget._provider._partnerId,
                entryId: t.currentTarget.dispatchTarget.dispatchTarget._mediaInfo.entryId
            },
            e.currentAnalytics.trackEvent("dedicated_page_popup", i, "video", null, eventContext)
        }
        function n(e) {
            var i = e.currentTarget.getBoundingClientRect()
              , o = e.clientX
              , n = window.getComputedStyle(e.currentTarget, null)
              , r = parseInt(n.blockSize, 10)
              , s = parseInt(n.paddingBlockStart, 10)
              , a = o - i.left - s
              , l = a / r;
            l = parseFloat(l.toFixed(2)),
            1 >= l && l >= 0 && (t.muted && l > 0 && (t.muted = !1),
            l || (t.muted = !0),
            t.volume = l,
            c.style.height = 100 * l + "%")
        }
        var r = i.getAttribute("data-image-id")
          , s = document.getElementsByClassName("playkit-volume-control-bar")[0]
          , a = s.cloneNode(!0)
          , l = s.parentNode;
        l.appendChild(a),
        l.removeChild(s);
        var c = a.getElementsByClassName("playkit-progress")[0];
        l.addEventListener("mouseleave", function() {
            a.onmousemove = null
        }),
        a.addEventListener("mouseup", function(e) {
            n(e),
            a.onmousemove = null
        }),
        a.addEventListener("mousedown", function() {
            a.onmousemove = function(e) {
                n(e)
            }
        }),
        t.addEventListener(t.Event.VOLUME_CHANGE, function() {
            t.muted || (c.style.height = 100 * t.volume + "%")
        }),
        t.addEventListener(t.Event.MUTE_CHANGE, function(e) {
            t.muted ? (c.style.height = "0px",
            action = "video_muted") : (c.style.height = 100 * t.volume + "%",
            action = "video_unmuted"),
            o(e, action, r)
        }),
        t.addEventListener(t.Event.TIME_UPDATE, function(e) {
            e.currentTarget.currentTime >= t.nextSample && (t.nextSample = 2 * t.nextSample,
            o(e, "timeupdate", r))
        })
    }
    function r() {
        var e = document.getElementsByClassName("kaltura-player-container");
        if (e)
            for (var t = new MutationObserver(function(e) {
                e.forEach(function(e) {
                    e.addedNodes.forEach(function(e) {
                        e.tagName && ("I" == e.tagName ? e.classList.add("external-item") : e.querySelectorAll("i").forEach(function(e) {
                            e.classList.add("external-item")
                        }))
                    })
                })
            }
            ), i = 0; i < e.length; i++)
                t.observe(e[i], {
                    childList: !0,
                    subtree: !0
                })
    }
    var s = "0.40.7";
    return t.prototype.loadThumbRotator = function() {
        this.KalturaThumbRotator = o(this.element, this.isReviews);
        var e = "url(" + t.getThumbnailUrl(this.element, this.isReviews) + ") "
          , i = "0px center"
          , n = new Image
          , r = this;
        n.onload = function() {
            r.element.style.background = e + i,
            r.element.style.filter = "none",
            r.KalturaThumbRotator.bindEvents(r)
        }
        ,
        n.setAttribute("src", t.getThumbnailUrl(this.element, this.isReviews))
    }
    ,
    t.prototype.initLightboxPlayer = function(e) {
        i.call(this, !0, e)
    }
    ,
    t.prototype.loadVideo = function() {
        this.kalturaPlayer.loadMedia({
            entryId: this.element.dataset.entryId
        });
        var e = this.videoCredentials.player_version;
        e > s ? r() : n(this.kalturaPlayer, this.element),
        this.kalturaPlayer.nextSample = 1
    }
    ,
    t.prototype.replayVideo = function() {
        this.kalturaPlayer._localPlayer.currentTime = 0,
        this.kalturaPlayer.muted = !1,
        this.kalturaPlayer.play(),
        this.kalturaPlayer.nextSample = 1
    }
    ,
    t.prototype.pauseVideo = function() {
        this.kalturaPlayer.pause()
    }
    ,
    t.getThumbnailUrl = function(t, i) {
        var o, n;
        return i ? (o = Math.floor(t.offsetWidth),
        n = Math.floor(t.offsetHeight),
        (0 == o || 0 == n) && (o = n = e.isMobile() ? 100 : 130)) : (o = Math.floor(t.offsetWidth),
        n = Math.floor(t.offsetHeight)),
        t.dataset.srcUrl + "/type/3/start_sec/0/end_sec/3/width/" + o + "/height/" + n + "/vid_slices/12/file_name/thumbnail.jpg"
    }
    ,
    t.setElementThumbnailPlaceholder = function(e) {
        var i = "url(" + t.getThumbnailPlaceholderUrl(e) + ") ";
        e.style.background = i,
        e.style.backgroundSize = "cover"
    }
    ,
    t.getThumbnailPlaceholderUrl = function(e) {
        return e.dataset.srcUrl + "/type/3/width/" + Math.floor(e.offsetWidth) + "/height/" + Math.floor(e.offsetHeight)
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.lazyLoading = function(e) {
    function t() {}
    return t.prototype.setImages = function(e, t) {
        this.regiterEventCalled = !1,
        this.loadCallbacks = e,
        this.widget = t,
        this.lazyImages = this.widget.element.getElementsByClassName("lazy"),
        this.lazyImages = [].slice.call(this.lazyImages),
        this.registerScroll(),
        this.registerResize()
    }
    ,
    t.prototype.loadImages = function(t) {
        if (this.lazyImages) {
            for (var i = [], o = 0; o < this.lazyImages.length; o++)
                this.lazyImages[o].getAttribute("data-src") && e.isInViewport(this.lazyImages[o], t) && (this.lazyImages[o].src = this.lazyImages[o].getAttribute("data-src"),
                this.lazyImages[o].removeAttribute("data-src"),
                i.push({
                    url: this.lazyImages[o].src,
                    imageId: this.lazyImages[o].getAttribute("data-image-id"),
                    mediaType: "image"
                }));
            e.preloadImages(i, this.loadCallbacks.onFinish, this.widget, this.loadCallbacks.onLoadError, this.widget, this.loadCallbacks.onLoad),
            this.cleanLazy()
        }
    }
    ,
    t.prototype.cleanLazy = function() {
        for (var e = 0; e < this.lazyImages.length; e++)
            this.lazyImages[e].getAttribute("data-src") || this.lazyImages.splice(e, 1)
    }
    ,
    t.prototype.registerScroll = function() {
        var t = this;
        e.addEventListener(window, "scroll", function() {
            t.scrollEvent(arguments.callee)
        }),
        e.addEventListener(document.body, "scroll", function() {
            t.scrollEvent(arguments.callee)
        })
    }
    ,
    t.prototype.scrollEvent = function(t) {
        this.regiterEventCalled ? (e.removeEventListener(window, "scroll", t),
        e.removeEventListener(document.body, "scroll", t)) : (this.loadImages(!1),
        this.regiterEventCalled = !0)
    }
    ,
    t.prototype.registerResize = function() {
        var t = this;
        e.addEventListener(window, "resize", function() {
            t.loadImages(!1)
        })
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.MobileSlide = function(e) {
    function t(e, t) {
        this.touchStartX = void 0,
        this.touchMoveX = void 0,
        this.moveX = 0,
        this.eventListeneres = [],
        this.element = e,
        this.slider = this.element.querySelector(t.sliderSelector || b),
        this.slidesContainer = this.element.querySelector(t.slidesContainerSelector || w),
        this.slides = this.element.querySelectorAll(t.slidesSelector || _),
        this.settings = i(t),
        o.call(this),
        this.slides.length > this.settings.visibleSlidesCount && a.call(this)
    }
    function i(e) {
        return {
            debug: e.debug || !1,
            slideMargin: e.slideMargin || f,
            visibleSlidesCount: e.visibleSlidesCount || y,
            animateClass: e.animateClass || v,
            separatorSize: e.separatorSize || 0,
            separatorClass: e.separatorClass,
            fixedSlideWidth: e.fixedSlideWidth
        }
    }
    function o() {
        this.slidesContainer.style.margin = 0,
        this.slider.style.margin = 0,
        n.call(this)
    }
    function n() {
        r.call(this),
        s.call(this)
    }
    function r() {
        var e = this.slider.offsetWidth
          , t = this.slides.length
          , i = this.settings.fixedSlideWidth || Math.min(parseInt(e / (this.settings.visibleSlidesCount + .4)), S)
          , o = (t + 1) * this.settings.slideMargin
          , n = t * i + o
          , r = n - e;
        this.slideWidth = i,
        this.sliderWidth = e,
        this.slidesContainerWidth = n + this.settings.separatorSize,
        this.slidesContainerOffset = r + this.settings.separatorSize
    }
    function s() {
        for (var t = 0; t < this.slides.length; t++) {
            var i = this.slides[t];
            i.style.width = this.slideWidth + "px",
            i.style.marginRight = this.settings.slideMargin + "px",
            this.settings.separatorClass && !e.hasClass(i, this.settings.separatorClass) && (i.style.marginLeft = 0)
        }
        this.slides[0].style.marginLeft = this.settings.slideMargin + "px",
        this.slidesContainer.style.width = this.slidesContainerWidth + "px"
    }
    function a() {
        var e = this;
        l.call(this, this.slidesContainer, "touchstart", function(t) {
            d.call(e, t)
        }),
        l.call(this, this.slidesContainer, "touchmove", function(t) {
            g.call(e, t)
        }),
        l.call(this, this.slidesContainer, "touchend", function(t) {
            p.call(e, t)
        }),
        l.call(this, this.slidesContainer, "mousedown", function(t) {
            c.call(e, t)
        }),
        l.call(this, this.slidesContainer, "mousemove", function(t) {
            g.call(e, t)
        }),
        l.call(this, this.slidesContainer, "mouseup", function(t) {
            u.call(e, t)
        })
    }
    function l(t, i, o) {
        e.addEventListener(t, i, o),
        this.eventListeneres.push({
            element: t,
            type: i,
            func: o
        })
    }
    function c(e) {
        this.mousedown = !0,
        d.call(this, e)
    }
    function d(t) {
        this.touchStartX = t.touches ? t.touches[0].pageX : t.pageX,
        this.touchMoveX = void 0,
        e.removeClass(this.slidesContainer, this.settings.animateClass)
    }
    function u(e) {
        p.call(this, e),
        this.mousedown = !1
    }
    function p(t) {
        var i = this.moveX / this.slideWidth
          , o = this.slidesContainerWidth - this.moveX - this.settings.slideMargin <= this.sliderWidth
          , n = i % 1;
        if (0 != n) {
            var r = i * this.settings.slideMargin
              , s = this.moveX;
            if (!o && .4 > n) {
                var a = Math.round(this.slideWidth * n - r);
                this.moveX = h.call(this, this.moveX - a)
            } else {
                var a = Math.round(this.slideWidth * (1 - n) + r);
                this.moveX = h.call(this, this.moveX + a)
            }
            e.addClass(this.slidesContainer, this.settings.animateClass),
            m.call(this),
            Math.abs(s - this.moveX) > 1 && t.preventDefault()
        }
    }
    function g(e) {
        if (!(e instanceof MouseEvent) || this.mousedown) {
            var t = this.touchMoveX || this.touchStartX;
            this.touchMoveX = e.touches ? e.touches[0].pageX : e.pageX;
            var i = this.moveX + t - this.touchMoveX;
            this.moveX = h.call(this, i),
            m.call(this),
            e.preventDefault()
        }
    }
    function h(e) {
        return 0 > e ? 0 : e >= this.slidesContainerOffset ? this.slidesContainerOffset : (this.adjustSize.call(this),
        e)
    }
    function m() {
        this.slidesContainer.style.transform = "translate3d(-" + this.moveX + "px,0,0)"
    }
    var f = 5
      , y = 2
      , v = "yotpo-mobile-slide-animation"
      , b = ".yotpo-mobile-slider"
      , w = ".yotpo-mobile-slides-container"
      , _ = ".yotpo-mobile-slide"
      , S = 150;
    return t.prototype.adjustSize = function() {
        n.call(this),
        this.moveX > this.slidesContainerOffset && (this.moveX = this.slidesContainerOffset,
        m.call(this))
    }
    ,
    t.prototype.destroy = function() {
        for (var t = 0; t < this.eventListeneres.length; t++) {
            var i = this.eventListeneres[t];
            e.removeEventListener(i.element, i.type, i.func)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Pagination = function(e) {
    var t = {};
    return t.init = function() {
        for (var i = this, o = function(e) {
            for (var i in t.actions)
                if (e.classList.contains(i))
                    return i;
            return null
        }, n = function(t, i) {
            var o = "prev" == t ? "yoReviewsPrev" : "yoReviewsNext"
              , n = e.getDocElement().querySelector("#" + o);
            if (n)
                n.href = i;
            else {
                var r = document.getElementsByTagName("head")[0];
                n = document.createElement("link"),
                n.rel = t,
                n.href = i,
                n.id = o,
                r.appendChild(n)
            }
        }, r = function(t) {
            var i = "prev" == t ? "yoReviewsPrev" : "yoReviewsNext"
              , o = e.getDocElement().querySelector("#" + i);
            if (o) {
                var n = document.getElementsByTagName("head")[0];
                n.removeChild(o)
            }
        }, s = function(t, i, o) {
            if (!e.hasClass(t, "yotpo-disabled") && o) {
                if ("prev" == i && 1 >= o)
                    return;
                var s = "next" == i ? o + 1 : o - 1
                  , a = e.updateQueryStringParameter(window.location.href, "yoReviewsPage", s);
                t.href = a,
                n(i, a)
            } else
                t.removeAttribute("href"),
                r(i)
        }, a = i.element.getElementsByClassName("yotpo-pager"), l = 0; l < a.length; ++l)
            for (var c = a[l].children, d = 0; d < c.length; ++d) {
                var u = c[d]
                  , p = o(u)
                  , g = null;
                "goTo" == p ? g = +u.getAttribute("data-page") : "yotpo_next" == p ? this instanceof e.Widgets.Basic && this.supportsPagination() && s(u, "next", this.settings.page) : "yotpo_previous" == p && this instanceof e.Widgets.Basic && this.supportsPagination() && s(u, "prev", this.settings.page);
                var h = function(o, n, r) {
                    return function() {
                        if (!e.hasClass(this, "yotpo-disabled")) {
                            e.togglePreLoader(i.getElement());
                            var s = t.actions[n].call(o, r);
                            return s && "function" == typeof o.trigger && o.trigger("pageChanged", n),
                            e.currentAnalytics.trackEvent("reviews", "clicked_on", "widget_next_page"),
                            !1
                        }
                    }
                }(i, p, g);
                u.onclick = h
            }
    }
    ,
    t.actions = {
        yotpo_next: function() {
            return ++this.settings.page,
            !0
        },
        yotpo_previous: function() {
            return 1 == this.settings.page ? !1 : (--this.settings.page,
            !0)
        },
        goTo: function(e) {
            return e = +e,
            1 > e ? !1 : (this.settings.page = e,
            !0)
        }
    },
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.PopupWindow = function(e) {
    function t(e, t) {
        i.call(this, e),
        o.call(this, t)
    }
    function i(e) {
        this.element = e,
        this.modal = this.element.querySelectorAll(".yotpo-modal-base")[0],
        this.container = e.parentElement
    }
    function o(e) {
        if (e.closeWhenPressedOutside) {
            var t = this.element.querySelectorAll(".yotpo-modal-mask")[0];
            if (t) {
                var i = this;
                t.onclick = function() {
                    i.close()
                }
            }
        }
    }
    return t.prototype.open = function() {
        e.addClass(this.modal, "yotpo-modal-active"),
        this.body_overflow_style = document.body.style.overflow,
        document.body.style.overflow = "hidden",
        document.body.appendChild(this.element),
        this.trigger("open")
    }
    ,
    t.prototype.close = function(t) {
        e.removeClass(this.modal, "yotpo-modal-active"),
        document.body.style.overflow = this.body_overflow_style,
        this.container && this.container.appendChild(this.element),
        this.trigger("close", t)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Refresh = function(e) {
    var t = {};
    return t.perform = function() {
        var t = this
          , i = Object.assign({}, t.getSettings());
        if ("reviews" == t.type && "reviews" == t.getMethod()) {
            var o = e.getMainWidget(t._controller);
            o && (i = Object.assign({}, o.getSettings(), i))
        }
        t._controller.getBatch(function(i) {
            var o = [];
            try {
                o = JSON.parse(i),
                o = o.shift().result,
                "undefined" != typeof t.getElement() && (t.getElement().innerHTML = o),
                "function" == typeof t.trigger && (t.trigger("refreshed"),
                t.trigger("ready"))
            } catch (n) {
                e.safeConsole(n.message)
            }
        }, [{
            method: t.getMethod(),
            params: i
        }])
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Slide = function(e) {
    function t(t, i) {
        this.element = t,
        this.imageCount = i.imageCount,
        this.displayWindowCount = i.displayWindowCount,
        this.position = i.initialPosition || r(i.imageCount, i.displayWindowCount),
        this.offset = i.useOffset ? n(this.displayWindowCount) : u,
        this.autoSlide = !!i.autoSlide && i.imageCount > i.displayWindowCount,
        this.interval = i.delayInterval || a,
        this.direction = i.slideDirection || l,
        this.percentage = 100 / parseFloat(this.displayWindowCount),
        this.isSliding = !1,
        this.animationDuration = i.animationDuration || d,
        this.displayDirection = i.rtl ? "right" : "left",
        this.directionVector = this.displayDirection == l ? -1 : 1,
        this.onSlideCallbacks = [],
        this.lazyEnabled = !!i.loadCallbacks,
        this.widgetParams = i.widgetParams,
        this.lazyEnabled && (this.lazyLoadingHandler = new e.Modules.lazyLoading,
        this.lazyLoadingHandler.setImages(i.loadCallbacks, i.widgetParams))
    }
    function i(t) {
        var i = this
          , n = 0;
        this.isSliding || (this.isSliding = !0,
        this.position += t,
        s.call(this),
        1 === this.position ? n = this.imageCount : this.position === this.imageCount + 2 && (n = -this.imageCount),
        setTimeout(function() {
            0 !== n && (e.removeClass(i.element, c),
            i.position += n,
            s.call(i)),
            setTimeout(function() {
                e.addClass(i.element, c),
                i.isSliding = !1,
                o.call(i)
            }, 50)
        }, this.animationDuration))
    }
    function o() {
        for (var e = 0; e < this.onSlideCallbacks.length; e++)
            this.onSlideCallbacks[e].call(this.widgetParams, this.position)
    }
    function n(e) {
        return 100 / e / 2
    }
    function r(e, t) {
        return t >= e ? 0 : t
    }
    function s() {
        this.element.style[this.displayDirection] = -(this.position * this.percentage + this.offset) + "%",
        this.lazyEnabled && this.lazyLoadingHandler.widget._controller.cssReady && this.lazyLoadingHandler.loadImages(!0)
    }
    var a = 3e3
      , l = "left"
      , c = "y-slide-left-animations"
      , d = 450
      , u = 0;
    return t.prototype.left = function() {
        i.call(this, this.directionVector)
    }
    ,
    t.prototype.right = function() {
        i.call(this, -this.directionVector)
    }
    ,
    t.prototype.setCurrentPosition = function(e) {
        this.position = e,
        s.call(this)
    }
    ,
    t.prototype.start = function() {
        s.call(this),
        this.autoSlide && this.play()
    }
    ,
    t.prototype.play = function() {
        var e = this;
        !this.timerID && this.autoSlide && (this.timerID = setInterval(function() {
            e[e.direction]()
        }, this.interval))
    }
    ,
    t.prototype.pause = function() {
        this.timerID && this.autoSlide && (clearInterval(this.timerID),
        delete this.timerID)
    }
    ,
    t.prototype.onSlide = function(e) {
        this.onSlideCallbacks.push(e)
    }
    ,
    t
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.UserAllocation = function(e) {
    var t = parseInt("FFFFFFFFFFFFFFFF", 16)
      , i = {};
    return i.getUserAllocation = function() {
        var i = e.currentAnalytics.getDomainUserId();
        return parseInt(i, 16) / t * 99 + 1
    }
    ,
    i
}(Yotpo),
Yotpo.Modules = Yotpo.Modules || {},
Yotpo.Modules.Vote = function(e) {
    function t(t) {
        for (var i = 0; i < t.length; i++)
            e.removeClass(t[i], "yotpo-disabled")
    }
    function i(t) {
        for (var i = 0; i < t.length; i++)
            e.addClass(t[i], "yotpo-disabled")
    }
    var o = {};
    return o.perform = function(i, o) {
        var n = this
          , r = n.params.id
          , s = n.getType()
          , a = e.getApiHost() + "/" + s + "s/" + r + "/vote/" + i;
        o = o || !1,
        o && (a += "/true"),
        function(i) {
            e.ajax(a, function(o) {
                var r, s;
                n.data = JSON.parse(o),
                n.trigger("vote"),
                s = e.getDocElement().querySelectorAll("[data-" + i + '-id="' + n.params.id + '"]');
                for (var a = 0; a < s.length; a++)
                    r = s[a].getElementsByClassName("vote-btn"),
                    t(r)
            })
        }(s)
    }
    ,
    o.bind = function(t) {
        var o = e.localStorage.getItem(t.getType() + "-" + t.get("id"))
          , n = this.getElementsByClassName("yotpo-footer")[0]
          , r = n.getElementsByClassName("vote-btn");
        if ("undefined" != typeof yotpo && yotpo.getUserSetting("css_preview"))
            for (var s = 0; s < r.length; s++)
                e.addClass(r[s], "yotpo-disabled");
        for (var a = function() {
            function o() {
                var i = this.getAttribute("data-type")
                  , o = e.hasClass(this, "voted")
                  , n = this.parentNode.querySelector(".vote-sum[data-type=" + i + "]");
                return o && 0 != n.innerHTML ? (n.innerHTML = +n.innerHTML - 1,
                e.localStorage.removeItem(t.getType() + "-" + t.get("id"))) : (n.innerHTML = +n.innerHTML + 1,
                e.localStorage.setItem(t.getType() + "-" + t.get("id"), i)),
                t.updateOriginalVote && t.updateOriginalVote(i, o ? -1 : 1),
                e.toggleClass(this, "voted"),
                t.vote(i, o),
                !0
            }
            if (e.hasClass(this, "yotpo-disabled"))
                return !1;
            var n = this.parentNode.getElementsByClassName("vote-btn");
            i(n);
            var r = this.parentNode.getElementsByClassName("voted")[0]
              , s = !0;
            r && r != this && (s = o.call(r)),
            s && o.call(this)
        }, l = 0; l < r.length; ++l)
            r[l].getAttribute("data-type") == o && e.addClass(r[l], "voted"),
            r[l].onclick = a,
            e.onEnterKeyDown(r[l], a)
    }
    ,
    o
}(Yotpo),
Yotpo.Helpers = Yotpo.Helpers || {},
Yotpo.Helpers.FileValidator = function(e) {
    function t(e, t) {
        this.file = e,
        this.validations = t,
        this.validated = !1,
        this.errors = []
    }
    function i(e) {
        for (var t = !1, i = this.file.type, o = 0; o < e.length; o++)
            if (e[o] === i) {
                t = !0;
                break
            }
        return t
    }
    function o(e, i) {
        var o = new FileReader
          , r = new Image
          , s = this;
        o.onload = function(o) {
            var a;
            a = o.target.result,
            r.src = a,
            r.onload = function() {
                (e && this.width < e || i && this.height < i) && s.errors.push(t.ERROR_TYPES.INVALID_IMAGE_DIMENSIONS),
                n.call(s)
            }
            ,
            r.onerror = function() {
                s.errors.push(t.ERROR_TYPES.INVALID_IMAGE_FILE),
                n.call(s)
            }
        }
        ,
        o.readAsDataURL(this.file)
    }
    function n() {
        this.validated = !0,
        this.trigger("validated", this.errors)
    }
    return t.ERROR_TYPES = {
        INVALID_TYPE: 1,
        INVALID_SIZE: 2,
        INVALID_IMAGE_DIMENSIONS: 3,
        INVALID_IMAGE_FILE: 4
    },
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.validate = function() {
        if (this.validated)
            return void this.trigger("validated", this.errors);
        var e, r;
        for (var s in this.validations)
            switch (s) {
            case "maxFileSize":
                var a = this.validations[s];
                this.file.size > a && this.errors.push(t.ERROR_TYPES.INVALID_SIZE);
                break;
            case "fileTypes":
                i.call(this, this.validations[s]) || this.errors.push(t.ERROR_TYPES.INVALID_TYPE);
                break;
            case "minImageWidth":
                e = this.validations[s];
                break;
            case "minImageHeight":
                r = this.validations[s]
            }
        e || r ? o.call(this, e, r) : n.call(this)
    }
    ,
    t
}(Yotpo),
Yotpo.Helpers = Yotpo.Helpers || {},
Yotpo.Helpers.ImageUtils = function() {
    var e = Object.create(null);
    return e.ROTATION_TYPES = {
        1: "rotate(0deg)",
        3: "rotate(180deg)",
        6: "rotate(90deg)",
        8: "rotate(270deg)"
    },
    e.getImageOrientation = function(t, i) {
        new FileReader;
        EXIF.getData(t, function() {
            var o = t.exifdata || {}
              , n = o.Orientation || 1;
            i(e.ROTATION_TYPES[n])
        })
    }
    ,
    e
}(Yotpo),
function() {
    function e(e) {
        return !!e.exifdata
    }
    function t(e, t) {
        t = t || e.match(/^data\:([^\;]+)\;base64,/im)[1] || "",
        e = e.replace(/^data\:([^\;]+)\;base64,/gim, "");
        for (var i = atob(e), o = i.length, n = new ArrayBuffer(o), r = new Uint8Array(n), s = 0; o > s; s++)
            r[s] = i.charCodeAt(s);
        return n
    }
    function i(e, t) {
        var i = new XMLHttpRequest;
        i.open("GET", e, !0),
        i.responseType = "blob",
        i.onload = function() {
            (200 == this.status || 0 === this.status) && t(this.response)
        }
        ,
        i.send()
    }
    function o(e, o) {
        function r(t) {
            var i = n(t);
            e.exifdata = i || {},
            o && o.call(e)
        }
        if (e.src)
            if (/^data\:/i.test(e.src)) {
                var s = t(e.src);
                r(s)
            } else if (/^blob\:/i.test(e.src)) {
                var a = new FileReader;
                a.onload = function(e) {
                    r(e.target.result)
                }
                ,
                i(e.src, function(e) {
                    a.readAsArrayBuffer(e)
                })
            } else {
                var l = new XMLHttpRequest;
                l.onload = function() {
                    if (200 != this.status && 0 !== this.status)
                        throw "Could not load image";
                    r(l.response),
                    l = null
                }
                ,
                l.open("GET", e.src, !0),
                l.responseType = "arraybuffer",
                l.send(null)
            }
        else if (self.FileReader && (e instanceof self.Blob || e instanceof self.File)) {
            var a = new FileReader;
            a.onload = function(e) {
                c && console.log("Got file of length " + e.target.result.byteLength),
                r(e.target.result)
            }
            ,
            a.readAsArrayBuffer(e)
        }
    }
    function n(e) {
        var t = new DataView(e);
        if (c && console.log("Got file of length " + e.byteLength),
        255 != t.getUint8(0) || 216 != t.getUint8(1))
            return c && console.log("Not a valid JPEG"),
            !1;
        for (var i, o = 2, n = e.byteLength; n > o; ) {
            if (255 != t.getUint8(o))
                return c && console.log("Not a valid marker at offset " + o + ", found: " + t.getUint8(o)),
                !1;
            if (i = t.getUint8(o + 1),
            c && console.log(i),
            225 == i)
                return c && console.log("Found 0xFFE1 marker"),
                l(t, o + 4, t.getUint16(o + 2) - 2);
            o += 2 + t.getUint16(o + 2)
        }
    }
    function r(e, t, i, o, n) {
        var r, a, l, d = e.getUint16(i, !n), u = {};
        for (l = 0; d > l; l++)
            r = i + 12 * l + 2,
            a = o[e.getUint16(r, !n)],
            !a && c && console.log("Unknown tag: " + e.getUint16(r, !n)),
            u[a] = s(e, r, t, i, n);
        return u
    }
    function s(e, t, i, o, n) {
        var r, s, l, c, d, u, p = e.getUint16(t + 2, !n), g = e.getUint32(t + 4, !n), h = e.getUint32(t + 8, !n) + i;
        switch (p) {
        case 1:
        case 7:
            if (1 == g)
                return e.getUint8(t + 8, !n);
            for (r = g > 4 ? h : t + 8,
            s = [],
            c = 0; g > c; c++)
                s[c] = e.getUint8(r + c);
            return s;
        case 2:
            return r = g > 4 ? h : t + 8,
            a(e, r, g - 1);
        case 3:
            if (1 == g)
                return e.getUint16(t + 8, !n);
            for (r = g > 2 ? h : t + 8,
            s = [],
            c = 0; g > c; c++)
                s[c] = e.getUint16(r + 2 * c, !n);
            return s;
        case 4:
            if (1 == g)
                return e.getUint32(t + 8, !n);
            for (s = [],
            c = 0; g > c; c++)
                s[c] = e.getUint32(h + 4 * c, !n);
            return s;
        case 5:
            if (1 == g)
                return d = e.getUint32(h, !n),
                u = e.getUint32(h + 4, !n),
                l = new Number(d / u),
                l.numerator = d,
                l.denominator = u,
                l;
            for (s = [],
            c = 0; g > c; c++)
                d = e.getUint32(h + 8 * c, !n),
                u = e.getUint32(h + 4 + 8 * c, !n),
                s[c] = new Number(d / u),
                s[c].numerator = d,
                s[c].denominator = u;
            return s;
        case 9:
            if (1 == g)
                return e.getInt32(t + 8, !n);
            for (s = [],
            c = 0; g > c; c++)
                s[c] = e.getInt32(h + 4 * c, !n);
            return s;
        case 10:
            if (1 == g)
                return e.getInt32(h, !n) / e.getInt32(h + 4, !n);
            for (s = [],
            c = 0; g > c; c++)
                s[c] = e.getInt32(h + 8 * c, !n) / e.getInt32(h + 4 + 8 * c, !n);
            return s
        }
    }
    function a(e, t, i) {
        for (var o = "", n = t; t + i > n; n++)
            o += String.fromCharCode(e.getUint8(n));
        return o
    }
    function l(e, t) {
        if ("Exif" != a(e, t, 4))
            return c && console.log("Not valid EXIF data! " + a(e, t, 4)),
            !1;
        var i, o, n, s, l, d = t + 6;
        if (18761 == e.getUint16(d))
            i = !1;
        else {
            if (19789 != e.getUint16(d))
                return c && console.log("Not valid TIFF data! (no 0x4949 or 0x4D4D)"),
                !1;
            i = !0
        }
        if (42 != e.getUint16(d + 2, !i))
            return c && console.log("Not valid TIFF data! (no 0x002A)"),
            !1;
        var u = e.getUint32(d + 4, !i);
        if (8 > u)
            return c && console.log("Not valid TIFF data! (First offset less than 8)", e.getUint32(d + 4, !i)),
            !1;
        if (o = r(e, d, d + u, g, i),
        o.ExifIFDPointer) {
            s = r(e, d, d + o.ExifIFDPointer, p, i);
            for (n in s) {
                switch (n) {
                case "LightSource":
                case "Flash":
                case "MeteringMode":
                case "ExposureProgram":
                case "SensingMethod":
                case "SceneCaptureType":
                case "SceneType":
                case "CustomRendered":
                case "WhiteBalance":
                case "GainControl":
                case "Contrast":
                case "Saturation":
                case "Sharpness":
                case "SubjectDistanceRange":
                case "FileSource":
                    s[n] = m[n][s[n]];
                    break;
                case "ExifVersion":
                case "FlashpixVersion":
                    s[n] = String.fromCharCode(s[n][0], s[n][1], s[n][2], s[n][3]);
                    break;
                case "ComponentsConfiguration":
                    s[n] = m.Components[s[n][0]] + m.Components[s[n][1]] + m.Components[s[n][2]] + m.Components[s[n][3]]
                }
                o[n] = s[n]
            }
        }
        if (o.GPSInfoIFDPointer) {
            l = r(e, d, d + o.GPSInfoIFDPointer, h, i);
            for (n in l) {
                switch (n) {
                case "GPSVersionID":
                    l[n] = l[n][0] + "." + l[n][1] + "." + l[n][2] + "." + l[n][3]
                }
                o[n] = l[n]
            }
        }
        return o
    }
    var c = !1
      , d = this
      , u = function(e) {
        return e instanceof u ? e : this instanceof u ? void (this.EXIFwrapped = e) : new u(e)
    };
    "undefined" != typeof exports ? ("undefined" != typeof module && module.exports && (exports = module.exports = u),
    exports.EXIF = u) : d.EXIF = u;
    var p = u.Tags = {
        36864: "ExifVersion"
    }
      , g = u.TiffTags = {
        274: "Orientation"
    }
      , h = u.GPSTags = {}
      , m = (u.IFD1Tags = {},
    u.StringValues = {
        ExposureProgram: {},
        MeteringMode: {},
        LightSource: {},
        Flash: {},
        SensingMethod: {},
        SceneCaptureType: {},
        SceneType: {},
        CustomRendered: {},
        WhiteBalance: {},
        GainControl: {},
        Contrast: {},
        Saturation: {},
        Sharpness: {},
        SubjectDistanceRange: {},
        FileSource: {},
        Components: {}
    });
    u.getData = function(t, i) {
        return (self.Image && t instanceof self.Image || self.HTMLImageElement && t instanceof self.HTMLImageElement) && !t.complete ? !1 : (e(t) ? i && i.call(t) : o(t, i),
        !0)
    }
    ,
    u.readFromBinaryFile = function(e) {
        return n(e)
    }
    ,
    "function" == typeof define && define.amd && define("exif-js", [], function() {
        return u
    })
}
.call(this),
Yotpo.Helpers = Yotpo.Helpers || {},
Yotpo.Helpers.WidthClass = function() {
    var e, t = {}, i = [];
    e = [{
        name: "yotpo-size-7",
        fit: function(e) {
            return e >= 1280
        }
    }, {
        name: "yotpo-size-6",
        fit: function(e) {
            return 1280 > e && e >= 960
        }
    }, {
        name: "yotpo-size-5",
        fit: function(e) {
            return 960 > e && e >= 768
        }
    }, {
        name: "yotpo-size-4",
        fit: function(e) {
            return 768 > e && e >= 600
        }
    }, {
        name: "yotpo-size-3",
        fit: function(e) {
            return 600 > e && e >= 480
        }
    }, {
        name: "yotpo-size-2",
        fit: function(e) {
            return 480 > e && e >= 320
        }
    }, {
        name: "yotpo-size-1",
        fit: function(e) {
            return 320 > e
        }
    }];
    for (var o = 0; o < e.length; o++)
        i.push(e[o].name);
    return t.getWidgetWidthClass = function(t) {
        for (var i, o, n = 0; n < e.length; n++)
            if (o = e[n],
            o.fit(t)) {
                i = o.name;
                break
            }
        return i
    }
    ,
    t.getWidgetWidthClasses = function() {
        return i
    }
    ,
    t
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.ImageUpload = function(e) {
    function t(e, t, n, r, s, a, l, c) {
        this.flowSteps = {},
        this.source_widget = s,
        this.product_id = a,
        this.trustedVendorsData = l,
        this.appKey = r,
        this.analyticsTracker = c,
        i.call(this, e, t, n, r),
        o()
    }
    function i(t, i, o, l) {
        function c(e) {
            e && (d.analyticsTracker.track("clicked_on", "exit"),
            r.call(d))
        }
        var d = this
          , u = {};
        e.forEach(p, function(e) {
            u[e] = t.getElementsByClassName(e)[0]
        }),
        this.flowSteps.thankYou = new e.Flows.ImageUpload.ThankYou(u.thank_you),
        this.flowSteps.uploadError = new e.Flows.ImageUpload.UploadError(u.upload_error),
        this.flowSteps.uploadImages = new e.Flows.ImageUpload.UploadImages(u.upload_images,i,o,l,s.bind(this),this.trustedVendorsData,this.analyticsTracker),
        this.flowSteps.userDetails = new e.Flows.ImageUpload.UserDetails(u.user_details,a.bind(this),n.bind(this)),
        this.flowSteps.uploadImages.on("close", c),
        this.flowSteps.userDetails.on("close", c)
    }
    function o() {
        if (e.getDocElement() != document && !document.querySelector("." + g)) {
            var t = e.getDocElement().querySelector("." + g);
            document.body.appendChild(t.cloneNode(!0))
        }
    }
    function n() {
        this.flowSteps.userDetails.close(),
        this.flowSteps.uploadImages.open()
    }
    function r() {
        this.flowSteps.userDetails.resetModalContent(),
        this.flowSteps.uploadImages.resetModalContent()
    }
    function s(e, t) {
        this.imagesData = e,
        this.videosData = t,
        null === this.trustedVendorsData ? (this.analyticsTracker.track("clicked_on", "next"),
        this.flowSteps.uploadImages.close(),
        this.flowSteps.userDetails.open(),
        this.flowSteps.userDetails.modalElement.querySelector(".user_details_back").focus()) : a.call(this, this.trustedVendorsData.display_name, this.trustedVendorsData.email)
    }
    function a(t, i) {
        l.call(this);
        var o = this.product_id ? [this.product_id] : null;
        e.forEach(this.imagesData.concat(this.videosData), function(e) {
            e.user_name = t,
            e.user_email = i,
            o && (e.tagged_products = o,
            e.domain_key = o[0])
        }),
        this.callsRemaining = 0,
        this.callsErrors = !1,
        this.imagesData.length > 0 && (this.callsRemaining++,
        c.call(this)),
        this.videosData.length > 0 && (this.callsRemaining += this.videosData.length,
        d.call(this))
    }
    function l() {
        var e = {
            images_count: this.imagesData.length,
            video_count: this.videosData.length
        };
        this.analyticsTracker.track("clicked_on", "submit", null, e)
    }
    function c() {
        var t = {
            images: this.imagesData,
            source_widget: this.source_widget
        }
          , i = e.getApiHost() + "/v1/widget/" + this.appKey + "/images/create_batch"
          , o = JSON.stringify(t);
        e.ajax(i, u.bind(this), "POST", o, void 0, {
            requestHeaders: {
                "Content-type": "application/json"
            }
        })
    }
    function d() {
        var t = this;
        e.forEach(t.videosData, function(e) {
            e.videoSubmit(e.caption, e.user_name, e.user_email, e.domain_key, null, u.bind(t))
        })
    }
    function u(t) {
        this.callsRemaining--,
        e.isString(t) && t.length > 0 && (t = JSON.parse(t)),
        200 !== t.status.code && (this.callsErrors = !0),
        0 === this.callsRemaining && (this.flowSteps.uploadImages.close(),
        this.flowSteps.userDetails.close(),
        this.callsErrors ? this.flowSteps.uploadError.open() : (r.call(this),
        this.flowSteps.thankYou.open(),
        this.flowSteps.thankYou.modalElement.querySelector(".yotpo-modal-title").focus()))
    }
    var p = ["thank_you", "upload_error", "upload_images", "user_details"]
      , g = "image-upload-style";
    return t.prototype.start = function(e) {
        this.flowSteps.uploadImages.upload(e)
    }
    ,
    t
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.ImageUpload = Yotpo.Flows.ImageUpload || {},
Yotpo.Flows.ImageUpload.ThankYou = function(e) {
    function t(t) {
        this.modalElement = t,
        e.Modules.PopupWindow.call(this, t, {
            closeWhenPressedOutside: !1
        }),
        i.call(this)
    }
    function i() {
        var e = this
          , t = this.modalElement.querySelector(".close-button")
          , i = document.activeElement;
        this.element.querySelector('[tabindex]:not([tabindex="-1"])').focus(),
        t.onclick = function() {
            i.focus(),
            e.close(!0)
        }
        ,
        t.onkeypress = function(e) {
            13 == e.keyCode && e.target.click()
        }
    }
    return t.prototype = Object.create(e.Modules.PopupWindow.prototype),
    t
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.UploadButton = function(e) {
    function t() {
        var e = this.controller.getUserSetting("vendor_review_creation");
        if (e) {
            var t = this.controller.getTrustedVendorsData();
            if (Object.keys(t).length > 0)
                return t
        }
        return null
    }
    function i(t, i, o) {
        var n = new e.AnalyticsTracker("upload_media",i);
        return n.eventContext.is_trusted_vendor = null !== o,
        n.track("loaded"),
        e.currentInview.register(t, function() {
            n.track("shown")
        }),
        this.uploadPhotosButton.onclick = function() {
            n.track("clicked_on", "add_your_media")
        }
        ,
        this.uploadPhotosButton.onkeypress = function(e) {
            13 == e.keyCode && e.target.click()
        }
        ,
        n
    }
    function o() {
        var t = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
          , i = document.querySelectorAll("div.image-upload-flow-popup.user_details")[0];
        e.trapModalFocus(i, t)
    }
    var n = {};
    return n.initUploadButton = function(n, r, s, a) {
        var l = n.getUserSetting("upload_photos")
          , c = n.getUserSetting("video_support");
        if (this.uploadPhotosButton = r.querySelector(".yotpo-pictures-gallery-upload-button"),
        this.controller = n,
        this.fileInput = r.querySelector(".yotpo-file-image-upload"),
        l && this.fileInput && this.uploadPhotosButton) {
            n.getUserSetting("upload_videos") && (c.uploadEnabled = !0,
            e.loadScript(e.yotpoVideoUploaderUrl, document.body));
            var d = r.querySelector(".yotpo-image-upload-container")
              , u = this.controller.getAppKey()
              , p = t.call(this)
              , g = i.call(this, r, a, p);
            this.fileInput.onchange = function() {
                if (this.files.length > 0) {
                    var t = new e.Flows.ImageUpload(d,l,c,u,s.widget_name,s.product_id,p,g);
                    t.start(this.files)
                }
            }
            ,
            o()
        }
    }
    ,
    n
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.ImageUpload = Yotpo.Flows.ImageUpload || {},
Yotpo.Flows.ImageUpload.UploadError = function(e) {
    function t(t) {
        this.modalElement = t,
        e.Modules.PopupWindow.call(this, t, {
            closeWhenPressedOutside: !1
        }),
        i.call(this)
    }
    function i() {
        var e = this
          , t = this.modalElement.querySelector(".close-button");
        t.onclick = function() {
            e.close(!1)
        }
        ,
        t.onkeypress = function(t) {
            13 == t.keyCode && e.close(!1)
        }
    }
    return t.prototype = Object.create(e.Modules.PopupWindow.prototype),
    t
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.ImageUpload = Yotpo.Flows.ImageUpload || {},
Yotpo.Flows.ImageUpload.UploadImages = function(e) {
    function t(t, i, o, n, r, s, a) {
        var l = i.settings || {};
        k = l.max_photos || x,
        this.videoSupportSettings = o || {},
        this.modalElement = t,
        this.successCallback = r,
        this.trustedVendorsData = s,
        this.analyticsTracker = a,
        this.uuid = e.generateUUID(),
        this.appKey = n,
        e.Modules.PopupWindow.call(this, t, {
            closeWhenPressedOutside: !1
        })
    }
    function i() {
        var t = this
          , i = this.modalElement.querySelector(".yotpo-icon-cross")
          , o = t.modalElement.querySelector(".submit-label")
          , n = t.modalElement.querySelector(".yotpo-submit-loader");
        this.element.querySelector('[tabindex]:not([tabindex="-1"])').focus(),
        this.nextOrSubmitButton = this.modalElement.querySelector(".yotpo-next-button"),
        this.addMoreInput = this.modalElement.querySelector(".upload-more-photos"),
        this.addMorePhotos = this.modalElement.querySelector(".yotpo-add-more");
        var r = this.modalElement.querySelectorAll(".yotpo-upload-button")
          , s = document.activeElement;
        this.nextOrSubmitButton.onclick = function() {
            null !== t.trustedVendorsData && (e.addClass(o, "yotpo-hidden"),
            e.removeClass(n, "yotpo-hidden")),
            t.successCallback(a.call(t), l.call(t))
        }
        ,
        this.nextOrSubmitButton.onkeypress = function(e) {
            13 != e.keyCode || e.target.disabled || e.target.click()
        }
        ,
        i.onclick = function() {
            s.focus(),
            t.close(!0)
        }
        ;
        for (var c = function(e) {
            13 == e.keyCode && e.target.click()
        }, d = 0; d < r.length; d++)
            r[d].onkeydown = c;
        i.onkeydown = function(e) {
            13 == e.keyCode && (s.focus(),
            t.close(!0))
        }
        ,
        this.addMorePhotos.onkeydown = function(e) {
            13 != e.keyCode || e.target.disabled || e.target.click()
        }
        ,
        this.addMoreInput.onchange = function() {
            p.call(t, this.files)
        }
        ,
        document.onkeydown = function(e) {
            function i() {
                document.activeElement === r && (e.preventDefault(),
                s.focus())
            }
            function o() {
                document.activeElement === s && (e.preventDefault(),
                r.focus())
            }
            e = e || window.event;
            var n = t.element.querySelectorAll('[tabindex]:not([tabindex="-1"])')
              , r = n[0]
              , s = n[n.length - 1];
            switch (e.keyCode) {
            case 9:
                e.shiftKey ? i() : o();
                break;
            case 27:
                t.close()
            }
        }
    }
    function o() {
        this.itemsArray = [];
        for (var e = this, t = this.modalElement.querySelectorAll(".yotpo-upload-photos"), i = 0; i < t.length; i++) {
            var o = t[i]
              , n = o.querySelector(".yotpo-file-input")
              , r = o.querySelector(".yotpo-circle");
            n.setAttribute("index", i.toString()),
            r.setAttribute("index", i.toString());
            var s = {
                itemElement: o,
                crossElement: r,
                captionElement: o.querySelector(".yotpo-caption-modal-textarea"),
                uploadLabel: o.querySelector(".uploaded-background-image"),
                progressBar: o.querySelector(".yotpo-upload-progress"),
                loadedBar: o.querySelector(".yotpo-upload-progress-loaded"),
                fileInput: n,
                active: !1
            };
            n.onchange = function() {
                var t = parseInt(this.getAttribute("index"));
                this.files.length > 0 && g.call(e, this.files[0], e.itemsArray[t])
            }
            ,
            r.onclick = function(t) {
                var i = parseInt(this.getAttribute("index"));
                A.call(e, e.itemsArray[i]),
                t.preventDefault()
            }
            ,
            r.onkeydown = function(e) {
                13 == e.keyCode && e.target.click()
            }
            ,
            this.itemsArray.push(s)
        }
    }
    function n(t) {
        function i(e) {
            F = JSON.parse(e),
            F.originalPath = F.path,
            t()
        }
        var o = e.getApiHost("dynamic") + "/s3_signature"
          , n = e.convertHashToQueryStringParams({
            policy_name: "OnsiteUploadedImages",
            app_key: this.appKey
        })
          , r = {
            withCredentials: !1
        };
        e.ajax(o, i, "POST", n, null, r)
    }
    function r() {
        var e = F.originalPath;
        "/" !== e.charAt(e.length - 1) && (e += "/"),
        e += this.uuid + "/",
        F.path = e
    }
    function s() {
        null === this.trustedVendorsData ? e.addClass(this.modalElement, "display-next-button") : e.addClass(this.modalElement, "display-submit-button")
    }
    function a() {
        for (var e = [], t = 0; k > t; t++) {
            var i = this.itemsArray[t];
            if (i.active && !i.isVideo) {
                var o = i.image_url;
                o.startsWith("http") || (o = "https:" + o),
                e.push({
                    image_url: o,
                    caption: i.captionElement.value
                })
            }
        }
        return e
    }
    function l() {
        for (var e = [], t = 0; k > t; t++) {
            var i = this.itemsArray[t];
            i.active && i.isVideo && e.push({
                isVideo: !0,
                videoSubmit: i.videoSubmit,
                caption: i.captionElement.value
            })
        }
        return e
    }
    function c() {
        for (var t = [], i = 0; k > i; i++)
            this.itemsArray[i].active || e.hasClass(this.itemsArray[i].itemElement, "image-loader") || t.push(this.itemsArray[i]);
        return t
    }
    function d() {
        for (var t = !1, i = !1, o = 0; k > o; o++)
            this.itemsArray[o].active && (t = !0),
            e.hasClass(this.itemsArray[o].itemElement, "image-loader") && (i = !0);
        return t && !i
    }
    function u() {
        0 === c.call(this).length ? (e.addClass(this.addMorePhotos, "yotpo-add-more-disabled"),
        this.addMoreInput.disabled = !0) : (e.removeClass(this.addMorePhotos, "yotpo-add-more-disabled"),
        this.addMoreInput.disabled = !1),
        d.call(this) ? (e.removeClass(this.nextOrSubmitButton, "yotpo-next-submit-disabled"),
        this.nextOrSubmitButton.disabled = !1,
        this.nextOrSubmitButton.setAttribute("aria-disabled", "false")) : (e.addClass(this.nextOrSubmitButton, "yotpo-next-submit-disabled"),
        this.nextOrSubmitButton.disabled = !0,
        this.nextOrSubmitButton.setAttribute("aria-disabled", "true"))
    }
    function p(e) {
        for (var t = c.call(this), i = Array.prototype.slice.call(e, 0, t.length), o = i.length > t.length ? t.length : i.length, n = 0; o > n; n++)
            g.call(this, i[n], t[n])
    }
    function g(e, t) {
        y.call(this, t),
        u.call(this);
        var i = "video" === e.type.split("/")[0];
        i && this.videoSupportSettings.uploadEnabled ? (t.isVideo = !0,
        h.call(this, e, t)) : f.call(this, e, t)
    }
    function h(t, i) {
        var o = this
          , n = new YotpoVideoUploader.KalturaUploader(t,o.videoSupportSettings.settings,o.appKey,"onsite_upload",e.kalturaServerUrl);
        n.on("fileAdded", v.bind(o, t, i)),
        n.on("progress", function(e) {
            i.loadedBar.style.width = e.percentage
        }),
        n.on("complete", function(t) {
            t.errors && t.errors.length > 0 ? (o.analyticsTracker.track("video_upload", "error", null, {
                fileValidationErrorCodes: t.errorCodes
            }),
            _.call(o, i, t.errors, t.file)) : (i.videoSubmit = t.submitCallback,
            i.active = !0,
            m.call(o, i),
            e.addClass(i.itemElement, "active-video"),
            u.call(o))
        }),
        n.on("error", function(e) {
            m.call(o, i),
            _.call(o, i, [q], e.file),
            o.trustedVendorsData && (e.userName = o.trustedVendorsData.display_name,
            e.userEmail = o.trustedVendorsData.email);
            var t = {
                userName: e.userName,
                userEmail: e.userEmail,
                error: e.error,
                fileName: e.file.name,
                domainKey: e.domainKey
            };
            o.analyticsTracker.track("video_upload", "error", null, t)
        });
        var r = new e.Helpers.FileValidator(t,T);
        r.on("validated", function(e) {
            e.length > 0 ? n.trigger("complete", {
                fileValidationErrorCodes: e,
                file: n.file,
                url: null
            }) : n.upload()
        }),
        r.validate(),
        i.cancelVideoUpload = function() {
            n.Cancel(),
            m.call(o, i)
        }
    }
    function m(t) {
        t.loadedBar.style.width = 0,
        e.removeClass(t.uploadLabel, "upload-overlay"),
        e.removeClass(t.itemElement, "image-loader"),
        e.removeClass(t.itemElement, "active-video"),
        e.hide(t.progressBar)
    }
    function f(t, i) {
        var o = this
          , n = new e.FileUploader(t,P);
        n.on("complete", function(n) {
            null !== n.url && 0 === n.errors.length ? (i.active = !0,
            e.Helpers.ImageUtils.getImageOrientation(t, b.bind(o, i, n))) : (o.analyticsTracker.track("picture_upload", "error", null, {
                error: n.errors
            }),
            _.call(o, i, n.errors, n.file))
        }),
        i.cancelImageUpload = function() {
            n.removeEvent("complete")
        }
        ;
        var r = "//" + F.bucket + "." + e.awsS3Domain;
        n.validateAndUpload(r, F, e.FileUploader.TYPE.S3)
    }
    function y(t) {
        t.fileInput.disabled = !0,
        t.captionElement.disabled = !1,
        this.nextOrSubmitButton.disabled = !0,
        this.nextOrSubmitButton.setAttribute("aria-disabled", "true"),
        w(t),
        e.removeClass(t.itemElement, "image-empty"),
        e.addClass(t.itemElement, "image-loader"),
        e.addClass(this.nextOrSubmitButton, "yotpo-next-submit-disabled")
    }
    function v(t, i) {
        e.show(i.progressBar),
        e.addClass(i.uploadLabel, "upload-overlay"),
        e.addClass(i.itemElement, "active-placeholder");
        var o = document.createElement("video");
        o.addEventListener("timeupdate", function() {
            if (!(o.currentTime < 1)) {
                var e = document.createElement("canvas");
                e.width = o.videoWidth,
                e.height = o.videoHeight,
                e.getContext("2d").drawImage(o, 0, 0, e.width, e.height),
                o.pause();
                var t = e.toDataURL();
                i.uploadLabel.setAttribute("style", "background-image: url(" + t + ") !important;")
            }
        }),
        o.src = URL.createObjectURL(t),
        o.muted = !0,
        o.playsInline = !0,
        o.play()
    }
    function b(t, i, o) {
        var n = this;
        E(i.file, function(r) {
            t.image_url = i.url,
            t.uploadLabel.setAttribute("style", "background-image: url(" + r + ") !important;transform: " + o),
            e.removeClass(t.itemElement, "image-loader"),
            e.addClass(t.itemElement, "active-placeholder"),
            u.call(n)
        })
    }
    function w(t) {
        e.hasClass(t.itemElement, "image-error") && (e.removeClass(t.itemElement, "image-error"),
        t.captionElement.value = "")
    }
    function _(t, i, o) {
        e.removeClass(t.itemElement, "image-loader"),
        t.active = !1,
        e.addClass(t.itemElement, "image-error"),
        e.removeClass(t.itemElement, "active-placeholder");
        var n = o.name.length > I ? "\u2026" + o.name.slice(o.name.length - I, o.name.length) : o.name;
        t.captionElement.readOnly = !0,
        t.captionElement.value = n + "\r\n" + C.call(this, i, S(o)),
        t.captionElement.setAttribute("aria-label", "error " + t.captionElement.value),
        u.call(this)
    }
    function S(e) {
        return fileType = e.type.startsWith("image/") ? t.FILE_TYPE.IMAGE : e.type.startsWith("video/") ? t.FILE_TYPE.VIDEO : t.FILE_TYPE.INVALID,
        fileType
    }
    function C(i, o) {
        switch (i[0]) {
        case e.Helpers.FileValidator.ERROR_TYPES.INVALID_TYPE:
            return this.videoSupportSettings.uploadEnabled ? e.texts.upload_video_invalid_type : e.texts.upload_photos_invalid_type;
        case e.Helpers.FileValidator.ERROR_TYPES.INVALID_SIZE:
            return o == t.FILE_TYPE.VIDEO ? e.texts.upload_video_invalid_size : e.texts.upload_photos_invalid_size;
        case e.Helpers.FileValidator.ERROR_TYPES.INVALID_IMAGE_DIMENSIONS:
            return e.texts.upload_photos_invalid_image_dimensions;
        case e.Helpers.FileValidator.ERROR_TYPES.INVALID_IMAGE_FILE:
            return e.texts.upload_photos_invalid_image_file;
        case q:
            return e.texts.upload_video_error;
        default:
            return e.texts.upload_photos_invalid_image_file
        }
    }
    function A(t) {
        t.isVideo ? (t.cancelVideoUpload(),
        t.isVideo = !1) : "function" == typeof t.cancelImageUpload && t.cancelImageUpload(),
        t.captionElement.setAttribute("aria-label", "Add a caption... for image"),
        t.active = !1,
        t.captionElement.disabled = !0,
        t.fileInput.disabled = !1,
        t.uploadLabel.setAttribute("style", "background-image: none !important"),
        w(t),
        e.removeClass(t.itemElement, "active-placeholder"),
        e.addClass(t.itemElement, "image-empty"),
        e.removeClass(t.itemElement, "image-loader"),
        u.call(this)
    }
    function E(e, t) {
        var i = new FileReader;
        i.onload = function(e) {
            t(e.target.result)
        }
        ,
        i.readAsDataURL(e)
    }
    t.FILE_TYPE = {
        INVALID: 0,
        IMAGE: 1,
        VIDEO: 2
    };
    var k, x = 3, I = 19, P = {
        maxFileSize: 15728640,
        fileTypes: ["image/png", "image/gif", "image/jpg", "image/jpeg"],
        minImageWidth: 400,
        minImageHeight: 400
    }, T = {
        maxFileSize: 2097152e3
    }, q = "video_upload_error", F = null;
    return t.prototype = Object.create(e.Modules.PopupWindow.prototype),
    t.prototype.upload = function(e) {
        function t() {
            r.call(this),
            this.open(),
            o.call(this),
            i.call(this),
            s.call(this),
            p.call(this, a)
        }
        var a = Array.prototype.slice.call(e, 0, k);
        null === F ? n.call(this, t.bind(this)) : t.call(this)
    }
    ,
    t.prototype.resetModalContent = function() {
        s.call(this);
        for (var e = 0; k > e; e++)
            A.call(this, this.itemsArray[e]),
            this.itemsArray[e].captionElement.value = ""
    }
    ,
    t
}(Yotpo),
Yotpo.Flows = Yotpo.Flows || {},
Yotpo.Flows.ImageUpload = Yotpo.Flows.ImageUpload || {},
Yotpo.Flows.ImageUpload.UserDetails = function(e) {
    function t(t, o, n) {
        this.modalElement = t,
        this.successCallback = o,
        this.backCallback = n,
        this.validUserName = !1,
        this.validUserEmail = !1,
        e.Modules.PopupWindow.call(this, t, {
            closeWhenPressedOutside: !1
        }),
        i.call(this)
    }
    function i() {
        var t = this
          , i = this.modalElement.querySelector(".yotpo-icon-cross")
          , l = this.modalElement.querySelector(".user_details_back")
          , c = document.activeElement;
        this.submitLabel = this.modalElement.querySelector(".yotpo-modal-submit-label"),
        this.loader = this.modalElement.querySelector(".yotpo-submit-loader"),
        this.userName = this.modalElement.querySelector("#user-name"),
        this.userNameLabel = this.modalElement.querySelector("#user-name-label"),
        this.userEmail = this.modalElement.querySelector("#user-email"),
        this.userEmailLabel = this.modalElement.querySelector("#user-email-label"),
        this.submitButton = this.modalElement.querySelector(".yotpo-modal-submit-button"),
        this.userNameValidationMessage = this.modalElement.querySelector(".validation-message.username"),
        this.userEmailValidationMessage = this.modalElement.querySelector(".validation-message.email"),
        this.submitValidationMessage = this.modalElement.querySelector(".validation-message.submit"),
        i.onclick = function() {
            c.focus(),
            t.close(!0)
        }
        ,
        i.onkeypress = function(e) {
            13 == e.keyCode && e.target.click()
        }
        ,
        l.onclick = this.backCallback,
        l.onkeypress = this.backCallback,
        this.userName.onkeyup = function() {
            t.validUserName = 0 !== t.userName.value.trim().length,
            o.call(t)
        }
        ,
        this.userEmail.onkeyup = function() {
            t.validUserEmail = 0 !== t.userEmail.value.trim().length && e.validateEmail(t.userEmail.value) ? !0 : !1,
            o.call(t)
        }
        ,
        this.submitButton.onclick = function() {
            n.call(t),
            r.call(t),
            s.call(t),
            t.validUserName && t.validUserEmail ? (e.removeClass(t.loader, "yotpo-hidden"),
            e.addClass(t.submitLabel, "yotpo-hidden"),
            t.successCallback(t.userName.value, t.userEmail.value)) : a.call(t)
        }
        ,
        this.submitButton.onkeypress = function(i) {
            13 != i.keyCode || i.target.disabled || e.hasClass(t.submitButton, "yotpo-next-submit-disabled") || i.target.click()
        }
    }
    function o() {
        this.validUserName && this.validUserEmail && (this.submitButton.disabled = !1,
        this.submitButton.setAttribute("aria-disabled", !1),
        e.removeClass(this.submitButton, "yotpo-next-submit-disabled"))
    }
    function n() {
        this.validUserName ? (e.removeClass(this.userName, "yotpo-input-invalid"),
        this.userName.setAttribute("aria-invalid", !1),
        this.userNameValidationMessage.removeAttribute("role"),
        e.removeClass(this.userNameValidationMessage, "visible")) : (e.addClass(this.userName, "yotpo-input-invalid"),
        this.userName.setAttribute("aria-invalid", !0),
        e.removeClass(this.userNameLabel, "yotpo-hidden"),
        this.userNameLabel.setAttribute("name", "user-name"),
        this.userNameValidationMessage.setAttribute("role", "alert"),
        e.addClass(this.userNameValidationMessage, "visible"))
    }
    function r() {
        this.validUserEmail ? (e.removeClass(this.userEmail, "yotpo-input-invalid"),
        this.userEmail.setAttribute("aria-invalid", !1),
        this.userEmailValidationMessage.removeAttribute("role"),
        e.removeClass(this.userEmailValidationMessage, "visible")) : (e.addClass(this.userEmail, "yotpo-input-invalid"),
        this.userEmail.setAttribute("aria-invalid", !0),
        e.removeClass(this.userEmailLabel, "yotpo-hidden"),
        this.userEmailLabel.setAttribute("name", "user-email"),
        this.userEmailValidationMessage.setAttribute("role", "alert"),
        e.addClass(this.userEmailValidationMessage, "visible"))
    }
    function s() {
        this.validUserEmail && this.validUserName ? (this.submitValidationMessage.removeAttribute("role"),
        e.removeClass(this.submitValidationMessage, "visible")) : (this.submitValidationMessage.setAttribute("role", "alert"),
        e.addClass(this.submitValidationMessage, "visible"))
    }
    function a() {
        this.validUserName ? this.validUserEmail || this.userEmail.focus() : this.userName.focus()
    }
    return t.prototype = Object.create(e.Modules.PopupWindow.prototype),
    t.prototype.resetModalContent = function() {
        e.addClass(this.loader, "yotpo-hidden"),
        e.removeClass(this.submitLabel, "yotpo-hidden"),
        e.removeClass(this.userName, "yotpo-input-invalid"),
        e.removeClass(this.userEmail, "yotpo-input-invalid"),
        e.removeClass(this.userNameValidationMessage, "visible"),
        e.removeClass(this.userEmailValidationMessage, "visible"),
        e.removeClass(this.submitValidationMessage, "visible"),
        this.userName.value = "",
        this.userEmail.value = "",
        this.validUserName = !1
    }
    ,
    t
}(Yotpo),
Yotpo.BaseAggregator = function() {
    function e() {
        this.baseObject = null
    }
    return e.prototype.addFilter = function(e) {
        this.baseObject = e
    }
    ,
    e.prototype.removeFilter = function() {
        this.baseObject = null
    }
    ,
    e.prototype.deepCopy = function() {
        return this.baseObject
    }
    ,
    e.prototype.setFilters = function(e) {
        this.baseObject = e
    }
    ,
    e.prototype.toJson = function() {
        return this.baseObject
    }
    ,
    e.prototype.isFilterExists = function() {
        return null != this.baseObject
    }
    ,
    e.prototype.initAggregator = function() {
        this.baseObject = null
    }
    ,
    e
}(Yotpo),
Yotpo.CrfsAggregator = function(e) {
    function t() {
        this.crfFilters = {}
    }
    return t.prototype.addFilter = function(t) {
        var i = new e.CrfFilter(t.id,t.value,t.displayValue);
        this.crfFilters[t.id] = i
    }
    ,
    t.prototype.removeFilter = function(e) {
        delete this.crfFilters[e.id]
    }
    ,
    t.prototype.deepCopy = function() {
        var e = {};
        for (var t in this.crfFilters) {
            var i = this.crfFilters[t].deepCopy();
            e[t] = i
        }
        return e
    }
    ,
    t.prototype.setFilters = function(e) {
        this.crfFilters = e
    }
    ,
    t.prototype.toJson = function() {
        var e = [];
        for (var t in this.crfFilters) {
            var i = this.crfFilters[t];
            e.push(i.toJson())
        }
        return 0 !== e.length ? e : null
    }
    ,
    t.prototype.isFilterExists = function() {
        return 0 !== Object.keys(this.crfFilters).length
    }
    ,
    t.prototype.initAggregator = function() {
        this.crfFilters = {}
    }
    ,
    t
}(Yotpo),
Yotpo.OrdersAggregator = function(e) {
    function t() {
        this.orderFilters = {}
    }
    return t.prototype.addFilter = function(t) {
        var i = new e.OrderFilter(t.id,t.sub_type,t.question,[t.value]);
        this.orderFilters[t.id] = i
    }
    ,
    t.prototype.removeFilter = function(e) {
        delete this.orderFilters[e.id]
    }
    ,
    t.prototype.deepCopy = function() {
        var e = {};
        for (var t in this.orderFilters) {
            var i = this.orderFilters[t].deepCopy();
            e[t] = i
        }
        return e
    }
    ,
    t.prototype.setFilters = function(e) {
        this.orderFilters = e
    }
    ,
    t.prototype.toJson = function() {
        var e = [];
        for (var t in this.orderFilters) {
            var i = this.orderFilters[t];
            e.push(i.toJson())
        }
        return 0 !== e.length ? e : null
    }
    ,
    t.prototype.isFilterExists = function() {
        return 0 !== Object.keys(this.orderFilters).length
    }
    ,
    t.prototype.initAggregator = function() {
        this.orderFilters = {}
    }
    ,
    t
}(Yotpo),
Yotpo.ScoresAggregator = function(e) {
    function t() {
        e.BaseAggregator.call(this)
    }
    return t.prototype = Object.create(e.BaseAggregator.prototype),
    t.prototype.toJson = function() {
        return this.baseObject ? [this.baseObject] : null
    }
    ,
    t
}(Yotpo),
Yotpo.SortsAggregator = function(e) {
    function t() {
        this.sortByFilters = {}
    }
    return t.prototype.addFilter = function(t) {
        var i = new e.SortByFilter(t.value.fieldName,t.value.isAscending);
        this.sortByFilters[t.id] = i
    }
    ,
    t.prototype.removeFilter = function(e) {
        delete this.sortByFilters[e.id]
    }
    ,
    t.prototype.deepCopy = function() {
        var e = {};
        for (var t in this.sortByFilters) {
            var i = this.sortByFilters[t].deepCopy();
            e[t] = i
        }
        return e
    }
    ,
    t.prototype.setFilters = function(e) {
        this.sortByFilters = e
    }
    ,
    t.prototype.toJson = function() {
        var e = [];
        for (var t in this.sortByFilters) {
            var i = this.sortByFilters[t];
            e.push(i.toJson())
        }
        return 0 !== e.length ? e : null
    }
    ,
    t.prototype.isFilterExists = function() {
        return 0 !== Object.keys(this.sortByFilters).length
    }
    ,
    t.prototype.initAggregator = function() {
        this.sortByFilters = {}
    }
    ,
    t
}(Yotpo),
Yotpo.TopicsAggregator = function(e) {
    function t() {
        e.BaseAggregator.call(this)
    }
    return t.prototype = Object.create(e.BaseAggregator.prototype),
    t.prototype.toJson = function() {
        return this.baseObject ? [this.baseObject] : null
    }
    ,
    t
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.Analytics = Yotpo.FilterAndSearch.Analytics || {},
Yotpo.FilterAndSearch.Analytics.AnalyticsNotifier = function(e) {
    function t(t, o, n) {
        var r = this._controller.getAppKey()
          , s = e.getApiHost("dynamic") + "/v1/topic/" + r + "/related_topics.json"
          , a = e.convertComplexObjectToQueryStringParams({
            app_key: r,
            domain_key: t,
            query: o
        })
          , l = this
          , c = function(e) {
            var o = JSON.parse(e);
            200 === o.status.code && (l.freeTextRelatedTopics = o.response.related_topics,
            i.call(l, n.ctaName, t, n.eventValue, n.extraEventAttributes))
        };
        e.ajax(s, c, "POST", a)
    }
    function i(t, i, o, n) {
        var r = e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(this)
          , s = {
            cta: t,
            page_type: r,
            sku: i
        };
        e.copy(n, s);
        var a = e.FilterAndSearch.Analytics.Filtering.Params.getFiltersState.call(this);
        e.copy(a, s),
        this.settings && e.copy(this.settings, s);
        try {
            e.currentAnalytics.trackEvent("filter_reviews", "clicked_on", i, o, s)
        } catch (l) {
            e.safeConsole(l.message)
        }
    }
    var o, n = {};
    return n.init = function() {
        o = e.filterAndSearch.analytics.page_types,
        e.FilterAndSearch.Analytics.Filtering.Params.init(),
        this.analyticsFilterId = 0,
        this.freeTextRelatedTopics = []
    }
    ,
    n.notifyMobileFiltersSubmitted = function(e) {
        i.call(this, "apply_button", e, "show_reviews", {})
    }
    ,
    n.notifyFreeTextSearched = function(o, n, r) {
        var s = e.FilterAndSearch.Analytics.Filtering.Params.getEventParams(o, n);
        n ? t.call(this, r, n, s) : (this.freeTextRelatedTopics = [],
        i.call(this, s.ctaName, r, s.eventValue, s.extraEventAttributes))
    }
    ,
    n.notifyClearAllEvent = function(t) {
        this.freeTextRelatedTopics = [];
        var o = e.FilterAndSearch.Analytics.Filtering.Params.getClearAllEventParams();
        i.call(this, o.ctaName, t, o.eventValue, o.extraEventAttributes)
    }
    ,
    n.notifyEvent = function(t, o, n) {
        var r = e.FilterAndSearch.Analytics.Filtering.Params.getEventParams(t, o);
        i.call(this, r.ctaName, n, r.eventValue, r.extraEventAttributes)
    }
    ,
    n.getPageType = function() {
        var e = o.main_widget
          , t = this.settings["host-widget"];
        return t && "testimonials" === t && (e = "testimonials" === this.settings.type ? o.testimonials_tab : o.dedicated_page),
        e
    }
    ,
    n
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.Analytics = Yotpo.FilterAndSearch.Analytics || {},
Yotpo.FilterAndSearch.Analytics.Filtering = Yotpo.FilterAndSearch.Analytics.Filtering || {},
Yotpo.FilterAndSearch.Analytics.Filtering.Params = function(e) {
    function t(e, t) {
        var i = "NaN"
          , o = "NaN"
          , n = {};
        switch (e) {
        case d.scores:
            o = "filter_star_rating",
            i = t.value,
            t.is_default_answer && (i = u);
            break;
        case d.images:
            o = "filter_reviews_images",
            i = "all",
            t.value === !0 && (i = "only_with_images");
            break;
        case d.crfs:
            o = "filter_field",
            i = t.value.value,
            n.filter_field_type = "crf";
            break;
        case d.orders:
            o = t.value.question,
            i = t.value.value,
            n.filter_field_type = "metadata",
            n.filter_field_sub_type = t.value.sub_type
        }
        return {
            eventValue: i,
            ctaName: o,
            extraEventAttributes: n
        }
    }
    function i(e) {
        var t = e[d.topics];
        return t ? t[0] : ""
    }
    function o(t, i, o) {
        switch (aggregatorType = void 0,
        o) {
        case "orders":
            aggregatorType = d.orders;
            break;
        case "crfs":
        default:
            aggregatorType = d.crfs
        }
        var s = t[aggregatorType]
          , a = []
          , l = [];
        s && e.forEach(s, function(e) {
            var t = i.querySelector('.filters-dropdown[data-type="' + o + '"][data-question-id="' + e.question_id + '"]');
            if (t) {
                l.push(e.question_id);
                var n = t.querySelector('.list-category[data-value="' + e.answers[0] + '"]');
                n && a.push({
                    question: t.getAttribute("data-default-button-display-value"),
                    answer: n.getAttribute("data-analytic-property")
                })
            }
        });
        var c = r(i, n(l), o);
        return a.concat(c)
    }
    function n(t) {
        var i = [];
        return e.forEach(t, function(e) {
            i.push(e.toString())
        }),
        i
    }
    function r(t, i, o) {
        var n = []
          , r = t.querySelectorAll('.filters-dropdown[data-type="' + o + '"]');
        return e.forEach(r, function(e) {
            var t = i.indexOf(e.getAttribute("data-question-id"));
            -1 === t && n.push({
                question: e.getAttribute("data-default-button-display-value"),
                answer: e.getAttribute("data-value")
            })
        }),
        n
    }
    function s(e) {
        var t = e[d.scores];
        return void 0 === t ? u : t[0].toString()
    }
    function a(e) {
        var t = e[d.sorts];
        return t ? t[0].sort_by : ""
    }
    function l(e) {
        var t = e[d.free_text_search];
        return t ? t : ""
    }
    function c(e, t) {
        return t ? void 0 !== e[d.images] : null
    }
    var d, u, p = {};
    return p.init = function() {
        d = e.filterAndSearch.filters_state_manager.aggregators_types,
        u = e.filterAndSearch.filters_drop_down_default_answer
    }
    ,
    p.getFiltersState = function() {
        var e = this.filtersManager.getCurrentSubmittedFilters();
        return this.analyticsFilterId++,
        {
            filters_state_id: this.analyticsFilterId,
            selected_topic: i(e),
            selected_crfs: o(e, this.reviewsContainerElement, "crfs"),
            selected_stars: s(e),
            selected_sort: a(e),
            selected_orders_metadata: o(e, this.reviewsContainerElement, "orders"),
            free_text_search: l(e),
            reviews_with_images: c(e, this.reviewsWithPicturesEnabled),
            related_topics: this.freeTextRelatedTopics,
            desktop_suggested_topics: this.desktopSuggestedTopics,
            mobile_suggested_topics: this.mobileSuggestedTopics
        }
    }
    ,
    p.getClearAllEventParams = function() {
        return {
            eventValue: "clear_all",
            ctaName: "clear_all",
            extraEventAttributes: {}
        }
    }
    ,
    p.getEventParams = function(e, i) {
        var o = ""
          , n = ""
          , r = {};
        switch (e) {
        case d.free_text_search:
            i && (o = i),
            n = "free_text_search";
            break;
        case d.sorts:
            i.is_default_answer || (o = i.value.value.fieldName),
            n = "sort";
            break;
        case d.topics:
            o = i,
            n = "topic";
            break;
        case d.images:
        case d.scores:
        case d.crfs:
        case d.orders:
            var s = t(e, i);
            o = s.eventValue,
            n = s.ctaName,
            r = s.extraEventAttributes
        }
        return {
            eventValue: o,
            ctaName: n,
            extraEventAttributes: r
        }
    }
    ,
    p
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.ContainersHandlers = Yotpo.FilterAndSearch.ContainersHandlers || {},
Yotpo.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler = function(e) {
    var t, i, o, n = {};
    return n.init = function() {
        t = e.filterAndSearch.filters_state_manager.aggregators_types,
        i = e.filterAndSearch.sort_drop_down_most_relevant_value,
        o = e.filterAndSearch.sorts_drop_down_default_answer
    }
    ,
    n.onMobileFiltersSubmitted = function(t) {
        var i = this;
        e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(i);
        var o = this.filtersManager.getCurrentSubmittedFilters()
          , n = Object.keys(o);
        if (e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.removeFiltersTags(this.reviewsContainerElement),
        n.length > 0) {
            var r = this.reviewsContainerElement.querySelector(".yotpo-filter-tag")
              , s = e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.getFilterTagElements(r, o, n)
              , a = r.parentElement;
            e.forEach(s, function(t) {
                e.addEventListener(t, "click", function() {
                    e.SearchInProgress.switchMode(i.reviewsContainerElement, !0);
                    var t = e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.parseChosenFilter(this);
                    i.filtersManager.removeFilter(!0, t.type, t.value);
                    var o = this.parentElement.querySelector(".pre-selected:checked");
                    if (o && (o.removeAttribute("checked"),
                    o.classList.remove("pre-selected")),
                    e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(i),
                    this.remove(),
                    i._controller.userSettings.widget_v2.settings.display_star_distribution && "scores" == this.getAttribute("data-type")) {
                        var n = i.element.getElementsByClassName("bottom-line-items-container-mobile")[0].getElementsByClassName("yotpo-distribution-rows");
                        if (n && n.length > 0) {
                            var r = new e.StarDistribution(n,i);
                            r.clearAllBars()
                        }
                    }
                    e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyEvent.call(i, t.type, t, i.settings.pid)
                });
                var o = a.querySelector(".mobile-filters-modal");
                a.insertBefore(t, o)
            })
        }
        if (this._controller.userSettings.widget_v2.settings.display_star_distribution && "star_distribution" != t) {
            var l = this.element.getElementsByClassName("bottom-line-items-container-mobile")
              , c = null;
            if (l && l.length > 0 && (c = l[0].getElementsByClassName("yotpo-distribution-rows")),
            c && c.length > 0) {
                var d = new e.StarDistribution(c,this);
                if (n.includes("scores")) {
                    var u = o.scores[0]
                      , p = 5 - u;
                    d.mouseClickByIndex(p)
                } else
                    d.clearAllBars()
            }
        }
    }
    ,
    n.onFreeTextSearchedCallBack = function(n) {
        this.previousTextSearched && (e.SearchInProgress.switchMode(this.reviewsContainerElement, !0),
        this.filtersManager.removeFilter(!0, t.free_text_search, this.previousTextSearched)),
        this.filtersManager.initAggregator(t.sorts);
        var r;
        n ? (e.SearchInProgress.switchMode(this.reviewsContainerElement, !0),
        this.filtersManager.addFilter(!0, t.free_text_search, n),
        this.previousTextSearched = n,
        r = i) : (this.previousTextSearched = null,
        r = o);
        var s = this.reviewsContainerElement.querySelector(".sorting");
        s && (e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.setDropDownButtonValue(s, i, i),
        e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.unmarkAnswer(s)),
        e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyFreeTextSearched.call(this, t.free_text_search, n, this.settings.pid),
        e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(this)
    }
    ,
    n.onClearTextSearchedCallBack = function() {
        if (this.previousTextSearched) {
            e.SearchInProgress.switchMode(this.reviewsContainerElement, !0),
            this.filtersManager.removeFilter(!0, t.free_text_search, this.previousTextSearched),
            this.previousTextSearched = null;
            var i = this.reviewsContainerElement.querySelector(".sorting");
            if (i) {
                var o = i.querySelector("[data-is-default-answer=true]");
                o && e.simulateClickEvent(o)
            }
            e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyFreeTextSearched.call(this, t.free_text_search, "", this.settings.pid),
            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(this)
        }
    }
    ,
    n.clearAllFilters = function() {
        e.SearchInProgress.switchMode(this.reviewsContainerElement, !0),
        this.filtersManager.clearAllFilters(),
        e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.removeFiltersTags(this.reviewsContainerElement),
        e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.resetAllDropDowns(this.filtersDropDowns);
        var t = this.reviewsContainerElement.querySelector(".suggested-topics");
        if (t) {
            var i = t.querySelectorAll(".active-topic");
            e.SuggestedTopics.resetSelectedTopic(i)
        }
        if (e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(this),
        e.FreeTextSearch.clearSearchedText.call(this),
        this.previousTextSearched = null,
        e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyClearAllEvent.call(this, this.settings.pid),
        this._controller.userSettings.new_main_widget_layout && this._controller.userSettings.widget_v2.settings.display_star_distribution) {
            var o = this.element.querySelector(e.isMobile() ? ".bottom-line-items-container-mobile" : ".bottom-line-items-container-desktop")
              , n = o.getElementsByClassName("yotpo-distribution-rows");
            if (n && n.length > 0) {
                var r = new e.StarDistribution(n,this);
                r.clearAllBars()
            }
        }
    }
    ,
    n.onSelectFilter = function(i, o, n, r) {
        e.SearchInProgress.switchMode(this.reviewsContainerElement, !0);
        var s = e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.parseChosenFilter(i, n)
          , a = e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.parseChosenFilter(i, o);
        if (e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.unmarkAnswer(n),
        o.setAttribute("aria-selected", "true"),
        n && n.setAttribute("aria-selected", "false"),
        this.filtersManager.removeFilter(!0, s.type, s.value),
        a.is_default_answer ? (e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.resetDefaultDropDownButtonValue(i),
        e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.markTextualAnswer(o)) : (this.filtersManager.addFilter(!0, a.type, a.value),
        a.type === t.scores ? (e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.markStarsAnswer(o),
        e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.setDropDownButtonStars(i, o)) : e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.markTextualAnswer(o)),
        e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyEvent.call(this, a.type, a, this.settings.pid),
        e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(this),
        this._controller.userSettings.widget_v2.settings.display_star_distribution && "scores" == i.getAttribute("data-type") && "star_distribution" != r) {
            var l = Array.prototype.slice.call(i.getElementsByClassName("list-category"))
              , c = l.indexOf(o) - 1
              , d = this.element.getElementsByClassName("yotpo-distribution-rows");
            if (d && d.length > 0)
                var u = new e.StarDistribution(d,this);
            u.mouseClickByIndex(c)
        }
    }
    ,
    n.onSelectSort = function(i, o, n) {
        if (e.SearchInProgress.switchMode(this.reviewsContainerElement, !0),
        n) {
            e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.unmarkAnswer(n);
            var r = e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.parseChosenFilter(i, n);
            this.filtersManager.removeFilter(!0, r.type, r.value)
        }
        var s = e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.parseChosenFilter(i, o);
        s.is_default_answer ? e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.resetDefaultDropDownButtonValue(i) : (this.filtersManager.addFilter(!0, s.type, s.value),
        e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.markTextualAnswer(o)),
        e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyEvent.call(this, t.sorts, s, this.settings.pid),
        e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(this)
    }
    ,
    n.onSubmittedFiltersChange = function(t, i, o, n, r) {
        if (t.settings.page = r.page,
        t.isFilteredReviews = !0,
        t.getElement().innerHTML = n,
        i) {
            var s = new DOMParser
              , a = s.parseFromString(n, "text/html")
              , l = a.querySelector(".total-reviews-search").getAttribute("total-reviews-search")
              , c = i.querySelector(".reviews-amount");
            c.innerHTML = l + " ",
            c.innerHTML += 1 == l ? e.filterAndSearch.single_review_title : e.filterAndSearch.filtered_reviews_title
        }
        var d = o.querySelector(".empty-search-results-clear-all-btn");
        if (d) {
            var u = this;
            e.addEventListener(d, "click", function() {
                e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.clearAllFilters.call(u)
            })
        }
        "function" == typeof t.trigger && (t.trigger("refreshed"),
        t.trigger("ready"));
        try {
            e.currentAnalytics.trackEvent("filter_reviews", "filter_results", t.settings.pid, "filter_results", {
                cta: "filter_results",
                results_count: parseInt(l),
                applied_filters: this.filtersManager.states.submitted.toJson(),
                page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(this),
                filters_state_id: this.analyticsFilterId
            })
        } catch (p) {
            e.safeConsole(p.message)
        }
    }
    ,
    n.setClearAllButtonsState = function() {
        for (var t = this.filtersManager.isFiltersExists(), i = 0; i < this.clearAllButtons.length; i++)
            t ? e.removeClass(this.clearAllButtons[i], "yotpo-hidden") : e.addClass(this.clearAllButtons[i], "yotpo-hidden")
    }
    ,
    n
}(Yotpo),
Yotpo.CrfFilter = function(e) {
    function t(e, t, i) {
        this.questionId = e,
        this.value = t,
        this.displayValue = i
    }
    return t.prototype.toJson = function() {
        return {
            question_id: this.questionId,
            answers: [this.value],
            display_answers: [this.displayValue]
        }
    }
    ,
    t.prototype.deepCopy = function() {
        return new e.CrfFilter(this.questionId,this.value,this.displayValue)
    }
    ,
    t
}(Yotpo),
Yotpo.OrderFilter = function(e) {
    function t(e, t, i, o) {
        this.questionId = e,
        this.subType = t,
        this.question = i,
        this.answers = o
    }
    return t.prototype.toJson = function() {
        return {
            question_id: this.questionId,
            subType: this.subType,
            question: this.question,
            answers: this.answers
        }
    }
    ,
    t.prototype.deepCopy = function() {
        return new e.OrderFilter(this.questionId,this.subType,this.question,this.answers)
    }
    ,
    t
}(Yotpo),
Yotpo.SortByFilter = function(e) {
    function t(e, t) {
        this.fieldName = e,
        this.isAscending = t
    }
    return t.prototype.toJson = function() {
        return {
            sort_by: this.fieldName,
            ascending: this.isAscending
        }
    }
    ,
    t.prototype.deepCopy = function() {
        return new e.SortByFilter(this.fieldName,this.isAscending)
    }
    ,
    t
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.FiltersHandlers = Yotpo.FilterAndSearch.FiltersHandlers || {},
Yotpo.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler = function(e) {
    function t(t) {
        e.addClass(t, "non-selected-item"),
        e.removeClass(t, "selected-item")
    }
    function i(t) {
        for (var i = t.querySelectorAll(".yotpo-filter-stars > .rating-star"), o = 0; o < i.length; o++)
            e.addClass(i[o], "non-selected-star"),
            e.removeClass(i[o], "selected-stars")
    }
    function o(e) {
        var t = e.querySelector(".yotpo-filter-stars");
        t && t.parentNode.removeChild(t)
    }
    var n, r, s, a, l = {};
    return l.init = function() {
        n = e.filterAndSearch.filters_state_manager.aggregators_types,
        r = e.filterAndSearch.filters_drop_down_default_answer,
        s = e.filterAndSearch.sorts_drop_down_default_answer,
        a = e.filterAndSearch.images_drop_down_answer,
        e.FilterAndSearch.FiltersHandlers.FiltersParser.init()
    }
    ,
    l.parseChosenFilter = function(t, i) {
        var o = i.getAttribute("data-type")
          , r = i.getAttribute("data-value");
        switch (o) {
        case n.images:
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseImagesFilter(r);
        case n.scores:
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseScoresFilter(r);
        case n.crfs:
            var s = t.getAttribute("data-question-id");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseCrfFilter(s, r);
        case n.orders:
            var s = t.getAttribute("data-question-id");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseOrdersFilter(s, t, r);
        case n.sorts:
            var a = i.getAttribute("sort-name")
              , l = "true" === i.getAttribute("data-ascending");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseSorts(a, r, l)
        }
    }
    ,
    l.resetAllDropDowns = function(t) {
        for (var i = 0; i < t.length; i++) {
            var o = t[i];
            o.currentSelectedItem && (e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.unmarkAnswer(o.currentSelectedItem),
            e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.markTextualAnswer(o.defaultAnswerItem),
            o.previousSelectedItem = void 0,
            o.currentSelectedItem = void 0),
            e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.resetDefaultDropDownButtonValue(o.element)
        }
    }
    ,
    l.resetDefaultDropDownButtonValue = function(e) {
        this.setDropDownButtonValue(e, e.getAttribute("data-default-button-display-value"), e.getAttribute("data-default-sort-name"))
    }
    ,
    l.setDropDownButtonValue = function(t, i, n) {
        var r = t.querySelector(".yotpo-dropdown-button")
          , s = r.querySelector(".selected")
          , a = r.querySelector(".non-default-item-selected");
        a && e.removeClass(a, "yotpo-hidden"),
        e.removeClass(s, "non-default-item-selected"),
        s.innerText = i,
        s.setAttribute("data-selected-key", n),
        o(r)
    }
    ,
    l.setDropDownButtonStars = function(t, i) {
        var n = t.querySelector(".yotpo-dropdown-button");
        n.querySelector(".non-default-item-selected").classList.add("yotpo-hidden"),
        o(n);
        var r = i.getElementsByClassName("yotpo-filter-stars")[0]
          , s = r.cloneNode(!0);
        e.addClass(s, "selected"),
        n.appendChild(s)
    }
    ,
    l.unmarkAnswer = function(e) {
        var o = e.querySelector(".selected-item");
        o ? t(o) : i(e)
    }
    ,
    l.markTextualAnswer = function(t) {
        var i = t.querySelector(".non-selected-item");
        i && (e.addClass(i, "selected-item"),
        e.removeClass(i, "non-selected-item"))
    }
    ,
    l.markStarsAnswer = function(t) {
        for (var i = t.querySelectorAll(".yotpo-filter-stars > .rating-star"), o = 0; o < i.length; o++)
            e.addClass(i[o], "selected-stars"),
            e.removeClass(i[o], "non-selected-star")
    }
    ,
    l
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.FiltersHandlers = Yotpo.FilterAndSearch.FiltersHandlers || {},
Yotpo.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler = function(e) {
    function t(t) {
        for (var i = t.length, o = 0; i > o; o++)
            e.addClass(t[0], "radio-non-selected-color"),
            e.removeClass(t[0], "radio-selected-star-color")
    }
    function i(t) {
        for (var i = 0; i < t.length; i++)
            e.addClass(t[i], "radio-selected-star-color"),
            e.removeClass(t[i], "radio-non-selected-color")
    }
    var o, n, r = {};
    return r.init = function() {
        o = e.filterAndSearch.filters_state_manager.aggregators_types,
        n = e.filterAndSearch.filters_drop_down_default_answer,
        e.FilterAndSearch.FiltersHandlers.FiltersParser.init()
    }
    ,
    r.parseChosenFilter = function(t, i) {
        var n = i ? t.selected : t.prevSelected
          , r = n.getAttribute("data-value")
          , s = t.containerElement || t.element
          , a = s.getAttribute("data-type");
        if (a === o.scores)
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseScoresFilter(r);
        if (a === o.images)
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseImagesFilter(r);
        if (a === o.crfs) {
            var l = n.getAttribute("data-question-id")
              , c = n.getAttribute("data-display-value");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseCrfFilter(l, r, c)
        }
        if (a === o.orders) {
            var l = n.getAttribute("data-question-id");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseOrdersFilter(l, s, r)
        }
    }
    ,
    r.resetSelectedToDefault = function(e, i) {
        if (i === o.scores) {
            var n = e.containerElement.getElementsByClassName("radio-selected-star-color");
            t(n)
        } else
            this.unmarkTextualAnswer(e.prevSelected)
    }
    ,
    r.unmarkTextualAnswer = function(e) {
        var t = e.parentElement.querySelector(".radio-label");
        t.classList.add("radio-non-selected-color"),
        t.classList.remove("radio-selected-color")
    }
    ,
    r.markTextualAnswer = function(e) {
        var t = e.parentElement.querySelector(".radio-label");
        t.classList.add("radio-selected-color"),
        t.classList.remove("radio-non-selected-color")
    }
    ,
    r.setSelectedStarsUI = function(e, o) {
        var r = e.selected.parentElement.querySelector(".yotpo-filter-stars")
          , s = e.containerElement.getElementsByClassName("radio-selected-star-color");
        if (s.length > 0 && t(s),
        o.value !== n) {
            var a = r.getElementsByClassName("yotpo-icon");
            i(a)
        }
    }
    ,
    r.loadWithCurrentFilters = function(t, i) {
        var n, r;
        n = t.querySelector(i[o.scores] ? "[id^='radio-score-" + i.scores + "']" : "[id^='radio-score-all']"),
        n.click(),
        r = t.querySelector(i[o.images] ? "[id^='radio-images-only']" : "[id^='radio-images-all-reviews']"),
        r && r.click();
        var s = t.querySelectorAll('div.mobile-single-filter[name^="radio-question-"]')
          , a = Array.from(s)
          , l = [];
        l = e.compact(l.concat(i[o.crfs]).concat(i[o.orders])),
        e.forEach(l, function(e) {
            if (e.answers.length > 0) {
                var i = "radio-question-" + e.question_id
                  , o = t.querySelector('[id="' + i + '"]')
                  , n = e.display_answers ? e.display_answers[0] : e.answers[0]
                  , r = o.querySelector('[id="radio-question-answer-' + n + "-" + e.question_id + '"]');
                r.click();
                var s = t.querySelector('div.mobile-single-filter[name="' + r.name + '"]')
                  , l = a.indexOf(s);
                l > -1 && a.splice(l, 1)
            }
        });
        for (var c = 0; c < a.length; c++) {
            var d = a[c].querySelector(".mobile-filter-radio-button");
            d.getElementsByTagName("input")[0].click()
        }
    }
    ,
    r
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.FiltersHandlers = Yotpo.FilterAndSearch.FiltersHandlers || {},
Yotpo.FilterAndSearch.FiltersHandlers.FilterTagsHandler = function(e) {
    function t(t, i) {
        var o = t.cloneNode(!0);
        return o.classList.remove("yotpo-hidden"),
        o.setAttribute("data-type", i.type),
        o.setAttribute("data-value", i.value),
        o.setAttribute("data-question-id", i.question_id),
        o.querySelector(".filter-tag-text").innerText = e.toTitleCase(i.displayText),
        o
    }
    var i, o, n = {};
    return n.init = function() {
        i = i || e.filterAndSearch.filters_state_manager.aggregators_types,
        o = e.filterAndSearch.rating_tag_title,
        e.FilterAndSearch.FiltersHandlers.FiltersParser.init()
    }
    ,
    n.removeFiltersTags = function(e) {
        for (var t = Array.prototype.slice.call(e.querySelectorAll(".yotpo-filter-tag")), i = t.length, o = 0; i > o; o++) {
            var n = t.pop();
            n.classList.contains("yotpo-hidden") || n.remove()
        }
    }
    ,
    n.parseChosenFilter = function(t) {
        var o = t.getAttribute("data-value")
          , n = t.getAttribute("data-type");
        if (n === i.scores)
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseScoresFilter(r, o);
        if (n === i.images)
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseImagesFilter(r, o);
        if (n === i.crfs) {
            var r = t.getAttribute("data-question-id");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseCrfFilter(r, o)
        }
        if (n === i.orders) {
            var r = t.getAttribute("data-question-id");
            return e.FilterAndSearch.FiltersHandlers.FiltersParser.parseOrdersFilter(r, t, o)
        }
    }
    ,
    n.getFilterTagElements = function(n, r, s) {
        for (var a = [], l = {}, c = this, d = 0; d < s.length; d++) {
            var u = s[d];
            switch (u) {
            case i.scores:
                l.type = i.scores,
                l.value = r[u][0],
                l.question_id = r.question_id,
                l.displayText = o + ": " + l.value,
                a.push(t.call(c, n, l));
                break;
            case i.images:
                l.type = i.images,
                l.value = r[u][0],
                l.question_id = r.question_id,
                l.displayText = e.filterAndSearch.withImagesOnly,
                a.push(t.call(c, n, l));
                break;
            case i.crfs:
            case i.orders:
                e.forEach(r[u], function(i) {
                    l.type = u,
                    l.value = i.display_answers ? i.display_answers[0] : i.answers[0],
                    l.question_id = i.question_id;
                    var o = e.getDocElement().querySelector('[id="radio-question-' + i.question_id + '"]')
                      , r = o.getAttribute("data-question-title");
                    l.displayText = r + ": " + l.value,
                    a.push(t.call(c, n, l))
                })
            }
        }
        return a
    }
    ,
    n
}(Yotpo),
Yotpo.FilterAndSearch = Yotpo.FilterAndSearch || {},
Yotpo.FilterAndSearch.FiltersHandlers = Yotpo.FilterAndSearch.FiltersHandlers || {},
Yotpo.FilterAndSearch.FiltersHandlers.FiltersParser = function(e) {
    var t, i, o, n, r = {};
    return r.init = function() {
        t = t || e.filterAndSearch.filters_state_manager.aggregators_types,
        i = i || e.filterAndSearch.filters_drop_down_default_answer,
        o = o || e.filterAndSearch.sorts_drop_down_default_answer,
        n = n || e.filterAndSearch.imagesMobileFilterDefaultAnswer
    }
    ,
    r.parseSorts = function(e, i, n) {
        var r = {
            type: t.sorts,
            is_default_answer: !0,
            value: {}
        };
        return i !== o && (r.is_default_answer = !1,
        r.value.id = e,
        r.value.value = {
            fieldName: i,
            isAscending: n
        }),
        r
    }
    ,
    r.parseCrfFilter = function(e, o, n) {
        var r = {
            type: t.crfs,
            is_default_answer: !0,
            value: {}
        };
        return o !== i && (r.is_default_answer = !1,
        r.value.id = parseInt(e),
        r.value.value = o,
        r.value.displayValue = n),
        r
    }
    ,
    r.parseImagesFilter = function(e) {
        var o = {
            type: t.images,
            is_default_answer: !0,
            value: !1
        };
        return e !== n && e !== i && (o.is_default_answer = !1,
        o.value = !0),
        o
    }
    ,
    r.parseScoresFilter = function(e) {
        var o = {
            type: t.scores,
            is_default_answer: !0,
            value: 0
        };
        return e !== i && (o.is_default_answer = !1,
        o.value = parseInt(e)),
        o
    }
    ,
    r.parseOrdersFilter = function(e, o, n) {
        var r = {
            type: t.orders,
            is_default_answer: !0,
            value: {}
        };
        return n !== i && (r.is_default_answer = !1,
        r.value.id = e,
        r.value.sub_type = o.getAttribute("data-sub-type"),
        r.value.question = o.getAttribute("data-question"),
        r.value.value = n),
        r
    }
    ,
    r
}(Yotpo),
Yotpo.FiltersState = function(e) {
    function t() {
        this.aggregatorItems = {},
        this.filtersExists = !1,
        n = e.filterAndSearch.filters_state_manager.aggregators_types,
        i.call(this)
    }
    function i() {
        this.aggregatorItems[n.crfs] = {
            aggregator: new e.CrfsAggregator,
            requestKey: "crfs",
            type: n.crfs
        },
        this.aggregatorItems[n.scores] = {
            aggregator: new e.ScoresAggregator,
            requestKey: "scores",
            type: n.scores
        },
        this.aggregatorItems[n.topics] = {
            aggregator: new e.TopicsAggregator,
            requestKey: "topic_names",
            type: n.topics
        },
        this.aggregatorItems[n.images] = {
            aggregator: new e.BaseAggregator,
            requestKey: "pictured",
            type: n.images
        },
        this.aggregatorItems[n.sorts] = {
            aggregator: new e.SortsAggregator,
            requestKey: "sortings",
            type: n.sorts
        },
        this.aggregatorItems[n.free_text_search] = {
            aggregator: new e.BaseAggregator,
            requestKey: "free_text_search",
            type: n.free_text_search
        },
        this.aggregatorItems[n.orders] = {
            aggregator: new e.OrdersAggregator,
            requestKey: "orders",
            type: n.orders
        }
    }
    function o() {
        var e = !1;
        for (var t in this.aggregatorItems) {
            var i = this.aggregatorItems[t];
            if (i.aggregator.isFilterExists()) {
                e = !0;
                break
            }
        }
        this.filtersExists = e
    }
    var n;
    return t.prototype.addFilter = function(e, t) {
        this.aggregatorItems[e].aggregator.addFilter(t),
        this.filtersExists = !0
    }
    ,
    t.prototype.removeFilter = function(e, t) {
        this.aggregatorItems[e].aggregator.removeFilter(t),
        o.call(this)
    }
    ,
    t.prototype.deepCopy = function() {
        var e = {};
        for (var t in this.aggregatorItems)
            e[t] = this.aggregatorItems[t].aggregator.deepCopy();
        return e
    }
    ,
    t.prototype.setAggregators = function(e) {
        for (var t in e)
            this.aggregatorItems[t].aggregator.setFilters(e[t]);
        o.call(this)
    }
    ,
    t.prototype.toJson = function() {
        var e = {};
        for (var t in this.aggregatorItems) {
            var i = this.aggregatorItems[t]
              , o = i.aggregator.toJson();
            null !== o && (e[i.requestKey] = o)
        }
        return e
    }
    ,
    t.prototype.getFilters = function() {
        var e = {};
        for (var t in this.aggregatorItems) {
            var i = this.aggregatorItems[t]
              , o = i.aggregator.toJson();
            null !== o && (e[i.type] = o)
        }
        return e
    }
    ,
    t.prototype.initAggregator = function(e) {
        this.aggregatorItems[e].aggregator.initAggregator()
    }
    ,
    t.prototype.isFiltersExists = function() {
        return this.filtersExists
    }
    ,
    t
}(Yotpo),
Yotpo.FiltersStateManager = function(e) {
    function t(t, i, o) {
        this.coreContoller = t,
        this.widget = i,
        this.widgetSettings = {},
        e.copy(o, this.widgetSettings),
        this.states = {},
        this.observers = [],
        s.call(this)
    }
    function i(t, i) {
        var o = {};
        o.method = "filtered_reviews",
        o.params = {},
        e.copy(this.widgetSettings, o.params),
        i = i || 1,
        o.params.page = i;
        var n;
        return n = t ? this.states[a].toJson() : this.states[l].toJson(),
        e.copy(n, o.params),
        o
    }
    function o(t, o) {
        var r = this
          , s = i.call(this, t, o);
        this.coreContoller.getBatch(function(i) {
            var o = n(i);
            r.observers.forEach(function(i) {
                t ? e.isMethodExists(i.OnSubmittedFiltersChange) && i.OnSubmittedFiltersChange(o, s.params) : e.isMethodExists(i.OnPendingFiltersChange) && i.OnPendingFiltersChange(o)
            })
        }, [s])
    }
    function n(e) {
        var t = JSON.parse(e);
        return t.shift().result
    }
    function r(e) {
        return e ? a : l
    }
    function s() {
        this.states[a] = new e.FiltersState,
        this.states[l] = new e.FiltersState
    }
    var a = "submitted"
      , l = "pending"
      , c = e.debounce(o, 400, !1);
    return t.prototype.addFilter = function(e, t, i) {
        var o = r(e);
        this.states[o].addFilter(t, i),
        c.call(this, e)
    }
    ,
    t.prototype.removeFilter = function(e, t, i) {
        var o = r(e);
        this.states[o].removeFilter(t, i),
        c.call(this, e)
    }
    ,
    t.prototype.approvePendingFilters = function() {
        var e = this.states[l].deepCopy();
        this.states[a].setAggregators(e),
        c.call(this, !0)
    }
    ,
    t.prototype.resetAllPendingToSubmitted = function() {
        var e = this.states[a].deepCopy();
        this.states[l].setAggregators(e)
    }
    ,
    t.prototype.resetAllPendingToDefault = function() {
        this.states[l] = new e.FiltersState
    }
    ,
    t.prototype.clearAllFilters = function() {
        s.call(this),
        c.call(this, !0)
    }
    ,
    t.prototype.subscribeToFiltersUpdate = function(e) {
        this.observers.push(e)
    }
    ,
    t.prototype.fetchPage = function(e) {
        c.call(this, !0, e)
    }
    ,
    t.prototype.getCurrentSubmittedFilters = function() {
        return this.states[a].getFilters()
    }
    ,
    t.prototype.getCurrentPendingFilters = function() {
        return this.states[l].getFilters()
    }
    ,
    t.prototype.isFiltersExists = function() {
        return this.states[a].isFiltersExists()
    }
    ,
    t.prototype.initAggregator = function(e) {
        return this.states[a].initAggregator(e)
    }
    ,
    t.prototype.AddSetting = function(e, t) {
        this.widgetSettings[e] = t
    }
    ,
    t
}(Yotpo),
Yotpo.FreeTextSearch = function(e) {
    var t = {};
    return t.bind = function(t, i, o, n) {
        var r = this
          , s = t.querySelector(".free-text-search-input")
          , a = t.querySelector(".yotpo-icon-microphone");
        if (a && !e.isHidden(a)) {
            var l = t.querySelector(".clear-text-icon");
            l.style.right = "33px";
            var c = !!window.chrome;
            c && (e.removeClass(a, "yotpo-hidden"),
            a.onmousedown = function() {
                e.currentAnalytics.trackUniqueEvent("voice_search", "clicked"),
                s.value = "Listening",
                e.Animations.printLetterByLetter(s, " ...", 150),
                e.addClass(a, "yotpo-record"),
                e.hide(l);
                var i = new (window.SpeechRecognition || window.SpeechSynthesis || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition);
                i.lang = yotpo.getUserSettings().gremlins_dev.settings.voice_search_lang,
                i.interimResults = !0,
                i.maxAlternatives = 1,
                i.start(),
                i.onresult = function(e) {
                    s.value = e.results[0][0].transcript
                }
                ,
                i.onspeechend = function() {
                    e.removeClass(a, "yotpo-record");
                    var i = t.querySelector(".clear-text-icon");
                    s.value && "Listening ..." != s.value ? (o.call(r, s.value),
                    e.show(i)) : (s.value = "",
                    e.hide(i))
                }
            }
            )
        }
        if (s) {
            r.freeTextSearchInput = s;
            var l = t.querySelector(".clear-text-icon");
            l && (r.clearTextSearchInput = l,
            e.addEventListener(s, "input", function() {
                this.value ? e.show(l) : e.hide(l)
            }),
            e.addEventListener(l, "click", function() {
                s.placeholder = i,
                s.value = "",
                r.freeTextSearchInput.focus(),
                n.call(r),
                e.hide(this)
            })),
            e.addEventListener(s, "focus", function() {
                this.placeholder = ""
            }),
            e.addEventListener(s, "blur", function() {
                "" == this.placeholder && (this.placeholder = i)
            }),
            r.previousTextSearched = null,
            e.addEventListener(s, "keyup", function(e) {
                var t = e.which || e.keyCode;
                13 === t && o.call(r, s.value)
            })
        }
    }
    ,
    t.clearSearchedText = function() {
        this.freeTextSearchInput && this.clearTextSearchInput && (this.freeTextSearchInput.value = "",
        e.hide(this.clearTextSearchInput))
    }
    ,
    t
}(Yotpo),
Yotpo.MobileFilterModal = function(e) {
    function t(t, r, a) {
        this.context = t,
        this.filtersManager = t.filtersManager,
        this.filtersManager.subscribeToFiltersUpdate(this),
        this.radioBtnFiltersRadio = [],
        e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.init(),
        s = e.filterAndSearch.filters_state_manager.aggregators_types,
        i.call(this, r, n),
        o.call(this, r, a)
    }
    function i(t, i) {
        for (var o = this, n = t.querySelectorAll(".mobile-single-filter"), r = 0; r < n.length; ++r) {
            var s = new e.MobileFiltersRadio(n[r]);
            s.on("change", function(e) {
                i.call(o, e)
            }),
            o.radioBtnFiltersRadio.push(s)
        }
    }
    function o(t, i) {
        var o = this
          , n = t.querySelector(".more-filters-btn")
          , s = t.querySelector(".sort-drop-down")
          , a = n;
        s && (a = s.querySelector(".yotpo-dropdown-button"));
        var l = t.querySelector(".mobile-filters-modal")
          , c = l.querySelector(".mobile-clear-all-btn")
          , d = l.querySelector(".yotpo-icon-cross");
        this.submitAllBtn = l.querySelector(".mobile-filters-footer-btn");
        var u = new e.Modules.PopupWindow(l,{
            closeWhenPressedOutside: !1
        });
        e.addEventListener(d, "click", function() {
            o.filtersManager.resetAllPendingToSubmitted(),
            u.close(!0),
            a.focus()
        }),
        e.addEventListener(n, "click", function() {
            var i = {
                cta: "filters_button",
                page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(o.context)
            };
            e.currentAnalytics.trackEvent("filter_reviews", "clicked_on", o.context.settings.pid, "filters", i);
            var n = o.filtersManager.getCurrentSubmittedFilters();
            o.filtersManager.resetAllPendingToSubmitted(),
            e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.loadWithCurrentFilters(l, n),
            r.call(o, t),
            u.open(),
            d.focus()
        }),
        e.addEventListener(c, "click", function() {
            o.filtersManager.resetAllPendingToDefault();
            var t = o.filtersManager.getCurrentPendingFilters();
            e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.loadWithCurrentFilters(l, t)
        }),
        e.addEventListener(this.submitAllBtn, "click", function() {
            e.SearchInProgress.switchMode(t, !0),
            o.filtersManager.approvePendingFilters(),
            e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyMobileFiltersSubmitted.call(o.context, o.context.settings.pid),
            i.call(o.context),
            u.close(),
            a.focus()
        })
    }
    function n(t) {
        var i = e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.parseChosenFilter(t, !0)
          , o = e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.parseChosenFilter(t, !1);
        this.filtersManager.removeFilter(!1, o.type, o.value),
        i.is_default_answer ? (e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.resetSelectedToDefault(t, i.type),
        e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.markTextualAnswer(t.selected)) : (this.filtersManager.addFilter(!1, i.type, i.value),
        e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.unmarkTextualAnswer(t.prevSelected),
        i.type === s.scores ? e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.setSelectedStarsUI(t, i) : e.FilterAndSearch.FiltersHandlers.FilterRadioButtonsHandler.markTextualAnswer(t.selected))
    }
    function r(t) {
        var i = t.querySelector(".total-reviews-search");
        if (i) {
            var o = i.getAttribute("total-reviews-search");
            this.submitAllBtn.querySelector(".footer-text").textContent = e.filterAndSearch.show + " " + o + " " + e.filterAndSearch.filtered_reviews_title,
            this.submitAllBtn.setAttribute("aria-label", e.filterAndSearch.show + " " + o + " " + e.filterAndSearch.filtered_reviews_title)
        }
    }
    var s;
    return t.prototype.OnPendingFiltersChange = function(t) {
        if (t) {
            var i = new DOMParser
              , o = i.parseFromString(t, "text/html")
              , n = o.querySelector(".total-reviews-search").getAttribute("total-reviews-search");
            this.submitAllBtn.getElementsByClassName("footer-text")[0].innerText = e.filterAndSearch.show + " " + n + " " + e.filterAndSearch.filtered_reviews_title,
            this.submitAllBtn.setAttribute("aria-label", e.filterAndSearch.show + " " + n + " " + e.filterAndSearch.filtered_reviews_title)
        }
    }
    ,
    t
}(Yotpo),
Yotpo.MobileFiltersRadio = function(e) {
    function t(e) {
        this.element = e,
        this.elementName = this.element.getAttribute("name"),
        this.btns = this.element.getElementsByClassName("mobile-filter-radio-buttons")[0].getElementsByClassName("mobile-filter-radio-button"),
        this.selected = this.element.querySelector("input[name=" + this.elementName + "]:checked"),
        this.selectedValue = this.selected.parentElement.getElementsByTagName("span")[0].innerHTML,
        i.call(this)
    }
    function i() {
        for (var t = this, i = 0; i < t.btns.length; i++)
            e.addEventListener(t.btns[i], "change", function() {
                var e = this
                  , i = e.getElementsByTagName("input")[0];
                if (i.id !== t.selected.id) {
                    t.updateSelected(e);
                    var o = {
                        selected: t.selected,
                        selectedValue: t.selectedValue,
                        containerElement: t.element,
                        prevSelected: t.prevSelected
                    };
                    t.trigger("change", o)
                }
            })
    }
    return t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.updateSelected = function(e) {
        e.getElementsByTagName("input")[0].setAttribute("checked", "checked"),
        this.prevSelected = this.selected,
        this.selected.removeAttribute("checked"),
        this.selected.classList.remove("pre-selected"),
        this.selected = this.element.querySelector("input[name=" + this.elementName + "]:checked"),
        this.selectedValue = this.selected.parentElement.getElementsByTagName("span")[0].innerHTML
    }
    ,
    t
}(Yotpo),
Yotpo.SearchInProgress = function(e) {
    var t = {};
    return t.switchMode = function(t, i) {
        var o = t.querySelector(".search-in-progress")
          , n = t.querySelector(".yotpo-reviews");
        o && n && (i ? (e.show(o),
        n.classList.remove("yotpo-active")) : (e.hide(o),
        n.classList.add("yotpo-active")))
    }
    ,
    t.hideSearchInProgress = function(t) {
        var i = t.querySelector(".search-in-progress");
        e.hide(i)
    }
    ,
    t
}(Yotpo),
Yotpo.HoverIntervalEvent = function(e) {
    function t(e) {
        this.interval = e.interval,
        this.objects = []
    }
    function i(e) {
        var t = this;
        return function() {
            var i = this
              , o = t.mouseenterTimeStamp;
            if (o) {
                var n = new Date - o;
                n >= e && t.callback.call(i)
            }
        }
    }
    return t.prototype.register = function(t, o) {
        if (t) {
            var n = {
                callback: o
            };
            e.addEventListener(t, "mouseenter", function() {
                n.mouseenterTimeStamp = new Date
            }),
            e.addEventListener(t, "mouseleave", i.call(n, this.interval))
        }
    }
    ,
    t
}(Yotpo),
Yotpo.TestingGroupsHandler = function(e) {
    function t(e) {
        this.settings = e || {},
        this.seoClient = !1,
        this.initialized = !1
    }
    t.prototype.getUserAllocation = function() {
        return this.userAllocation = this.userAllocation || s(this.settings),
        this.userAllocation
    }
    ,
    t.prototype.setSeoClient = function(e) {
        this.seoClient = e
    }
    ,
    t.prototype.initialize = function() {
        this.initialized = !0
    }
    ,
    t.prototype.getTestingGroupsForAnalytics = function() {
        return a.call(this) ? (this.testingGroupParams = this.testingGroupParams || n(e.feature_testing_groups, this.getUserAllocation()),
        this.testingGroupParams) : void 0
    }
    ,
    t.prototype.getTestingGroupsForServer = function() {
        return a.call(this) ? (this.featureTestingGroups = this.featureTestingGroups || o(e.feature_testing_groups, this.getUserAllocation()),
        this.featureTestingGroups) : void 0
    }
    ;
    var i = function(e, t) {
        var i = {};
        for (var o in e)
            if (e.hasOwnProperty(o)) {
                var n = r(e[o], t);
                n && (i[n.feature_id] = n.group_id)
            }
        return i
    }
      , o = function(e, t) {
        var o = {}
          , n = !1
          , r = i(e, t);
        for (var s in r)
            r.hasOwnProperty(s) && (n = !0,
            o["ftg_fi_" + s] = r[s]);
        return n ? o : void 0
    }
      , n = function(e, t) {
        var o = ""
          , n = i(e, t);
        for (var r in n)
            n.hasOwnProperty(r) && (o += "f" + r + "_g" + n[r] + ":");
        return "" != o ? "ftg_" + o.substring(0, o.length - 1) : void 0
    }
      , r = function(e, t) {
        for (var i in e)
            if (e.hasOwnProperty(i)) {
                var o = i.split("..")
                  , n = o[0]
                  , r = o[1];
                if (t > n && r >= t)
                    return e[i]
            }
        return null
    }
      , s = function(t) {
        var i;
        return t.userSettings.ab_testing && (i = e.Modules.UserAllocation.getUserAllocation()),
        i
    }
      , a = function() {
        return this.initialized ? this.seoClient ? !1 : !0 : (e.safeConsole("TestingGroupsHandler had not yet initialized", "error"),
        !1)
    };
    return t
}(Yotpo),
Yotpo.AddToCart = function(e) {
    function t(o, n, r, s) {
        var a = this;
        this.element = o,
        this.analyticsCategory = n,
        this.analyticsParams = r;
        for (var l, c = this.element.querySelectorAll(".yotpo-lightbox-product"), d = function(o, l, c) {
            if (l && c.variants) {
                s(o, !0),
                c.price && (o.querySelector(".yotpo-lightbox-product-price").innerHTML = c.price);
                var d = o.querySelector(".yotpo-lightbox-product-button");
                e.addEventListener(d, "click", t.prototype.getProductData.bind(this, c, o)),
                n && r && i.call(a, o, n, r, c.variants.length > 1)
            } else
                s(o, !1)
        }, u = 0; l = c[u]; u++) {
            e.hide(l.querySelector(".yotpo-lightbox-product-button"));
            var p = l.querySelector("a").href;
            e.Modules.Cart.getProductVariants(p, d.bind(a, l))
        }
    }
    function i(e, t, i, n) {
        var r = e.getAttribute("data-product-id")
          , s = {
            product_id: r,
            media_id: i.imageId,
            source: i.source,
            media_type: i.mediaType,
            has_variant: n,
            gallery_id: i.galleryId
        }
          , a = e.querySelector(".yotpo-lightbox-add-to-cart-button")
          , l = e.querySelector(".yotpo-variants-popup .yotpo-add-to-cart-button")
          , c = e.querySelector(".yotpo-variants-popup .yotpo-cancel-add-to-cart");
        o.call(this, null, null, "add_to_cart", a, s),
        o.call(this, null, null, "add_to_cart_submit", l, s),
        o.call(this, null, null, "cancel_submit", c, s)
    }
    function o(t, i, o, n, r) {
        var s = this
          , n = n || t.querySelector(i);
        n && e.addEventListener(n, "click", function() {
            e.currentAnalytics.trackEvent(s.analyticsCategory, "clicked_on", o, null, r)
        })
    }
    return t.load = function(t, i, o, n) {
        return new e.AddToCart(t,i,o,n)
    }
    ,
    t.prototype.getProductData = function(e, t) {
        e.variants.length > 1 ? this.openVariantsPopup(e, t) : this.addProductToCart(e.variants[0].id, t)
    }
    ,
    t.prototype.addProductToCart = function(t, i, o) {
        var n = this;
        e.Modules.Cart.addToCart(t, function(t, r) {
            if (t && r) {
                var s = i.querySelector(".yotpo-add-to-cart-popup");
                e.AddToCart.ConfirmPopup.open(s, r);
                var a = i.getAttribute("data-product-id");
                if (n.analyticsCategory && n.analyticsParams) {
                    var l = {
                        product_id: a,
                        media_id: n.analyticsParams.imageId,
                        source: n.analyticsParams.source,
                        media_type: n.analyticsParams.mediaType
                    };
                    e.currentAnalytics.trackEvent(n.analyticsCategory, "shown", "add_to_cart_confirmation", null, l)
                }
            }
            o && o()
        })
    }
    ,
    t.ConfirmPopup = function() {
        function t(t, n) {
            e.Modules.PopupWindow.call(this, t, {
                closeWhenPressedOutside: !0
            }),
            i(t, n.image),
            o(t, n),
            this.setCloseButtons(t),
            this.open()
        }
        function i(e, t) {
            e.querySelector(".yotpo-confirm-product-image").setAttribute("src", t)
        }
        function o(e, t) {
            e.querySelector(".yotpo-confirm-product-name").innerHTML = t.product_title,
            t.product_price && (e.querySelector(".yotpo-confirm-product-price").innerHTML = "// " + t.product_price)
        }
        return t.prototype = Object.create(e.Modules.PopupWindow.prototype),
        t.open = function(t, i) {
            return new e.AddToCart.ConfirmPopup(t,i)
        }
        ,
        t.prototype.setCloseButtons = function(t) {
            var i = t.querySelector(".yotpo-close-pop");
            e.addEventListener(i, "click", e.Modules.PopupWindow.prototype.close.bind(this));
            var o = t.querySelector(".yotpo-confirm-continue-shopping");
            e.addEventListener(o, "click", e.Modules.PopupWindow.prototype.close.bind(this))
        }
        ,
        t
    }(),
    t.prototype.openVariantsPopup = function(t, i) {
        var o = i.querySelector(".yotpo-variants-popup");
        e.AddToCart.VariantsPopup.open(o, t, this, i)
    }
    ,
    t.VariantsPopup = function() {
        function i(t, i, o, n) {
            this.addToCartManager = o,
            this.eventListeneres = [],
            this.product = n,
            e.Modules.PopupWindow.call(this, t, {
                closeWhenPressedOutside: !0
            }),
            m(t, i, i.variants[0].id),
            y(t, i),
            E(t, i),
            f(t, i.image),
            this.setInputButtons(t, i),
            d(t, 0),
            this.setCloseButtons(t, i),
            this.open(),
            this.setSliderEvents(t)
        }
        function o() {
            return window.innerWidth < 1e3
        }
        function n(e, t, i, o) {
            var n = e.position;
            a(n, t, i, o)
        }
        function r(e) {
            e.right()
        }
        function s(e) {
            e.left()
        }
        function a(t, i, o, n) {
            e.removeClass(i, "yotpo-arrow-disable"),
            e.removeClass(o, "yotpo-arrow-disable"),
            2 == t ? e.addClass(i, "yotpo-arrow-disable") : t == n.length - 8 && e.addClass(o, "yotpo-arrow-disable"),
            10 >= n && (e.addClass(i, "yotpo-arrow-disable"),
            e.addClass(o, "yotpo-arrow-disable"))
        }
        function l(e) {
            for (var t = {}, i = 0; i < e.variants.length; i++) {
                var o = e.variants[i];
                o.available && c(t, o.options, o.id)
            }
            return t
        }
        function c(e, t, i) {
            for (var o = t.length - 1, n = 0; o > n; ++n) {
                var r = t[n];
                r in e || (e[r] = {}),
                e = e[r]
            }
            e[t[o]] = i
        }
        function d(e, t) {
            for (var i = e.querySelectorAll(".option-container"), o = t; o < i.length; o++)
                for (var n = i[o].querySelectorAll("input[type=radio]"), r = 0; r < n.length; r++)
                    if (!n[r].disabled) {
                        n[r].click();
                        break
                    }
        }
        function u(e) {
            e.querySelector(".yotpo-add-to-cart-button").disabled = !0
        }
        function p(e) {
            e.querySelector(".yotpo-add-to-cart-button").disabled = !1
        }
        function g(e, t) {
            for (var i, o = [], n = e.querySelectorAll("input[type=radio]:checked"), r = 0; r < n.length; r++)
                o.push(n[r].value);
            return i = h(t, o)
        }
        function h(e, t) {
            var i, o, n, r;
            for (o = 0; o < e.variants.length; o++) {
                for (r = !0,
                n = 0; n < e.variants[o].options.length; n++)
                    if (e.variants[o].options[n] !== t[n]) {
                        r = !1;
                        break
                    }
                if (r) {
                    i = e.variants[o];
                    break
                }
            }
            return i ? i.id : 0
        }
        function m(e, t, i) {
            for (var o, n = 0; n < t.variants.length; n++)
                if (t.variants[n].id === i) {
                    o = (t.variants[n].price / 100).toFixed(2);
                    break
                }
            var r = t.price.replace(/[0-9]*\.*[0-9]*/g, "")[0];
            e.querySelector(".yotpo-variants-product-price").innerHTML = "// " + r + o
        }
        function f(e, t) {
            t.startsWith(window.location.protocol) || (t = window.location.protocol + t),
            e.querySelector(".yotpo-variants-product-image").setAttribute("src", t)
        }
        function y(e, t) {
            e.querySelector(".yotpo-variants-product-name").innerHTML = t.title
        }
        function v(e, t, i, o) {
            for (var n = e.querySelectorAll(".yotpo-unavailable-option input"), r = 0; r < n.length; r++)
                S(n[r]);
            for (var s = i, r = 0; r < t.options.length; r++) {
                var a = t.options[r]
                  , l = e.querySelectorAll('input[type=radio][name="' + a.name + '"]');
                if (b(s, l),
                o.name == a.name)
                    foundOption = !0,
                    s = s[o.value];
                else {
                    var c = e.querySelector('input[type=radio][name="' + a.name + '"]:checked');
                    if (!c)
                        break;
                    s = s[c.value]
                }
            }
        }
        function b(e, t) {
            for (var i = Object.keys(e), o = 0; o < t.length; o++) {
                var n = t[o];
                w(i, n.value) || _(n)
            }
        }
        function w(e, t) {
            for (var i = 0; i < e.length; i++)
                if (e[i] == t)
                    return !0;
            return !1
        }
        function _(e) {
            e.disabled = !0,
            e.parentElement.classList.add("yotpo-unavailable-option"),
            e.checked && (e.checked = !1)
        }
        function S(t) {
            t.disabled = !1,
            e.removeClass(t.parentElement, "yotpo-unavailable-option")
        }
        function C(t, i, o) {
            var n = function(i, o, n) {
                setTimeout(function() {
                    if (t.parentElement.querySelector(":hover") === t && !document.body.querySelector(".yotpo-variants-tooltip")) {
                        var r = document.createElement("div");
                        r.className = "yotpo yotpo-variants-tooltip";
                        var s = t.getBoundingClientRect();
                        if (r.style.top = s.top + s.height + 5 + "px",
                        r.style.left = s.left + s.width / 2 + "px",
                        n.target.className.indexOf("unavailable") >= 0) {
                            var a = document.createElement("div")
                              , l = document.createElement("li");
                            l.className = "yotpo-icon yotpo-icon-info",
                            a.className = "tool-tip-unavailable",
                            a.innerText = e.texts.add_to_cart_item_unavailable,
                            a.insertBefore(l, a.childNodes[0]),
                            r.appendChild(a),
                            document.body.appendChild(r)
                        } else if (!o && t.querySelector("span").offsetWidth < t.querySelector("span").scrollWidth) {
                            var c = document.createElement("div");
                            c.className = "tool-tip-content",
                            c.innerHTML = i,
                            r.appendChild(c),
                            document.body.appendChild(r)
                        }
                    }
                }, 500)
            };
            e.addEventListener(t, "mouseenter", n.bind(this, i, o)),
            e.addEventListener(t, "mouseleave", function() {
                var e = document.body.querySelector(".yotpo-variants-tooltip");
                e && e.parentNode.removeChild(e)
            })
        }
        function A(e) {
            for (var t = 0; t < e.length; t++)
                if (isNaN(e[t]) || e[t] >= 100)
                    return !1;
            return !0
        }
        function E(t, i) {
            var n = t.querySelector(".yotpo-variants-options");
            n.innerHTML = "";
            for (var r = 0; r < i.options.length; r++) {
                var s = i.options[r]
                  , a = document.createElement("div");
                e.addClass(a, "option-container");
                var c = A(s.values)
                  , d = document.createElement("p");
                d.innerHTML = s.name.toUpperCase(),
                d.className = "yotpo-variants-option-name",
                n.appendChild(d);
                for (var u = 0; u < s.values.length; u++) {
                    var p = s.values[u];
                    d = document.createElement("label"),
                    d.className = "yotpo-variants-option-value",
                    c && d.classList.add("yotpo-variants-numeric-option");
                    var g = document.createElement("input");
                    g.type = "radio",
                    g.className = "yotpo-variant-option-input",
                    g.name = s.name,
                    g.value = p,
                    d.appendChild(g);
                    var h = document.createElement("span");
                    h.innerHTML = p.toUpperCase(),
                    d.appendChild(h),
                    a.appendChild(d),
                    o() || C(d, p, c)
                }
                if (c && s.values.length > 8) {
                    var m = document.createElement("label");
                    m.className = "yotpo-variants-option-first",
                    a.insertBefore(m, a.childNodes[0]);
                    var m = document.createElement("label");
                    m.className = "yotpo-variants-option-first",
                    a.insertBefore(m, a.childNodes[0]);
                    var f = document.createElement("div")
                      , y = document.createElement("div");
                    e.addClass(a, "y-slide-left-animations"),
                    e.addClass(a, "y-slider-container"),
                    e.addClass(f, "option-slider"),
                    e.addClass(y, "slider-option"),
                    f.appendChild(a);
                    var b = document.createElement("div");
                    b.className = "yotpo-icon yotpo-icon-right-arrow-2 right";
                    var w = document.createElement("div");
                    w.className = "yotpo-icon yotpo-icon-right-arrow-2 left",
                    y.appendChild(b),
                    y.appendChild(w),
                    y.appendChild(f),
                    n.appendChild(y)
                } else
                    n.appendChild(a)
            }
            this.variantsObject = l(i),
            v(t, i, this.variantsObject, this)
        }
        function k(e, i, o, n) {
            var r = g(e, i);
            t.prototype.addProductToCart.call(this, r, o, n)
        }
        function x(t, i, o) {
            e.addEventListener(t, i, o),
            this.eventListeneres.push({
                element: t,
                type: i,
                func: o
            })
        }
        return i.prototype = Object.create(e.Modules.PopupWindow.prototype),
        i.open = function(t, i, o, n) {
            return new e.AddToCart.VariantsPopup(t,i,o,n)
        }
        ,
        i.prototype.setSliderEvents = function(t) {
            for (var i = t.querySelectorAll(".slider-option"), l = 0; l < i.length; l++) {
                var c = i[l]
                  , d = c.querySelector(".y-slider-container")
                  , u = c.querySelector(".yotpo-icon.right")
                  , p = c.querySelector(".yotpo-icon.left")
                  , g = d.querySelectorAll("label");
                if (!o()) {
                    var h = new e.Modules.Slide(d,{
                        imageCount: g.length + 2,
                        displayWindowCount: 8,
                        initialPosition: 2,
                        autoSlide: !1
                    });
                    h.onSlide(n.bind(this, h, p, u, g)),
                    h.start(),
                    a(h.position, p, u, g),
                    e.addEventListener(u, "click", r.bind(this, h)),
                    e.addEventListener(p, "click", s.bind(this, h))
                }
            }
        }
        ,
        i.prototype.setInputButtons = function(e, t) {
            var i = this;
            i.variantsObject = l(t);
            for (var o, n, r = e.querySelectorAll("input[type=radio]"), s = 0; s < r.length; s++)
                r[s].onchange = function() {
                    t.options.length > 1 && v(e, t, i.variantsObject, this);
                    var r = g(e, t);
                    if (0 != r) {
                        for (var s = 0; s < t.variants.length; s++)
                            if (t.variants[s].id === r) {
                                o = t.variants[s].featured_image;
                                break
                            }
                        n = o ? o.src : t.image,
                        f(e, n),
                        m(e, t, r),
                        p(e)
                    } else
                        u(e)
                }
        }
        ,
        i.prototype.setCloseButtons = function(t, o) {
            var n = t.querySelector(".yotpo-close-pop");
            x.call(this, n, "click", e.Modules.PopupWindow.prototype.close.bind(this));
            var r = t.querySelector(".yotpo-cancel-add-to-cart");
            x.call(this, r, "click", e.Modules.PopupWindow.prototype.close.bind(this));
            var s = t.querySelector(".yotpo-add-to-cart-button");
            x.call(this, s, "click", k.bind(this.addToCartManager, t, o, this.product, i.prototype.closePopup.bind(this)))
        }
        ,
        i.prototype.closePopup = function() {
            for (var t = 0; t < this.eventListeneres.length; t++) {
                var i = this.eventListeneres[t];
                e.removeEventListener(i.element, i.type, i.func)
            }
            this.close()
        }
        ,
        i
    }(),
    t
}(Yotpo),
Yotpo.StarDistribution = function(e) {
    function t(e, t) {
        this.element = e[0],
        this.rows = this.element.getElementsByClassName("yotpo-distribution-row"),
        this.main_widget = t,
        this.isDisabled = !1,
        i.call(this)
    }
    function i() {
        for (var t = this, i = 0; i < t.rows.length; i++) {
            var o = t.rows[i];
            o.isEmptyReviews = e.hasClass(o, "empty-row"),
            o.isEmptyReviews || (o.onmouseover = function() {
                null != n || t.isDisabled || t.grayOutStarDistribution(this)
            }
            ,
            o.onmouseleave = function() {
                null != n || t.isDisabled || t.removeGrayedOutColor()
            }
            ,
            o.onclick = function() {
                if (!t.isDisabled) {
                    this.setAttribute("aria-checked", !0);
                    var e = t.mouseClickOnRow(this);
                    t.main_widget.reviewsContainerElement.querySelector(".yotpo-reviews-filters") && t.main_widget.changeRatingsFilter(t.main_widget, e.currentStarDistributionIndex, e.previousStarDistributionIndex, "star_distribution")
                }
            }
            ,
            e.onKeyDown(o, function() {
                t.isDisabled || this.click()
            }, [e.keyCodes.enter])),
            e.onKeyDown(o, function() {
                var e = this
                  , i = e.nextElementSibling;
                i && (i.focus(),
                i.isEmptyReviews || "false" != i.getAttribute("aria-checked") || t.isDisabled || i.click())
            }, [e.keyCodes.down]),
            e.onKeyDown(o, function() {
                var e = this
                  , i = e.previousElementSibling;
                i && (i.focus(),
                i.isEmptyReviews || "false" != i.getAttribute("aria-checked") || t.isDisabled || i.click())
            }, [e.keyCodes.up])
        }
    }
    function o(t, i) {
        n = t,
        t.style.opacity = "1",
        e.addClass(t, "yotpo-active"),
        this.grayOutStarDistribution(t),
        s = i.indexOf(t)
    }
    var n = null
      , r = -1
      , s = -1;
    return t.prototype.mouseClickOnRow = function(t) {
        var i = Array.prototype.slice.call(this.rows)
          , a = n;
        if (null !== a) {
            this.grayOutStarDistribution(t),
            r = i.indexOf(a);
            var l = t === a;
            a.setAttribute("aria-checked", !1),
            l || null == t ? this.clearAllBars() : (o.call(this, t, i),
            e.removeClass(a, "yotpo-active"))
        } else
            o.call(this, t, i),
            s = i.indexOf(t);
        return {
            previousStarDistributionIndex: r,
            currentStarDistributionIndex: s
        }
    }
    ,
    t.prototype.grayOutStarDistribution = function(e) {
        for (var t = 0; t < this.rows.length; t++)
            this.rows[t] !== e && (this.rows[t].style.opacity = "0.4")
    }
    ,
    t.prototype.removeGrayedOutColor = function() {
        for (var t = 0; t < this.rows.length; t++)
            e.hasClass(this.rows[t], "empty-row") || (this.rows[t].style.opacity = "1")
    }
    ,
    t.prototype.mouseClickByIndex = function(e) {
        var t = this.rows[e];
        this.mouseClickOnRow(t)
    }
    ,
    t.prototype.clearAllBars = function() {
        this.removeGrayedOutColor(),
        n && e.removeClass(n, "yotpo-active"),
        n = null,
        s = -1
    }
    ,
    t.prototype.disable = function() {
        this.isDisabled = !0
    }
    ,
    t.prototype.enable = function() {
        this.isDisabled = !1
    }
    ,
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Badge = function(e) {
    function t(e, t) {
        var i = this;
        i._controller = e,
        i.element = t,
        i.settings = {
            pid: i.element.getAttribute("data-product-id")
        };
        for (var n in o)
            o.hasOwnProperty(n) && i.on(n, o[n])
    }
    function i() {
        var t = this
          , i = this.getElement().getElementsByClassName("y-badge")[0];
        i && (i.onclick = function() {
            var e = t._controller.getWidgetByName("Testimonials");
            e && e.open()
        }
        );
        var o = t.element.querySelector(".yotpo-display-wrapper")
          , n = this.settings.pid
          , r = null === n ? "Reviews_Badge" : "Product_Badge";
        e.currentAnalytics.trackUniqueEvent(r, "loaded", "productId", n),
        e.currentInview.register(t.element, function() {
            e.currentAnalytics.trackUniqueEvent(r, "shown", "productId", n)
        }),
        e.addEventListener(o, "click", function() {
            e.currentAnalytics.trackUniqueEvent(r, "clicked_on", "productId", n)
        }),
        e.hoverAnalytics.register(o, function() {
            e.currentAnalytics.trackUniqueEvent(r, "hovered", "productId", n)
        })
    }
    var o = {};
    return t.prototype.getMethod = function() {
        return "badge"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.selector = e.widgets.badge.selector,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    o = {
        ready: function() {
            i.call(this)
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Basic = function(e) {
    function t(t, i, o, n) {
        var r = this;
        r._controller = t,
        r.element = i,
        this.lightboxes = {},
        r.type = (o || "reviews").toLowerCase(),
        r.settings = {
            page: n || 1
        },
        r.query_mode = !1;
        var s = i.getAttribute("data-host-widget");
        s && (r.settings["host-widget"] = s);
        var a = i.getAttribute("data-product-id");
        a && (r.settings.pid = a);
        var l = r._controller.userSettings.review_with_pictures;
        if (l)
            if (r.settings.is_mobile = e.isMobile(),
            l.settings.number_of_pictures_per_review) {
                var p = parseInt(l.settings.number_of_pictures_per_review);
                r.settings.pictures_per_review = Math.min(p, u)
            } else
                r.settings.pictures_per_review = d;
        "undefined" != typeof r._controller.userSettings.css_preview && (r.settings.css_preview = r._controller.userSettings.css_preview);
        for (var g in c)
            c.hasOwnProperty(g) && r.on(g, c[g])
    }
    function i() {
        var t = this.getType().substring(0, this.type.length - 1)
          , i = e[e.capitalize(t)];
        if (i && "function" == typeof i.load) {
            this.content = [];
            for (var o = this.getElement().getElementsByClassName("yotpo-" + t), n = 0; n < o.length; ++n) {
                var r = i.load(o[n]);
                this.content.push(r)
            }
        }
    }
    function o() {
        var t, i, o = this, r = this._controller.getAppKey(), s = o.element.querySelectorAll(".yotpo-review .social-link");
        for (t = 0,
        i; i = s[t]; t++)
            e.addEventListener(i, "click", function() {
                var t = this.getAttribute("data-network");
                e.currentAnalytics.trackEvent(o.analyticsCategory, "clicked_on", "share_published_" + t)
            });
        var a, l = o.element.querySelectorAll(".yotpo-review .yotpo-footer .yotpo-syndication-reference .syndication-reference-link");
        for (t = 0,
        a; a = l[t]; t++)
            e.addEventListener(a, "click", function() {
                e.currentAnalytics.trackEvent("reviews", "clicked_on", "syndication_link", "onsite_v2", r)
            });
        n.call(this);
        var c, d, u, p, g;
        if (c = this.getElement().getElementsByClassName("yotpo-review-images-wrapper"),
        c && c.length > 0) {
            for (var h = [], m = 0; m < c.length; m++)
                e.isHidden(c[m]) || h.push(c[m]);
            c = h
        }
        if (d = this.getElement().getElementsByClassName("image-review"),
        d && d.length > 0) {
            for (var f = [], y = 0; y < d.length; y++)
                e.hasClass(d[y], "yotpo-hidden") || f.push(d[y]);
            d = f
        }
        var v = 0;
        for (t = 0; p = c[t]; t++)
            g = p.getElementsByClassName("image-review"),
            v += g.length,
            e.currentInview.register(p, function() {
                e.currentAnalytics.trackEvent("reviews", "shown", "review_image", "onsite_v2", r)
            });
        v > 0 && e.currentAnalytics.trackEvent("reviews", "loaded", "review_image", v);
        var b = [];
        for (t = 0; u = d[t]; t++) {
            var w = d[t].getAttribute("data-image-id");
            -1 == b.indexOf(w) && b.push(w),
            function(t) {
                var i = e.getAncestorByClassName(u, "yotpo-review").getAttribute("data-review-id");
                e.currentInview.registerinModal(u, function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "shown", "image", null, {
                        image_id: t,
                        review_id: i
                    })
                }, !0),
                e.hoverAnalytics.register(u, function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "hovered", "image", null, {
                        image_id: t,
                        review_id: i
                    })
                }),
                e.addEventListener(u, "click", function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "clicked_on", "image", null, {
                        image_id: t,
                        review_id: i
                    })
                })
            }(w)
        }
        var _, S, C, A, E;
        if (_ = this.getElement().getElementsByClassName("yotpo-review-videos-wrapper"),
        _ && _.length > 0) {
            for (var k = [], m = 0; m < _.length; m++)
                e.isHidden(_[m]) || k.push(_[m]);
            _ = k
        }
        if (S = this.getElement().getElementsByClassName("video-review"),
        S && S.length > 0) {
            for (var x = [], y = 0; y < S.length; y++)
                e.hasClass(S[y], "yotpo-hidden") || x.push(S[y]);
            S = x
        }
        var I = 0;
        for (t = 0; A = _[t]; t++)
            E = A.getElementsByClassName("video-review"),
            I += E.length,
            e.currentInview.register(A, function() {
                e.currentAnalytics.trackEvent("reviews", "shown", "review_video", "onsite_v2", r)
            });
        I > 0 && e.currentAnalytics.trackEvent("reviews", "loaded", "review_video", I);
        var P = [];
        for (t = 0; C = S[t]; t++) {
            var T = S[t].firstElementChild.getAttribute("data-video-id");
            -1 == P.indexOf(T) && P.push(T),
            function(t) {
                var i = e.getAncestorByClassName(C, "yotpo-review").getAttribute("data-review-id");
                e.currentInview.registerinModal(C, function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "shown", "video", null, {
                        video_id: t,
                        review_id: i
                    })
                }, !0),
                e.hoverAnalytics.register(C, function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "hovered", "video", null, {
                        video_id: t,
                        review_id: i
                    })
                }),
                e.addEventListener(C, "click", function() {
                    e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "clicked_on", "video", null, {
                        video_id: t,
                        review_id: i
                    })
                })
            }(T)
        }
        var q = {
            images_id: b,
            count_pictures: b.length,
            videos_id: P,
            count_videos: P.length
        };
        e.currentAnalytics.trackUniqueEvent("pictures_in_reviews", "loaded", "media", null, q)
    }
    function n() {
        for (var t, i = ["review", "question"], o = this._controller.getAppKey(), n = 0; t = i[n]; n++)
            for (var r, s = this.getElement().getElementsByClassName("write-first-" + t + "-button"), a = 0; r = s[a]; a++)
                e.currentInview.register(r, function(t) {
                    return function() {
                        e.currentAnalytics.trackEvent(t + "s", "shown", "be_the_first_button", "onsite_v2", o)
                    }
                }(t)),
                e.addEventListener(r, "click", function(t) {
                    return function() {
                        e.currentAnalytics.trackEvent(t + "s", "clicked_on", "be_the_first_button", "onsite_v2", o),
                        setTimeout(function() {
                            var i = e.getDocElement().querySelector(".write-" + t + "-wrapper");
                            i.scrollIntoView({
                                behavior: "smooth"
                            })
                        }, 500)
                    }
                }(t))
    }
    function r() {
        this.reviewMediaWrappers = this.element.getElementsByClassName(e.isMobile() ? "yotpo-review-media-wrapper-mobile" : "yotpo-review-media-wrapper-desktop");
        for (var t = 0; t < this.reviewMediaWrappers.length; t++) {
            var i = e.getAncestorByClassName(this.reviewMediaWrappers[t], "yotpo-review").getAttribute("data-review-id")
              , o = this.element.querySelector('.yotpo-lightbox[data-review-id="' + i + '"]');
            if (o) {
                var n = this.reviewMediaWrappers[t].getElementsByClassName("media-review").length;
                this.contentProvider = new e.SingleReviewContentProvider,
                this.lightboxes[i] = new e.Widgets.Lightbox(this._controller,o,this.contentProvider,p,o,n)
            }
            s.call(this, this.reviewMediaWrappers[t], i)
        }
    }
    function s(e, t) {
        if (a(e),
        this.lightboxes[t]) {
            var i = e.getElementsByClassName("media-review");
            l.call(this, i, t)
        }
    }
    function a(t) {
        new e.Modules.DynamicLayout(t,{
            animation: !0
        })
    }
    function l(t, i) {
        for (var o = this, n = 0; n < t.length; n++)
            t[n].onclick = function() {
                o.contentProvider.clear(),
                o.lightboxes[i].open(this)
            }
            ,
            e.mouseClickOnEnterKeyDown(t[n])
    }
    var c = {}
      , d = 3
      , u = 15;
    t.prototype.getMethod = function() {
        return "reviews" === this.type && this.query_mode ? "queried_reviews" : this.type
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getType = function() {
        return this.type
    }
    ,
    t.prototype.getContent = function() {
        return this.content || []
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.refresh = function() {
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getTemplate = function() {
        return this.template = this.template || (this.getElement().getElementsByClassName("yotpo-template") || [])[0],
        this.template
    }
    ,
    t.prototype.supportsPagination = function() {
        return !isNaN(this.settings.page) && "main_widget" == this.settings["host-widget"] && "reviews" == this.type
    }
    ,
    c = {
        ready: function() {
            e.Modules.Pagination.init.call(this),
            o.call(this),
            r.call(this),
            i.call(this),
            e.Modules.Handle.popup.call(this)
        },
        pageChanged: function() {
            this.isFilteredReviews || this.refresh()
        }
    };
    var p = {
        track: function(t, i, o, n) {
            e.currentAnalytics.trackEvent("pictures_in_reviews_popup", t, i, null, n)
        },
        category: "pictures_in_reviews_popup"
    };
    return t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Bottomline = function(e) {
    function t(t, i) {
        var o = this;
        o.analyticsCategory = "star_rating",
        o._controller = t,
        o.element = i,
        o.settings = {
            pid: i.getAttribute("data-product-id") || i.getAttribute("data-yotpo-product-id"),
            link: i.getAttribute("data-url"),
            skip_average_score: i.getAttribute("data-skip-average-score") || !e.getMainWidget(o._controller)
        },
        e.getMainWidget(o._controller) && (o.settings.main_widget_pid = e.getMainWidget(o._controller).settings.pid);
        var n = {
            lang: "locale",
            demo: "demo",
            "product-readonly": "product-readonly"
        };
        for (var r in n)
            o.element.getAttribute("data-" + r) && (o.settings[n[r]] = o.element.getAttribute("data-" + r));
        for (var a in s)
            s.hasOwnProperty(a) && o.on(a, s[a]);
        var l = o.element.querySelectorAll(".aggregated-product-related-fields");
        e.CustomFields.bindProductRelatedFields(l),
        e.hoverAnalytics.register(o.element, function() {
            e.currentAnalytics.trackUniqueEvent(o.analyticsCategory, "hovered")
        })
    }
    function i() {
        var t = this
          , i = e.getMainWidget(t._controller) ? "product_page" : "category_page"
          , o = {
            domain_key: a,
            count_products: a.length
        };
        t.settings.data_source && (o.data_source = t.settings.data_source),
        e.currentAnalytics.trackEvent("star_rating", "loaded", i, null, o),
        a = []
    }
    function o() {
        for (var t, i = this, o = i.element.querySelectorAll(".standalone-bottomline"), n = 0; t = o[n]; n++)
            e.addEventListener(t, "click", function() {
                e.currentAnalytics.trackEvent(i.analyticsCategory, "clicked_on", null, i.settings.pid)
            });
        var r = i.element.getElementsByClassName("yotpo-star-distribution");
        if (r.length) {
            for (var s = e.getMainWidget(i._controller).getActiveSource(), a = s.getSettings().pid, l = ["review-stars", "yotpo-sum-reviews", "yotpo-star-distribution-graph"], n = 0; n < l.length; n++)
                for (var c = r[0].getElementsByClassName(l[n]), d = 0; d < c.length; d++) {
                    var u = c[d];
                    if (e.hasClass(u, "yotpo-distribution-clickable")) {
                        var p = parseInt(u.getAttribute("data-score-distribution"));
                        e.addEventListener(u, "click", function(t) {
                            return function() {
                                e.currentAnalytics.trackEvent("reviews", "clicked_on", "star_distribution", a + ":" + t)
                            }
                        }(p))
                    }
                }
            var g = r[0].getElementsByClassName("yotpo-star-distribution-footer")[0].getElementsByTagName("span")[0];
            e.addEventListener(g, "click", function() {
                e.currentAnalytics.trackEvent("reviews", "clicked_on", "star_distribution_show_all", a)
            })
        }
    }
    function n() {
        var t = this
          , i = t.element.getElementsByClassName("yotpo-star-distribution");
        if (i.length) {
            for (var o = 0, n = ["review-stars", "yotpo-sum-reviews", "yotpo-star-distribution-graph"], r = 0; r < n.length; r++)
                for (var s = i[0].getElementsByClassName(n[r]), a = 0; a < s.length; a++) {
                    var l = s[a];
                    if (e.hasClass(l, "yotpo-distribution-clickable")) {
                        var c = function() {
                            e.show(i[0].getElementsByClassName("yotpo-star-distribution-footer")[0]),
                            t.trigger("starDistributionClicked", this)
                        };
                        l.onclick = c,
                        e.onEnterKeyDown(l, c),
                        "yotpo-sum-reviews" == n[r] && (o += parseInt(l.innerHTML.replace(/[()]/g, "")))
                    }
                }
            i[0].getElementsByClassName("yotpo-star-distribution-show-all")[0].onclick = function() {
                t.trigger("showAllReviews", o)
            }
        }
    }
    function r() {
        var e = this
          , t = e.element.getElementsByClassName("yotpo-product-related-fields");
        if (t.length) {
            var i = t[0].getElementsByClassName("yotpo-product-related-show-all")[0];
            i.onclick = function() {
                e.trigger("showCustomdFields")
            }
            ;
            var i = t[0].getElementsByClassName("yotpo-product-related-show-less")[0];
            i.onclick = function() {
                e.trigger("hideCustomdFields")
            }
        }
    }
    var s = {}
      , a = []
      , l = e.debounce(i, 1e3, !1);
    return t.selector = e.widgets.bottomline.selector,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getMethod = function() {
        return "bottomline"
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.refresh = function() {
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    s = {
        ready: function() {
            var t = this;
            if (n.call(t),
            r.call(t),
            o.call(t),
            t.settings.pid && this.element.querySelectorAll(".standalone-bottomline").length > 0) {
                var i = this.settings.pid;
                a.push(i);
                var s;
                s = this.element.getElementsByClassName("standalone-bottomline")[0],
                t.settings.data_source = s.getAttribute("data-source"),
                l.call(this),
                e.currentInview.register(t.element, function() {
                    e.currentAnalytics.trackEvent("star_rating", "shown", null, i)
                })
            }
            t.getElement().querySelectorAll(".star-clickable").length > 0 && e.addEventListener(t.getElement(), "click", function() {
                e.scrollToReviewsTabInMainWidget(t._controller)
            })
        },
        starDistributionClicked: function(t) {
            var i = this;
            e.scrollToReviewsTabInMainWidget(i._controller);
            var o = parseInt(t.getAttribute("data-score-distribution"))
              , n = (e.getMainWidget(i._controller),
            e.getMainWidget(i._controller).getActiveSource());
            n.getSettings().star = o,
            this.getElement().getAttribute("data-demo") && (n.getSettings().demo = !0),
            n.getSettings().page = 1,
            e.togglePreLoader(n.getElement()),
            n.refresh();
            for (var r = ["review-stars", "yotpo-sum-reviews", "yotpo-star-distribution-graph"], s = 0; s < r.length; s++)
                for (var a = this.getElement().getElementsByClassName(r[s]), l = 0; l < a.length; l++) {
                    var t = a[l];
                    if (parseInt(t.getAttribute("data-score-distribution")) != o)
                        e.addClass(t, "yotpo-distribution-unactive");
                    else if (e.removeClass(t, "yotpo-distribution-unactive"),
                    "yotpo-sum-reviews" == r[s]) {
                        var c = t.innerHTML;
                        e.getDocElement().querySelectorAll(".yotpo-reviews-nav-tab-sum")[0].innerHTML = c
                    }
                }
        },
        showAllReviews: function(t) {
            var i = this;
            e.scrollToReviewsTabInMainWidget(i._controller);
            var o = e.getMainWidget(i._controller);
            e.hide(e.getDocElement().querySelectorAll(".yotpo-star-distribution-footer")[0]);
            var n = o.getActiveSource();
            delete n.getSettings().star,
            n.getSettings().page = 1,
            this.getElement().getAttribute("data-demo") && (n.getSettings().demo = !0),
            e.togglePreLoader(n.getElement()),
            n.refresh(),
            e.getDocElement().querySelectorAll(".yotpo-reviews-nav-tab-sum")[0].innerHTML = "(" + t + ")";
            for (var r = this.getElement().getElementsByClassName("yotpo-star-distribution-graph"), s = 0; s < r.length; s++) {
                var a = r[s];
                e.removeClass(a, "yotpo-distribution-unactive")
            }
        },
        showCustomdFields: function() {
            for (var t = this.getElement(), i = t.getElementsByClassName("yotpo-product-related-fields-column")[0], o = i.querySelectorAll(".yotpo-product-related-field-name.yotpo-hidden"), n = 0; n < o.length; n++)
                e.show(o[n], "block");
            for (var r = i.querySelectorAll(".yotpo-rating-bars.yotpo-hidden, .yotpo-size-bars.yotpo-hidden"), n = 0; n < r.length; n++)
                e.show(r[n], "block");
            e.hide(t.getElementsByClassName("yotpo-product-related-show-all")[0]),
            e.show(t.getElementsByClassName("yotpo-product-related-show-less")[0], "block")
        },
        hideCustomdFields: function() {
            for (var t = this.getElement(), i = t.getElementsByClassName("yotpo-product-related-fields-column")[0], o = i.getElementsByClassName("yotpo-product-related-field-name"), n = 5; n < o.length; n++)
                e.hide(o[n]);
            for (var r = i.querySelectorAll(".yotpo-product-related-fields-bars > .yotpo-field-bars-container > .yotpo-rating-bars, .yotpo-product-related-fields-bars > .yotpo-field-bars-container > .yotpo-size-bars"), n = 5; n < r.length; n++)
                e.hide(r[n]);
            e.hide(t.getElementsByClassName("yotpo-product-related-show-less")[0]),
            e.show(t.getElementsByClassName("yotpo-product-related-show-all")[0], "block")
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Carousels = function(e) {
    function t(t, i) {
        var o = this;
        o._controller = t,
        o.element = i,
        o.autoplay_enabled = o.element.getAttribute("data-autoplay-enabled"),
        o.settings = {
            images_to_display: u(o.element.clientWidth)
        };
        for (var n in q) {
            var r = q[n]
              , s = o.element.getAttribute(r);
            "undefined" != typeof s && (o.settings[n] = s)
        }
        "site" == o.element.getAttribute("data-type") ? o.settings.pid = "yotpo_site_reviews" : "both" == o.element.getAttribute("data-type") && (o.settings.include_site_reviews = !0),
        "top_rated" == o.element.getAttribute("data-mode") && (o.settings.best = !0),
        "manual" == o.element.getAttribute("data-mode") && (o.settings.manual = !0),
        o.element.getAttribute("data-review-ids") && (o.settings.id = o.element.getAttribute("data-review-ids").split(",")),
        o.element.getAttribute("data-count") && (o.settings.per_page = parseInt(o.element.getAttribute("data-count")),
        o.settings.per_page > 9 && (o.settings.per_page = 9)),
        o.carouselSpeed = parseInt(o.settings.autoplay_speed || I),
        o.carouselSpeed < P && (o.carouselSpeed = P);
        for (var a in F)
            F.hasOwnProperty(a) && o.on(a, F[a]);
        e.hoverAnalytics.register(o.element, function() {
            e.currentAnalytics.trackUniqueEvent("carousel", "hovered")
        })
    }
    function i() {
        function e(e) {
            if (i.autoplay_enabled) {
                var o, n = "visible", r = "hidden", s = {
                    focus: n,
                    focusin: n,
                    pageshow: n,
                    blur: r,
                    focusout: r,
                    pagehide: r
                };
                e = e || window.event,
                o = e.type in s ? s[e.type] : this[t] ? "hidden" : "visible",
                "hidden" == o ? i.slider.pause() : i.slider.play()
            }
        }
        var t = "hidden"
          , i = this;
        t in document ? document.addEventListener("visibilitychange", e) : (t = "mozHidden")in document ? document.addEventListener("mozvisibilitychange", e) : (t = "webkitHidden")in document ? document.addEventListener("webkitvisibilitychange", e) : (t = "msHidden")in document ? document.addEventListener("msvisibilitychange", e) : "onfocusin"in document ? document.onfocusin = document.onfocusout = e : window.onpageshow = window.onpagehide = window.onfocus = window.onblur = e,
        void 0 !== document[t] && e({
            type: document[t] ? "blur" : "focus"
        })
    }
    function o() {
        this.settings.data_show_navigation && (u(this.getCarouselContainerWidth()) >= this.carouselReviewsCount ? e.hide(this.getElement().querySelector(".carousel-arrows")) : e.show(this.getElement().querySelector(".carousel-arrows")))
    }
    function n() {
        return this.autoplay_enabled && u(this.getCarouselContainerWidth()) < this.carouselReviewsCount
    }
    function r() {
        var t = this.getElement()
          , i = this
          , o = 0
          , n = 0;
        t.querySelector(".yotpo-icon-left-arrow-thin").onclick = function() {
            new Date - o < x || (o = new Date,
            i.slider.left(),
            e.currentAnalytics.trackEvent("carousel", "clicked_on", "previous"))
        }
        ,
        t.querySelector(".yotpo-icon-left-arrow-thin").onkeypress = function(e) {
            13 == e.keyCode && e.target.click()
        }
        ,
        t.querySelector(".yotpo-icon-right-arrow-thin").onclick = function() {
            new Date - n < x || (n = new Date,
            i.slider.right(),
            e.currentAnalytics.trackEvent("carousel", "clicked_on", "next"))
        }
        ,
        t.querySelector(".yotpo-icon-right-arrow-thin").onkeypress = function(e) {
            13 == e.keyCode && e.target.click()
        }
    }
    function s() {
        var t = this.getElement()
          , i = this;
        t.onmouseover = function() {
            i.slider.pause()
        }
        ,
        t.onmouseout = function() {
            i.slider.play()
        }
        ;
        for (var o = function(t, i) {
            for (var o = t.querySelectorAll(".product-link-container"), n = 0; n < o.length; n++)
                o[n].querySelector(".carousel-review-product-text") && (o[n].onmouseover = function() {
                    this.querySelector(".carousel-review-product-text").style.textDecoration = "underline"
                }
                ,
                o[n].onmouseout = function() {
                    this.querySelector(".carousel-review-product-text").style.textDecoration = "none"
                }
                ),
                o[n].onclick = function() {
                    return e.currentAnalytics.trackEvent("carousel", "clicked_on", "review", i),
                    !0
                }
                ,
                o[n].onkeypress = function(e) {
                    13 == e.keyCode && e.target.click()
                }
        }, n = t.querySelectorAll(".single-carousel.review"), r = [], s = 0; s < n.length; s++) {
            var a = n[s]
              , l = a.getAttribute("data-review-id");
            "0" == l || r.indexOf(l) >= 0 || r.push(l),
            o(a, l),
            e.hoverAnalytics.register(a, function() {
                e.currentAnalytics.trackReview(this, "carousel", "hovered")
            }),
            e.currentInview.register(a, function(t) {
                return function() {
                    e.currentAnalytics.trackReview(t, "carousel", "shown")
                }
            }(a))
        }
        e.currentAnalytics.trackReviews(r, "carousel", "loaded")
    }
    function a(e) {
        for (var t = e.querySelectorAll(".carousel-review-title"), i = 0; i < t.length; i++)
            t[i].setAttribute("full-headline", t[i].innerHTML.trim()),
            t[i].innerHTML.trim().length > y && (t[i].innerHTML = t[i].innerHTML.trim().substring(0, y - 3) + "...")
    }
    function l(t) {
        function i(i, o, n, r) {
            "icon-yotpo-top-corner" == r ? (n -= A,
            o += f / 2) : "icon-yotpo-right-corner" == r ? (n += S,
            o += f) : (n += S,
            o -= E),
            i.style.left = o + "px",
            i.style.top = n + "px",
            e.removeClassList(i, ["icon-yotpo-top-corner", "icon-yotpo-right-corner", "icon-yotpo-left-corner"]),
            e.addClass(i, r),
            e.show(t.querySelector(".yotpo-corner"))
        }
        var o, n, r = t.querySelector(".carousel-tool-tip");
        r.querySelector(".tool-tip-header-span").innerHTML = this.reviewTitle,
        r.querySelector(".tool-tip-content").innerHTML = this.reviewBody;
        var s = e.getPosition(this)
          , a = e.getPosition(t)
          , l = s.x - a.x
          , c = s.y - a.y
          , d = u(t.clientWidth);
        3 == d ? (t.querySelector(".yotpo .scroller").getBoundingClientRect().right - this.getBoundingClientRect().right < f ? (l -= f + _,
        o = "icon-yotpo-right-corner") : (l += b,
        o = "icon-yotpo-left-corner"),
        n = -w) : (n = w,
        l -= f / 2 - b,
        o = "icon-yotpo-top-corner"),
        0 > l && (l = 0),
        c += n;
        var p = t.querySelector(".carousel-tool-tip .yotpo-tool-tip");
        p.style.left = l + "px",
        p.style.top = c + "px",
        i(t.querySelector(".yotpo-corner"), l, c, o),
        p.style.display = "block"
    }
    function c(t) {
        var i = this
          , o = document.createElement("div")
          , n = this.getElement();
        return o.className = "carousel-read-more",
        o.innerHTML = n.querySelector(".carousel-read-more-text").getAttribute("data-text"),
        o.reviewTitle = t.querySelector(".carousel-review-title").getAttribute("full-headline"),
        o.reviewBody = t.querySelector(".carousel-review-body").fullReview.substring(0, h),
        o.tabIndex = 0,
        o.onmouseover = function() {
            i.slider.pause(),
            l.call(this, n)
        }
        ,
        o.onmouseout = function() {
            n.querySelector(".carousel-tool-tip .yotpo-tool-tip").style.display = "none",
            e.hide(n.querySelector(".yotpo-corner"))
        }
        ,
        o.onfocus = function() {
            i.slider.pause(),
            l.call(this, n)
        }
        ,
        o.onblur = function() {
            var t = n.querySelector(".carousel-tool-tip .yotpo-tool-tip");
            t && (t.style.display = "none",
            e.hide(n.querySelector(".yotpo-corner")))
        }
        ,
        o.onclick = function(e) {
            e.stopPropagation()
        }
        ,
        o
    }
    function d(t) {
        for (var i = 0; i < t.length; i++)
            for (var o = t[i].querySelectorAll(".carousel-review-body"), n = 0; n < o.length; n++)
                o[n].innerHTML = o[n].innerHTML.trim(),
                o[n].fullReview = o[n].innerHTML,
                o[n].innerHTML.length >= v && (o[n].innerHTML = o[n].innerHTML.substring(0, v) + "...",
                o[n].appendChild(c.call(this, t[i])),
                e.show(this.getElement().querySelector(".yotpo-reviews-carousel .carousel-tool-tip")))
    }
    function u(e) {
        var t;
        return e >= 960 ? t = 3 : e >= 600 && 960 > e ? t = 2 : 600 > e && (t = 1),
        t
    }
    function p() {
        "undefined" != typeof this.slider && delete this.slider;
        var t = this.element.getElementsByClassName("yotpo-carousel")[0]
          , i = this.settings.images_to_display + 1
          , o = this.carouselReviewsCount < i ? 0 : i;
        this.slider = new e.Modules.Slide(t,{
            imageCount: this.settings.per_page || this.carouselReviewsCount,
            displayWindowCount: u(this.getCarouselContainerWidth()),
            initialPosition: o,
            slideDirection: k,
            delayInterval: this.carouselSpeed,
            autoSlide: n.call(this),
            rtl: "rtl" == this._controller.userSettings.direction,
            animationDuration: T
        }),
        this.slider.onSlide(function() {
            e.currentInview.verifyInview()
        })
    }
    var g = 403
      , h = 400
      , m = 300
      , f = 298
      , y = 57
      , v = 130
      , b = 90
      , w = 20
      , _ = 15
      , S = 20
      , C = 30
      , A = 10
      , E = 9
      , k = "right"
      , x = 1e3
      , I = 3e3
      , P = 1500
      , T = 1450
      , q = {
        autoplay_speed: "data-autoplay-speed",
        data_show_navigation: "data-show-navigation",
        data_show_bottomline: "data-show-bottomline",
        data_header_customisation_enabled: "data-header-customisation-enabled",
        data_header_customisation_text: "data-header-customisation-text",
        data_header_customisation_font_size: "data-header-customisation-font-size",
        data_header_customisation_color: "data-header-customisation-color",
        data_header_customisation_alignment: "data-header-customisation-alignment",
        data_background_color: "data-background-color",
        data_testimonials_page_enabled: "data-testimonials-page-enabled",
        data_testimonials_page_link: "data-testimonials-page-link",
        data_testimonials_page_text: "data-testimonials-page-text",
        demo: "data-demo",
        pid: "data-product-id"
    }
      , F = {};
    return t.prototype.getCarouselContainerWidth = function() {
        return this.getElement().clientWidth
    }
    ,
    t.prototype.getMethod = function() {
        return "carousels"
    }
    ,
    t.selector = e.widgets.carousels.selector,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.refresh = function() {
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    F = {
        ready: function() {
            if (this.is("initialized")) {
                var t = this
                  , o = this.getElement();
                this.carouselReviewsCount = parseInt(o.querySelector(".carousel-display-wrapper").getAttribute("data-attr-total-reviews")),
                p.call(this),
                this.slider.start(),
                i.call(t),
                e.currentInview.register(t.element, function() {
                    e.currentAnalytics.trackEvent("carousel", "shown", null, null)
                }),
                o.querySelector(".all-reviews") && (o.querySelector(".all-reviews").onclick = function() {
                    e.currentAnalytics.trackEvent("carousel", "clicked_on", "read_more", null)
                }
                ),
                t.settings.direction = e.getComputedStyle(t.element, "direction"),
                this.settings.data_show_navigation && r.call(this),
                s.call(this);
                for (var n = o.querySelectorAll(".single-carousel"), l = 0; l < n.length; l++)
                    a(n[l]);
                d.call(this, n);
                for (var c = this.slider.position, u = c + this.slider.displayWindowCount, g = 0; g < n.length; g++)
                    g >= c && u > g ? n[g].setAttribute("tabindex", 0) : n[g].removeAttribute("tabindex")
            }
        },
        pageChanged: function() {
            var e = this;
            e.refresh()
        },
        sizeCalculated: function(t) {
            if (this.is("initialized")) {
                var i, n, r, s = this.getCarouselContainerWidth(), a = u(s), l = this.getElement();
                if ("undefined" != typeof this.slider) {
                    this.slider.pause(),
                    p.call(this),
                    this.slider.start(),
                    l.style.maxWidth = window.innerWidth - C + "px",
                    "yotpo-size-7" === t || "yotpo-size-3" === t ? (i = "big-version",
                    n = "small-version",
                    r = g) : (i = "small-version",
                    n = "big-version",
                    r = m);
                    var c = (s - a * r) / a
                      , d = l.querySelector(".carousel-display-wrapper")
                      , h = l.querySelectorAll(".single-carousel");
                    !this.settings.data_testimonials_page_enabled || "yotpo-size-1" !== t && "yotpo-size-2" !== t && "yotpo-size-3" !== t || e.addClass(d, "has-testimonials-link");
                    for (var f = 0; f < h.length; f++)
                        e.show(h[f].querySelector("." + i)),
                        e.hide(h[f].querySelector("." + n)),
                        h[f].style.marginRight = c + "px";
                    this.slider.play(),
                    o.call(this),
                    this.getElement().querySelector(".scroller").style.width = s + "px";
                    var y = this.carouselReviewsCount - 1
                      , v = y > 0 ? "has_reviews" : "no_reviews";
                    e.currentAnalytics.trackUniqueEvent("carousel", "loaded", v)
                }
            }
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Embedded = function(e) {
    function t(t, i) {
        var n = this;
        n.analyticsCategory = "embed",
        n._controller = t,
        n.element = i,
        n.sources = {},
        n.settings = {
            per_page: n.element.getAttribute("data-reviews"),
            view: {
                type: n.element.getAttribute("data-product-id"),
                layout: n.element.getAttribute("data-layout"),
                width: n.element.getAttribute("data-width"),
                headerText: n.element.getAttribute("data-header-text"),
                transparency: n.element.getAttribute("data-transparency"),
                headerBackgroundColor: n.element.getAttribute("data-header-background-color"),
                bodyBackgroundColor: n.element.getAttribute("data-body-background-color"),
                fontSize: n.element.getAttribute("data-font-size"),
                fontColor: n.element.getAttribute("data-font-color")
            }
        };
        for (var r in o)
            o.hasOwnProperty(r) && n.on(r, o[r]);
        e.hoverAnalytics = new e.HoverIntervalEvent({
            interval: 1e3
        }),
        e.hoverAnalytics.register(n.element, function() {
            e.currentAnalytics.trackUniqueEvent(n.analyticsCategory, "hovered")
        })
    }
    function i() {
        for (var t, i = this, o = i.element.querySelectorAll(".embedded-item-link"), n = 0; t = o[n]; n++) {
            var r = t.getAttribute("data-widget-type")
              , s = t.getAttribute("data-product-id");
            e.addEventListener(t, "click", function() {
                e.currentAnalytics.trackEvent(i.analyticsCategory, "clicked_on", r, s)
            })
        }
    }
    var o = {};
    return t.selector = e.widgets.embedded.selector,
    t.prototype.getMethod = function() {
        var e = null;
        return "yotpo_global_reviews" == this.settings.view.type ? e = "reviews" : "top_rated_products" == this.settings.view.type && (e = "products"),
        "embedded_widget_" + e
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    o = {
        ready: function() {
            var t = this
              , o = this.getMethod();
            t.sources[o] = new e.Widgets.Basic(t._controller,t.getElement(),o),
            e.copy(t.settings, t.sources[o]),
            i.call(this),
            e.Modules.Handle.tooltip.call(this.getElement());
            var n;
            "embedded_widget_reviews" == o ? n = "recent_reviews" : "embedded_widget_products" == o && (n = "top_products"),
            e.currentAnalytics.trackEvent("embed", "loaded", n),
            e.currentInview.register(t.element, function() {
                e.currentAnalytics.trackEvent("embed", "shown", n)
            })
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Main = function(e) {
    function t(t, i) {
        var o = this;
        o._controller = t,
        o.element = i,
        o.sources = {},
        o.query,
        this.imagesHandler = new e.ImagesHandler(t.appKey,this),
        o.settings = {
            pid: o.element.getAttribute("data-product-id")
        };
        var n = e.getURLParameter(location.search, "yoReviewsPage");
        n && Number.isInteger(Number(n)) && (o.settings.page = parseInt(n)),
        e.getURLParameter(location.search, "yo_intentions") && (o.settings.force_intentions = e.getURLParameter(location.search, "yo_intentions")),
        o.element.getAttribute("data-product-tags") && (o.settings.tags = o.element.getAttribute("data-product-tags"));
        var r = o._controller.getUserSettings()
          , s = {
            lang: "locale",
            demo: "demo",
            mode: "mode",
            "product-readonly": "product-readonly",
            "write-only": "write-only"
        };
        "undefined" !== o.element.getAttribute("data-per_page") && (s.per_page = "per_page");
        for (var a in s)
            o.element.getAttribute("data-" + a) && (o.settings[s[a]] = o.element.getAttribute("data-" + a));
        var l = "undefined" != typeof r.questions_and_answers_standalone && r.questions_and_answers_standalone !== !1;
        if (l || delete o.settings.mode,
        o.analyticsCategory = "reviews",
        o.isWriteOnly() && (o.analyticsCategory += "_write_only"),
        "undefined" != typeof r.widget_v2 && "undefined" !== r.widget_v2.settings.display_names) {
            var c = e.compact(r.widget_v2.settings.display_names);
            o.settings.order_metadata_fields = {};
            for (var d in c)
                o.settings.order_metadata_fields[d] = Object.keys(c[d])
        }
        "undefined" != typeof r.css_preview && (o.settings.css_preview = r.css_preview);
        for (var u in T)
            T.hasOwnProperty(u) && o.on(u, T[u]);
        e.hoverAnalytics.register(o.element, function() {
            e.currentAnalytics.trackUniqueEvent(o.analyticsCategory, "hovered")
        });
        var p = o.element.getAttribute("data-prefilter");
        if (p)
            try {
                var g = JSON.parse(p);
                void 0 != g.product_properties && (g.order_product_properties = g.product_properties,
                delete g.product_properties),
                void 0 != g.product_custom_properties && (g.order_product_custom_properties = g.product_custom_properties,
                delete g.product_custom_properties);
                var h = [];
                for (var m in g)
                    for (var f in g[m])
                        h.push({
                            subType: m,
                            question: f,
                            answers: g[m][f]
                        });
                o.settings.prefilter_fields = JSON.stringify(h)
            } catch (y) {
                e.safeConsole("Failed to parse prefilter fields settings: " + y, "error")
            }
        var v = o.element.getAttribute("data-presorting");
        if (v)
            try {
                var w = JSON.parse(v);
                w.forEach(function(e) {
                    "product_custom_property" == e.type && (e.type = "order_product_custom_property"),
                    "product_property" == e.type && (e.type = "order_product_property")
                }),
                o.settings.presorting_fields = JSON.stringify(w)
            } catch (y) {
                e.safeConsole("Failed to parse presorting fields settings: " + y, "error")
            }
        if (e.getURLParameter(location.search, "yo_link_code")) {
            var _ = e.getURLParameter(location.search, "yo_link_code");
            e.ajax("http://api.yotpo.com/go/" + _, function() {
                e.safeConsole("Called a link")
            })
        }
        b.call(o)
    }
    function i() {
        if ("true" === this.element.getAttribute("data-open-submit-review")) {
            var t = this.element.getElementsByClassName("write-review-wrapper")[0];
            t && (e.addClass(t, "visible"),
            t.style.display = "block")
        }
    }
    function o(t, i, o) {
        var n = this.element.querySelectorAll('div[data-type="crfs"], mobile-single-filter').length
          , r = this.element.querySelectorAll('div[data-type="orders"], mobile-single-filter').length
          , s = this.element.querySelector(".reviews-amount").innerHTML.trim().split(" ")[0]
          , a = {
            met_requirements: !0,
            desktop_topics_count: t.length,
            desktop_suggested_topics: o ? t : [],
            mobile_topics_count: i.length,
            mobile_suggested_topics: o ? i : [],
            custom_fields_count: n,
            reviews_count: parseInt(s),
            metadata_fields_count: r,
            free_text_included: this._controller.userSettings.widget_v2.settings.display_free_text_filters,
            page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(this)
        };
        if (o) {
            var l = this.element.getAttribute("data-prefilter")
              , c = this.element.getAttribute("data-presorting");
            l && (a.prefilter = l),
            c && (a.presorting = c)
        }
        return a
    }
    function n() {
        var t = this.element.querySelector(e.isMobile() ? ".bottom-line-items-container-mobile" : ".bottom-line-items-container-desktop")
          , i = t.getElementsByClassName("yotpo-distribution-rows");
        i && i.length > 0 && (self.starDistribution = new e.StarDistribution(i,this))
    }
    function r() {
        function t(t, o) {
            i.switchSearchInProgressView(!0),
            t && i.filtersManager.removeFilter(!0, k.topics, t.toLowerCase()),
            o && i.filtersManager.addFilter(!0, k.topics, o.toLowerCase()),
            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.setClearAllButtonsState.call(i),
            e.FilterAndSearch.Analytics.AnalyticsNotifier.notifyEvent.call(i, k.topics, o, i.settings.pid)
        }
        var i = this;
        i.reviewsContainerElement = i.element.querySelector(".yotpo-nav-content"),
        i.desktopSuggestedTopics = [],
        i.mobileSuggestedTopics = [];
        var n = i._controller.userSettings.review_with_pictures;
        if (i.reviewsWithPicturesEnabled = n && "1" === n.settings.main_widget_visible,
        void 0 != i.sources.reviews && null != i.reviewsContainerElement && null != i.reviewsContainerElement.querySelector(".yotpo-reviews-header")) {
            i.filtersManager = new e.FiltersStateManager(i._controller,"Main",i.sources.reviews.settings),
            i.settings.presorting_fields && i.filtersManager.AddSetting("presorting_fields", i.settings.presorting_fields),
            i.filtersManager.subscribeToFiltersUpdate(i),
            e.Modules.Handle.desktopDropDown.call(this, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSelectSort, i.reviewsContainerElement, "sorting"),
            i.clearAllButtons = i.getElement().querySelectorAll(".desktop-clear-all-btn, .mobile-clear-filters-btn");
            for (var r = 0; r < i.clearAllButtons.length; r++)
                e.addEventListener(i.clearAllButtons[r], "click", function() {
                    e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.clearAllFilters.call(i)
                });
            if (null !== i.reviewsContainerElement.querySelector(".yotpo-reviews-filters")) {
                e.Modules.Handle.desktopDropDown.call(this, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSelectFilter, i.reviewsContainerElement, "filters-dropdown"),
                i.mobileFiltersModal = new e.MobileFilterModal(i,i.reviewsContainerElement,e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onMobileFiltersSubmitted);
                var s = Array.prototype.slice.call(i.getElement().querySelectorAll(".mobile-single-filter"))
                  , a = Array.prototype.filter.call(s, function(e) {
                    var t = e.querySelector(".mobile-filter-radio-button input");
                    return t != e.querySelector(".mobile-filter-radio-button input:checked")
                });
                if (a.length > 0) {
                    for (var l = 0; l < a.length; l++)
                        i.filtersManager.addFilter(!0, a[l].getAttribute("data-type"), {
                            id: a[l].getAttribute("id").replace("radio-question-", ""),
                            sub_type: a[l].getAttribute("data-sub-type"),
                            question: a[l].getAttribute("data-question"),
                            value: a[l].querySelector("input:checked").getAttribute("data-value")
                        });
                    e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onMobileFiltersSubmitted.call(i)
                }
                var c = i.getElement().querySelector(".suggested-topics");
                if (c) {
                    var d = c.querySelector("#suggested-topics-desktop-layout").querySelectorAll(".suggested-topic:not(.suggested-topic-expand) .suggested-topic-text")
                      , u = c.querySelector("#suggested-topics-mobile-layout").querySelectorAll(".suggested-topic:not(.suggested-topic-expand) .suggested-topic-text");
                    if (d)
                        for (var p = 0; p < d.length; p++)
                            i.desktopSuggestedTopics.push(d[p].innerHTML.trim());
                    if (u)
                        for (var g = 0; g < u.length; g++)
                            i.mobileSuggestedTopics.push(u[g].innerHTML.trim())
                }
                e.currentInview.register(i.reviewsContainerElement, function() {
                    try {
                        e.currentAnalytics.trackEvent("filter_reviews", "shown", i.settings.pid, null, o.call(i, i.desktopSuggestedTopics, i.mobileSuggestedTopics, !0))
                    } catch (t) {
                        e.safeConsole(t.message),
                        e.currentAnalytics.trackEvent("filter_reviews", "shown", i.settings.pid, null, o.call(i, i.desktopSuggestedTopics, i.mobileSuggestedTopics))
                    }
                });
                try {
                    e.currentAnalytics.trackEvent("filter_reviews", "loaded", i.settings.pid, null, o.call(this, this.desktopSuggestedTopics, this.mobileSuggestedTopics, !0))
                } catch (h) {
                    e.safeConsole(h.message),
                    e.currentAnalytics.trackEvent("filter_reviews", "loaded", i.settings.pid, null, o.call(this, this.desktopSuggestedTopics, this.mobileSuggestedTopics))
                }
                if (c) {
                    var m = c.querySelectorAll("#suggested-topics-desktop-layout, #suggested-topics-mobile-layout");
                    e.SuggestedTopics.bind(m, t)
                }
                e.FreeTextSearch.bind.call(i, i.reviewsContainerElement, I, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onFreeTextSearchedCallBack, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onClearTextSearchedCallBack)
            }
        }
    }
    function s() {
        var t = this
          , i = t.getElement().getElementsByClassName("yotpo-searchable-widget");
        if (i && i[0]) {
            var o = i[0]
              , n = o.getElementsByClassName("search-input")[0]
              , r = o.getElementsByClassName("suggested-topic-expand")
              , s = o.getElementsByClassName("clear-topic")[0];
            t.searchLoader = o.getElementsByClassName("yotpo-search-loader")[0],
            t.searchRelatedTopics = o.getElementsByClassName("yotpo-related-topics-container")[0],
            t.suggestedTopicElements = o.getElementsByClassName("suggested-topic");
            for (var l = 0; l < t.suggestedTopicElements.length; l++)
                e.addEventListener(t.suggestedTopicElements[l], "click", function() {
                    for (var i = 0; i < t.suggestedTopicElements.length; i++)
                        e.removeClass(t.suggestedTopicElements[i], "active-topic");
                    e.addClass(this, "active-topic"),
                    e.removeClass(s, "yotpo-hidden"),
                    e.addClass(t.searchRelatedTopics, "yotpo-hidden"),
                    n.value = this.getElementsByClassName("suggested-topic-text")[0].innerHTML,
                    t.query = n.value;
                    var o = "clicked_on";
                    a.call(t, o)
                });
            if (r && r[0]) {
                var c = r[0];
                e.addEventListener(c, "click", function() {
                    for (var i = 0; i < t.suggestedTopicElements.length; i++)
                        e.removeClass(t.suggestedTopicElements[i], "yotpo-hidden");
                    e.addClass(this, "yotpo-hidden")
                })
            }
            s && e.addEventListener(s, "click", function() {
                n.value = "",
                e.addClass(this, "yotpo-hidden"),
                t.query = n.value;
                for (var i = 0; i < t.suggestedTopicElements.length; i++)
                    e.removeClass(t.suggestedTopicElements[i], "active-topic");
                e.addClass(t.searchRelatedTopics, "yotpo-hidden"),
                a.call(t)
            }),
            n && e.addEventListener(n, "keydown", function(i) {
                var o = i.which || i.keyCode;
                if (e.removeClass(s, "yotpo-hidden"),
                ("" == n.value || 1 == n.value.length && (8 === o || 46 === o)) && e.addClass(s, "yotpo-hidden"),
                13 === o) {
                    t.query = n.value,
                    e.addClass(t.searchRelatedTopics, "yotpo-hidden");
                    for (var r = 0; r < t.suggestedTopicElements.length; r++)
                        e.removeClass(t.suggestedTopicElements[r], "active-topic");
                    var l = "searched";
                    a.call(t, l)
                }
            });
            var d = "true" === o.getAttribute("data-met-requirements")
              , u = !d || "true" === o.getAttribute("data-is-dummy");
            e.currentAnalytics.trackEvent("searchable_widget", u ? "loaded_dummy" : "loaded", null, t.query, {
                tags_count: t.suggestedTopicElements.length,
                requirements_met: d
            }),
            e.currentInview.register(o, function() {
                e.currentAnalytics.trackEvent("searchable_widget", u ? "shown_dummy" : "shown", null, t.query, {
                    tags_count: t.suggestedTopicElements.length,
                    requirements_met: d
                })
            })
        }
    }
    function a(t) {
        var i = this
          , o = {};
        o.params = i.sources.reviews.getSettings(),
        "" == i.query ? (i.sources.reviews.query_mode = !1,
        o.method = "reviews") : (i.sources.reviews.query_mode = !0,
        o.method = "queried_reviews",
        o.params.query = i.query),
        e.removeClass(i.searchLoader, "yotpo-hidden"),
        i.sources.reviews.settings.page = 1,
        o.params.page = i.sources.reviews.settings.page,
        o.params.query_mode = i.sources.reviews.query_mode,
        i._controller.getBatch(function(o) {
            var n = [];
            try {
                n = JSON.parse(o),
                n = n.shift().result;
                var r = new DOMParser
                  , s = r.parseFromString(n, "text/html")
                  , a = s.querySelector(".total-reviews-search").getAttribute("total-reviews-search");
                "undefined" != typeof i.sources.reviews.getElement() && (i.sources.reviews.getElement().innerHTML = n,
                i.tabs.element.getElementsByClassName("nav-tab-sum")[0].innerHTML = " (" + a + ")"),
                "function" == typeof i.sources.reviews.trigger && (i.sources.reviews.trigger("refreshed"),
                i.sources.reviews.trigger("ready")),
                "" != i.query && e.currentAnalytics.trackEvent("searchable_widget", t, null, i.query, {
                    results_count: a
                }),
                l.call(i, s),
                e.addClass(i.searchLoader, "yotpo-hidden"),
                e.removeClass(i.searchRelatedTopics, "yotpo-hidden")
            } catch (c) {
                e.safeConsole(c.message)
            }
        }, [o])
    }
    function l(e) {
        for (var t = [], i = e.querySelectorAll(".yotpo-data-related-topic"), o = 0; o < i.length; o++)
            t[o] = i[o].dataset.topic;
        if (t = t.slice(0, 5),
        this.searchRelatedTopics.textContent = "",
        0 != t.length) {
            var n = document.createElement("span");
            n.setAttribute("class", "yotpo-related-topics-label"),
            n.textContent = "Also showing result for ",
            this.searchRelatedTopics.appendChild(n);
            var r, s;
            for (o = 0; o < t.length; o++)
                r = document.createElement("span"),
                r.setAttribute("class", "yotpo-related-topic"),
                r.textContent = t[o],
                this.searchRelatedTopics.appendChild(r),
                s = document.createElement("span"),
                s.setAttribute("class", "yotpo-related-topic-separator"),
                o < t.length - 2 ? (s.textContent = ", ",
                this.searchRelatedTopics.appendChild(s)) : o == t.length - 2 && (s.textContent = " and ",
                this.searchRelatedTopics.appendChild(s))
        }
    }
    function c() {
        var t, i = this, o = {
            reviews: i.analyticsCategory,
            questions: "questions" == i.get("settings").mode ? "questions_widget" : "questions"
        };
        this.element.getElementsByClassName("yotpo-display-wrapper").length > 0 ? (t = this.element.getElementsByClassName("yotpo-display-wrapper")[0],
        i.settings.data_source = t.getAttribute("data-source")) : i.settings.data_source = "default",
        e.forEach(["yotpo-reviews", "yotpo-questions"], function(t) {
            var n = i.getElement().getElementsByClassName(t)[0];
            if ("undefined" != typeof n) {
                t = t.split("-")[1],
                i.sources[t] = new e.Widgets.Basic(i._controller,n,t,i.settings.page),
                i.sources[t].settings.pid = i.settings.pid,
                i.settings.demo && (i.sources[t].settings.demo = i.settings.demo),
                e.forEach(["locale", "mode"], function(e) {
                    i.settings[e] && (i.sources[t].settings[e] = i.settings[e])
                }),
                i.sources[t].on("ready", function() {
                    _.call(i);
                    for (var t = this.element.querySelectorAll(".yotpo-video.thumbnail-player"), o = 0; o < t.length; o++)
                        i.imagesHandler.handleMediaAfterLoad(t[o].getAttribute("data-image-id"), this.element, !0);
                    this._controller.userSettings && this._controller.userSettings.video_support && (this.videoPlayerLoader = new e.VideoPlayerLoader(this,this._controller.userSettings.video_support.settings),
                    this.videoPlayerLoader.checkAndUpdateIfHasVideo() && (this.videoScriptLoaded = this.videoPlayerLoader.loadKalturaScript()))
                }),
                i.sources[t].trigger("ready");
                var r = A(i.sources[t].content) ? "has_reviews" : "no_reviews";
                e.currentAnalytics.trackUniqueEvent(o[t], "loaded", r, i._controller.getUserSetting("version"), {
                    data_source: i.settings.data_source
                }),
                i.sources[t].on("pageChanged", function() {
                    i.sources[t].isFilteredReviews && (i.switchSearchInProgressView(!0),
                    i.filtersManager.fetchPage(i.sources[t].settings.page)),
                    setTimeout(function() {
                        const o = new Promise(function() {
                            e.scrollToTop((i.get("tabs") || i.sources[t]).getElement(), "mousewheel")
                        }
                        );
                        o.then(function() {
                            if (i.get("tabs")) {
                                const e = i.get("tabs").getElement().getElementsByClassName("yotpo-active");
                                e && e.length > 0 && e[0].focus()
                            }
                        })
                    }, 300)
                })
            }
        })
    }
    function d() {
        var t = this
          , i = t.getElement().getElementsByClassName("promoted-products-box")[0];
        "undefined" != typeof i && (t.promotedProducts = new e.Widgets.PromotedProducts(t._controller,i),
        t.promotedProducts.trigger("ready"))
    }
    function u() {
        var t = this
          , i = t.getElement().getElementsByClassName("yotpo-nav-primary")[0];
        i && (t.tabs = new e.Tabs(i),
        t.tabs.on("changed", function(e) {
            p.call(t, e)
        }))
    }
    function p(t) {
        var i = this
          , o = i.getActiveSource();
        e.SearchInProgress.hideSearchInProgress(this.element),
        o.getElement().innerHTML.trim() || o.refresh();
        for (var n in i.forms)
            n != o.getType() && i.forms[n].clean();
        (0 != t.event.clientX || 0 != t.event.clientY) && e.currentAnalytics.trackEvent(o.getType(), "clicked_on", "tab");
        var r = i.getElement().getElementsByClassName("yotpo-nav-dropdown sorting")[0]
          , s = this.getElement().querySelector(".mobile-clear-filters-btn");
        if (this._controller.userSettings.new_main_widget_layout && this._controller.userSettings.widget_v2.settings.display_star_distribution)
            var a = this.element.querySelector(e.isMobile() ? ".bottom-line-items-container-mobile" : ".bottom-line-items-container-desktop")
              , l = a.getElementsByClassName("yotpo-distribution-rows");
        if ("questions" == t.element.dataset.type && (r && e.addClass(r, "yotpo-hidden"),
        s && e.addClass(s, "yotpo-hidden"),
        l && l.length > 0)) {
            var c = new e.StarDistribution(l,i);
            c.disable()
        }
        if ("reviews" == t.element.dataset.type && (r && e.removeClass(r, "yotpo-hidden"),
        s && this.filtersManager && this.filtersManager.isFiltersExists() && e.removeClass(s, "yotpo-hidden"),
        l && l.length > 0)) {
            var c = new e.StarDistribution(l,i);
            c.enable()
        }
    }
    function g() {
        var t = this.getElement().getElementsByClassName("yotpo-messages");
        t.length > 0 && (this.messages = new e.Messages(t))
    }
    function h() {
        for (var t, i = this, o = i.element.querySelectorAll(".yotpo-thank-you .social-link"), n = 0; t = o[n]; n++)
            e.addEventListener(t, "click", function() {
                var t = this.getAttribute("data-network");
                e.currentAnalytics.trackEvent(i.analyticsCategory, "clicked_on", "share_" + t)
            });
        for (var r, s = i.element.querySelectorAll(".yotpo-thank-you .yotpo-icon-cross"), n = 0; r = s[n]; n++)
            e.addEventListener(r, "click", function() {
                e.currentAnalytics.trackEvent(i.analyticsCategory, "clicked_on", "close_review_posted")
            })
    }
    function m() {
        var e = this._controller
          , t = e.getUserSetting("ads")
          , i = e.getUserSetting("facebook_ads");
        t && i && "0" != i.settings.pixel_id && "0" != i.settings.init_pixel && this.settings.pid && fbq("track", "ViewContent", {
            content_ids: [this.settings.pid],
            content_type: "product"
        })
    }
    function f() {
        if (this._controller.userSettings.new_main_widget_layout && this._controller.userSettings.widget_v2.settings.display_star_distribution)
            var t = this.element.querySelector(e.isMobile() ? ".bottom-line-items-container-mobile" : ".bottom-line-items-container-desktop");
        else
            var t = this.getElement().querySelector(".yotpo-bottomline");
        t && (e.Modules.Handle.tooltip.call(t),
        this.bottomline = new e.Widgets.Bottomline(this,t),
        this.bottomline.trigger("ready"))
    }
    function y() {
        var t = this.getElement().querySelector(".questions");
        t && (this.questionsBottomline = new e.Widgets.QuestionsBottomline(this._controller,t),
        this.questionsBottomline.trigger("ready"))
    }
    function v() {
        window.setInterval(function() {
            e.currentInview.verifyInview()
        }, 1e3)
    }
    function b() {
        var t = this
          , i = "questions" == t.get("settings").mode ? "questions_widget" : t.analyticsCategory;
        e.currentInview.register(t.element, function() {
            e.currentAnalytics.trackEvent(i, "shown"),
            t.trigger("sizeCalculated")
        })
    }
    function w() {
        var e = this
          , t = e.getElement().querySelector(".yotpo-nav .status-bar .current");
        if (t) {
            var i = e.getActiveSource()
              , o = i.getElement().querySelector(".yotpo-pager")
              , n = o ? +o.getAttribute("data-per-page") : P;
            i.on("ready", function() {
                var e = +(i.settings.page || 1)
                  , o = (e - 1) * n + 1
                  , r = o - 1 + i.getContent().length;
                i.getTemplate() && --r,
                t.innerHTML = o + " - " + r
            })
        }
    }
    function _() {
        for (var t = this, i = t.getElement().getElementsByClassName("yotpo-review"), o = [], n = 0; n < i.length; n++) {
            var r = i[n]
              , s = r.getAttribute("data-review-id");
            "0" != s && o.push(s),
            e.hoverAnalytics.register(r, function() {
                e.currentAnalytics.trackReview(this, "reviews", "hovered")
            }),
            e.currentInview.register(r, function(i) {
                return function() {
                    if (S(t))
                        e.currentAnalytics.trackReview(i, "reviews", "shown", {
                            source: "shoppers_say"
                        });
                    else if (t.query)
                        e.currentAnalytics.trackReview(i, "reviews", "shown", {
                            source: "searchable_widget"
                        });
                    else if (void 0 !== t.analyticsFilterId && 0 !== t.analyticsFilterId) {
                        var o = {
                            source: "filter_reviews",
                            filter_state_id: t.analyticsFilterId,
                            page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(t)
                        };
                        e.currentAnalytics.trackReview(i, "reviews", "shown", o)
                    } else
                        e.currentAnalytics.trackReview(i, "reviews", "shown", {
                            source: "reviews"
                        })
                }
            }(r))
        }
        e.currentAnalytics.trackReviews(o, "reviews", "loaded")
    }
    function S(e) {
        var t = C(e, "yotpo-shoppers-say");
        return t ? t.moreReviewsClicked : !1
    }
    function C(e, t) {
        for (var i = e._controller.widgets, o = 0; o < i.length; o++)
            if (i[o].element.classList.contains(t))
                return i[o];
        return null
    }
    function A(e) {
        return e && e.length > 1
    }
    function E(e, t, i) {
        for (var o = 0, n = e.filtersDropDowns[o]; n && "scores" !== n.element.getAttribute("data-type"); )
            o++,
            n = e.filtersDropDowns[o];
        n.currentSelectedItem = t,
        n.previousSelectedItem = i
    }
    var k, x, I, P = 10, T = {};
    return t.selector = e.widgets.main.selector,
    t.prototype.getMethod = function() {
        return "main_widget"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getSource = function(e) {
        return this.sources[e]
    }
    ,
    t.prototype.getActiveSource = function() {
        return this.get("tabs") ? this.sources[this.get("tabs").getActive().getAttribute("data-type")] : null
    }
    ,
    t.prototype.getAppKey = function() {
        return this._controller.getAppKey()
    }
    ,
    t.prototype.get = function(e) {
        return this[e]
    }
    ,
    t.prototype.getProductInfo = function() {
        if ("undefined" == typeof this.productInfo) {
            this.productInfo = {
                sku: this.get("settings").pid,
                product_title: this.getElement().getAttribute("data-name") ? e.escapeHtml(this.getElement().getAttribute("data-name")) : this.getElement().getAttribute("data-name"),
                product_description: this.getElement().getAttribute("data-description"),
                product_url: this.getElement().getAttribute("data-url"),
                product_image_url: this.getElement().getAttribute("data-image-url"),
                product_specs: this.getProductSpecs()
            };
            var t = this.get("settings").demo;
            "undefined" != typeof t && (this.productInfo.demo = t);
            for (var i in this.productInfo)
                this.productInfo.hasOwnProperty(i) && !this.productInfo[i] && delete this.productInfo[i]
        }
        return this.productInfo
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.isWriteOnly = function() {
        return "undefined" != typeof (this.getSettings() || {})["write-only"]
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    t.prototype.getProductSpecs = function() {
        var e, t = this, i = ["brand", "isbn", "mpn", "upc"], o = {};
        for (var n in i)
            e = i[n],
            t.element.getAttribute("data-product-spec-" + e) && (o["product_specs[" + e + "]"] = t.element.getAttribute("data-product-spec-" + e));
        var r = [];
        for (var s in o)
            r.push(s);
        return r.length > 0 ? o : null
    }
    ,
    T = {
        ready: function() {
            k = e.filterAndSearch.filters_state_manager.aggregators_types,
            x = e.filterAndSearch.filters_drop_down_default_answer,
            I = e.filterAndSearch.free_text_search_input_placeholder,
            e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.init(),
            e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.init(),
            e.FilterAndSearch.Analytics.AnalyticsNotifier.init.call(this),
            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.init();
            var t = this.element.querySelector(".bottom-line-items-container-desktop")
              , o = this.element.querySelector(".bottom-line-items-container-mobile");
            e.isMobile() && (t && e.addClass(t, "yotpo-hidden"),
            o && e.removeClass(o, "yotpo-hidden")),
            c.call(this),
            u.call(this),
            g.call(this),
            d.call(this),
            f.call(this),
            y.call(this),
            v.call(this),
            w.call(this),
            s.call(this),
            i.call(this),
            e.Modules.Handle.write.call(this, "review"),
            e.Modules.Handle.write.call(this, "question"),
            e.Modules.Handle.sources.call(this),
            this._controller.userSettings.new_main_widget_layout ? r.call(this) : e.Modules.Handle.select.call(this),
            this._controller.userSettings.new_main_widget_layout && this._controller.userSettings.widget_v2.settings.display_star_distribution && !this._controller.userSettings.write_only_widget && n.call(this),
            e.Modules.Handle.mobileMenu.call(this),
            e.Modules.Handle.semiWhiteLabel.call(this),
            h.call(this),
            m.call(this)
        },
        resize: function() {
            this.promotedProducts && this.promotedProducts.trigger("resize")
        },
        sizeCalculated: function(e) {
            this.promotedProducts && this.promotedProducts.trigger("sizeCalculated", {
                className: e
            })
        }
    },
    t.prototype.switchSearchInProgressView = function(t) {
        var i = this.element;
        e.SearchInProgress.switchMode(i, t)
    }
    ,
    t.prototype.OnSubmittedFiltersChange = function(t, i) {
        try {
            if ("undefined" != typeof this.sources.reviews.getElement()) {
                var o = this.element.querySelector(".reviews-header");
                e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSubmittedFiltersChange.call(this, this.sources.reviews, o, this.reviewsContainerElement, t, i),
                "reviews" === this.getActiveSource().type && this.switchSearchInProgressView(!1)
            }
        } catch (n) {
            e.safeConsole(n.message)
        }
    }
    ,
    t.prototype.changeRatingsFilter = function(t, i, o, n) {
        var r = t.element.querySelectorAll('.filters-dropdown[data-type="scores"]')[0]
          , s = r.getElementsByClassName("list-category")[i + 1]
          , a = r.getElementsByClassName("list-category")[o + 1];
        E(t, s, a),
        r.setAttribute("data-value", s.getAttribute("data-value"));
        var l = r.querySelectorAll(".selected");
        l[0].setAttribute("data-selected-key", s.getAttribute("sort-name")),
        e.addClass(l[0], "non-default-item-selected"),
        l[0].innerHTML = s.children.length > 0 ? e.getElementText(s.children[0]) : "",
        e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSelectFilter.call(t, r, s, a, n),
        e.isMobile() && e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onMobileFiltersSubmitted.call(t, "star_distribution")
    }
    ,
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.PicturesCollage = function(e) {
    function t(t, i) {
        var o = this;
        o._controller = t,
        o.element = i,
        o.analyticsContext = {
            layout: "collage"
        },
        o.videoScriptLoaded = !1,
        this.imagesHandler = new e.ImagesHandler(t.appKey,this),
        o.settings = {
            demo: i.getAttribute("data-demo"),
            album_name: w,
            widget_name: "pictures-collage"
        },
        o.pagination = {
            currentPageCursor: {
                images_offset: 0,
                enlarge_images_offset: 0
            },
            nextPageCursor: {}
        };
        var n = o.element.getAttribute("data-product-id") || o.element.getAttribute("product-id");
        if (n) {
            o.analyticsCategory = "pictures_widget";
            var r = t.getUserSetting("product_gallery");
            o.settings.cta = String(r.settings.gallery_cta),
            o.analyticsContext.album_type = "product"
        } else
            o.analyticsCategory = "dedicated_page",
            o.analyticsContext.album_type = "custom";
        var s = new e.Modules.GallerySettings
          , a = s.getGallerySettings(i);
        Object.assign(o.settings, a),
        o.pagination.nextPageCursor.images_offset = o.settings.images_offset,
        o.pagination.nextPageCursor.enlarge_images_offset = o.settings.enlarge_images_offset,
        s.overrideSettingsFromDiv(o.element, o.settings),
        o.analyticsContext.gallery_id = o.settings.gallery_id || "none";
        for (var l in b)
            b.hasOwnProperty(l) && o.on(l, b[l])
    }
    function i() {
        this.wrapper = this.element.querySelector(".yotpo-pictures-collage-wrapper"),
        e.setHoverEnable(this.wrapper),
        this.container = this.element.querySelector(".yotpo-pictures-gallery-images-wrapper"),
        this.isLoadMoreButton = "button" === this.settings.load_more,
        o.call(this),
        f.call(this),
        this.analyticsTracker = new e.AnalyticsTracker(this.analyticsCategory,this.analyticsContext),
        this.imagesAnalyticsHandler = new e.ImagesAnalyticsHandler(this.element,this.analyticsTracker),
        this.brokenImageDescriptors = [],
        this._controller.userSettings && this._controller.userSettings.video_support && (this.videoPlayerLoader = new e.VideoPlayerLoader(this,this._controller.userSettings.video_support.settings),
        this.videoPlayerLoader.checkAndUpdateIfHasVideo() && (this.videoScriptLoaded = this.videoPlayerLoader.loadKalturaScript())),
        u.call(this),
        n.call(this),
        this.imagesHandler.loadImages(r, l, a),
        e.Modules.Event.on("popupClosed", function() {
            this.endlessScroller && this.endlessScroller.ignoreLoader(!1)
        }
        .bind(this)),
        e.Flows.UploadButton.initUploadButton(this._controller, this.element, this.settings, this.analyticsContext)
    }
    function o() {
        this.isLoadMoreButton ? (this.loader = this.element.querySelector(".yotpo-load-more-button"),
        this.loadIndicator = this.element.querySelector(".yotpo-image-loader.yotpo-pictures-gallery-fullpage-loader")) : this.loader = this.element.querySelector(".yotpo-image-loader.yotpo-pictures-gallery-fullpage-loader")
    }
    function n() {
        var e = this.settings.layout.rows;
        if (e % 2 !== 0) {
            var t = this.settings.layout.orientation;
            this.settings.layout.orientation = "rtl" === t ? "ltr" : "rtl"
        }
    }
    function r(t) {
        "none" !== t.settings.load_more && v.call(t) && !t.endlessScroller && (t.endlessScroller = y.call(t),
        e.removeClass(t.loader, "yotpo-hidden")),
        s(t)
    }
    function s(e) {
        e.imagesHandler.replaceBrokenImages(e.brokenImageDescriptors),
        e.imagesAnalyticsHandler.bindAnalyticsForloadedImages(e.imageContainers),
        e.imagesHandler.verifyKalturaLoad(),
        e.videoPlayerLoader && !e.videoScriptLoaded && e.videoPlayerLoader.checkAndUpdateIfHasVideo() && (e.videoScriptLoaded = e.videoPlayerLoader.loadKalturaScript())
    }
    function a(e, t, i) {
        i.imagesHandler.handleMediaAfterLoad(e, t),
        i.imagesHandler.adjustImageHoverStyle()
    }
    function l(e, t) {
        var i = {
            id: t,
            source: e.imagesHandler.getImageSource(t),
            url: e.src,
            errorType: e.errorType,
            reported: !1
        };
        e.brokenImageDescriptors.push(i),
        f.call(e)
    }
    function c() {
        for (var t = [], i = 0; i < this.imageContainers.length; ++i)
            if (!e.hasClass(this.imageContainers[i], "yotpo-hidden")) {
                var o = this.imageContainers[i].querySelector(".y-image-overlay");
                t.push(o)
            }
        return t
    }
    function d() {
        return this.imageContainers.length
    }
    function u() {
        if (this.settings.load_lightbox_sync) {
            var e = this.element.querySelector(".yotpo-lightbox-contents");
            this.initLightbox(e)
        } else {
            var t = Object.assign({}, this.getSettings(), this.pagination.currentPageCursor)
              , i = {
                method: "generic_lightbox_container",
                params: t
            };
            this._controller.getBatch(p.bind(this), [i], null)
        }
    }
    function p(e) {
        var t = JSON.parse(e)[0];
        if (t) {
            this.element.insertAdjacentHTML("afterbegin", t.result);
            var i = this.element.querySelector(".yotpo-lightbox-contents");
            this.initLightbox(i)
        }
    }
    function g(t) {
        this.lightbox && this.lightbox.isOpen ? e.Modules.Event.on("lightboxClosed", function() {
            e.Modules.Event.removeEvent("lightboxClosed"),
            h.call(this, t)
        }
        .bind(this)) : h.call(this, t)
    }
    function h(t) {
        var i = this.element.querySelector(".y-slider-container")
          , o = JSON.parse(t)[0].result
          , r = document.createElement("div");
        r.insertAdjacentHTML("beforeend", o);
        var c = r.querySelector(".yotpo-pictures-gallery-images-wrapper")
          , d = r.querySelector(".yotpo-lightbox-contents")
          , u = r.querySelector(".y-slider-container")
          , p = (c.querySelectorAll(".yotpo-single-image-container").length,
        this.element.querySelector(".yotpo-lightbox-contents"))
          , g = c.querySelector(".y-image-wrapper")
          , h = r.querySelector("#next_page_cursor_" + this.endlessScroller.page);
        e.appendChildElements(c, this.container),
        e.appendChildElements(u, i),
        e.appendChildElements(d, p),
        f.call(this),
        this.imagesHandler.loadImages(s, l, a),
        this.initLightbox(p),
        n.call(this),
        v.call(this) || (e.addClass(this.loader, "yotpo-hidden"),
        this.isLoadMoreButton && (e.addClass(this.loadIndicator, "yotpo-hidden"),
        e.remove(this.loader))),
        this.pagination.currentPageCursor = this.pagination.nextPageCursor,
        this.pagination.nextPageCursor = JSON.parse(h.innerHTML),
        g.focus()
    }
    function m() {
        var e = Object.assign({}, this.getSettings(), this.pagination.nextPageCursor)
          , t = {
            method: "partial_generic_gallery",
            params: e
        };
        this.endlessScroller && this.endlessScroller.getNextPage(t, g.bind(this))
    }
    function f() {
        this.imageContainers = this.container.querySelectorAll(".yotpo-single-image-container")
    }
    function y() {
        return this.isLoadMoreButton ? new e.Modules.ButtonEndlessScroll(this.settings.per_page,this._controller,this.loader,m.bind(this),this.loadIndicator) : new e.Modules.InviewEndlessScroll(this.settings.per_page,this._controller,this.loader,m.bind(this))
    }
    function v() {
        var e = d.call(this)
          , t = this.settings.total_number_of_images - e
          , i = t / _[this.settings.layout_size];
        return i >= 1
    }
    var b = {}
      , w = "UGC Gallery"
      , _ = {
        small: 3,
        medium: 5,
        large: 7
    };
    return t.prototype.getMethod = function() {
        return "PicturesCollage"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    t.prototype.getActiveSource = function() {
        return this
    }
    ,
    t.prototype.refresh = function() {
        var t = e.getDocElement().querySelectorAll(".yotpo-pictures-gallery-wrapper");
        t[0].style.opacity = .3,
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.getImageElements = function() {
        return this.imageContainers
    }
    ,
    t.prototype.initLightbox = function(t) {
        var i = this;
        this.lightboxWrapper = this.element.querySelector(".yotpo-lightbox-wrapper");
        var o = this.lightboxWrapper.querySelector(".yotpo-lightbox");
        if (o)
            for (var n = 0; n < i.imageContainers.length; ++n) {
                var r = i.imageContainers[n].querySelector(".y-image-overlay.yotpo-new-image");
                if (r) {
                    e.removeClass(r, "yotpo-new-image");
                    var s = i.imageContainers[n].querySelector(".y-image-wrapper");
                    e.addEventListener(s, "click", function() {
                        var o = c.call(i)
                          , n = new e.SliderContentProvider(o,t,!0,i.analyticsCategory + "_popup",i.settings.gallery_id || "none")
                          , r = new e.AnalyticsTracker(i.analyticsCategory + "_popup",i.analyticsContext)
                          , s = i.lightboxWrapper.cloneNode(!0);
                        i.lightbox = new e.Widgets.Lightbox(i._controller,s.querySelector(".yotpo-lightbox"),n,r,s),
                        i.lightbox.open(this.querySelector(".y-image-overlay"), !0),
                        this.endlessScroller && i.endlessScroller.ignoreLoader(!0)
                    })
                }
            }
    }
    ,
    b = {
        ready: function() {
            i.call(this),
            e.Modules.Handle.select.call(this)
        },
        refreshed: function() {
            this.sizeClass && adjustImages.call(this, this.sizeClass)
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.PicturesGallery = function(e) {
    function t(t, o) {
        var n, r, s = this;
        s._controller = t,
        s.element = o,
        s.analyticsContext = {
            layout: "grid"
        },
        s.videoScriptLoaded = !1,
        this.imagesHandler = new e.ImagesHandler(t.appKey,this);
        var a = t.getUserSetting("review_with_pictures")
          , l = t.getUserSetting("visual_curation")
          , c = s.element.getAttribute("data-product-id") || s.element.getAttribute("product-id");
        s.settings = {
            demo: o.getAttribute("data-demo"),
            album_name: T
        },
        c ? (r = "gallery",
        n = t.getUserSetting("product_gallery"),
        s.settings.product_id = c,
        s.analyticsCategory = "pictures_widget",
        s.settings.css_settings_class = "yotpo-product-gallery",
        s.settings.widget_ref_name = "product_gallery_shop_now",
        s.analyticsContext.album_type = "product") : (r = "dedicated_page",
        n = t.getUserSetting("pictures_dedicated_page"),
        s.analyticsCategory = "dedicated_page",
        s.settings.css_settings_class = "yotpo-pictures-gallery",
        s.settings.widget_ref_name = "picture_gallery_shop_now",
        s.analyticsContext.album_type = "custom");
        var d = t.getUserSetting("generic_gallery")
          , u = new e.Modules.GallerySettings;
        if (n) {
            var p = u.getGallerySettings(s.element);
            s.settings.widget_name = "pictures-gallery",
            d && p ? Object.assign(s.settings, p) : (s.settings.cta = n.settings[r + "_cta"],
            s.settings.cta_color = n.settings[r + "_cta_color"],
            s.settings.cta_text = n.settings[r + "_cta_text"],
            s.settings.hover = n.settings[r + "_hover"],
            s.settings.title = n.settings[r + "_title"],
            s.settings.spacing = n.settings[r + "_spacing"],
            s.settings.layout_settings = n.settings[r + "_layout"],
            s.settings.source = n.settings[r + "_source"],
            s.settings.sort = s.settings.sort_setting = n.settings.sort,
            s.settings.sorting_enabled = "1" === String(n.settings[r + "_sorting"]))
        }
        u.overrideSettingsFromDiv(s.element, s.settings),
        s.analyticsContext.album_id = s.settings.album_id || "none",
        s.analyticsContext.gallery_id = s.settings.gallery_id || "none",
        s.settings.sorting_enabled = !o.hasAttribute("data-source") && s.settings.sorting_enabled && s.settings.source.length > 1 && a && l,
        s.settings.per_page = s.settings.layout_settings.mode === I ? k * x : s.settings.layout_settings.rows * k;
        for (var g in A)
            A.hasOwnProperty(g) && s.on(g, A[g]);
        d || t.on("CssReady", function() {
            this.cssReady = !0,
            s.cssReadyCalled || i.bind(s)()
        })
    }
    function i() {
        this.cssReadyCalled = !0;
        var e = this.imagesHandler.lazyLoadingHandler;
        !e.loadImagesCalled && e.loadCallbacks && e.loadImages(!0)
    }
    function o() {
        this.settings.gid || (this._controller.userSettings.generic_gallery = !1),
        this.wrapper = this.element.querySelector(".yotpo-pictures-gallery-wrapper"),
        this.uploadPhotosButton = this.element.querySelector(".yotpo-pictures-gallery-upload-button"),
        e.setHoverEnable(this.wrapper),
        this.container = this.element.querySelector(".yotpo-pictures-gallery-images-wrapper"),
        this.isLoadMoreButton = this._controller.userSettings.generic_gallery ? "button" === this.settings.load_more : 1 === this.settings.layout_settings.load_more_button,
        n.call(this),
        w.call(this),
        this.analyticsTracker = new e.AnalyticsTracker(this.analyticsCategory,this.analyticsContext),
        this.imagesAnalyticsHandler = new e.ImagesAnalyticsHandler(this.element,this.analyticsTracker),
        this.brokenImageDescriptors = [],
        this._controller.userSettings && this._controller.userSettings.video_support && (this.videoPlayerLoader = new e.VideoPlayerLoader(this,this._controller.userSettings.video_support.settings),
        this.videoPlayerLoader.checkAndUpdateIfHasVideo() && (this.videoScriptLoaded = this.videoPlayerLoader.loadKalturaScript())),
        d.call(this),
        this.imagesHandler.loadImages(r, a, h),
        e.Modules.Event.on("popupClosed", function() {
            this.endlessScroller && this.endlessScroller.ignoreLoader(!1)
        }
        .bind(this)),
        e.Flows.UploadButton.initUploadButton(this._controller, this.element, this.settings, this.analyticsContext)
    }
    function n() {
        this.isLoadMoreButton ? (this.loader = this.element.querySelector(".yotpo-load-more-button"),
        this.loadIndicator = this.element.querySelector(".yotpo-image-loader.yotpo-pictures-gallery-fullpage-loader")) : this.loader = this.element.querySelector(".yotpo-image-loader.yotpo-pictures-gallery-fullpage-loader")
    }
    function r(t) {
        t._controller.userSettings.generic_gallery ? "none" !== t.settings.load_more && _.call(t) && !t.endlessScroller && (t.endlessScroller = C.call(t),
        e.removeClass(t.loader, "yotpo-hidden")) : t.settings.layout_settings.mode !== I || c.call(t) !== t.settings.per_page || t.endlessScroller || (t.endlessScroller = C.call(t),
        e.removeClass(t.loader, "yotpo-hidden")),
        s(t)
    }
    function s(e) {
        e.imagesHandler.replaceBrokenImages(e.brokenImageDescriptors),
        e.imagesAnalyticsHandler.bindAnalyticsForloadedImages(e.imageContainers),
        e.imagesHandler.verifyKalturaLoad(),
        e.videoPlayerLoader && !e.videoScriptLoaded && e.videoPlayerLoader.checkAndUpdateIfHasVideo() && (e.videoScriptLoaded = e.videoPlayerLoader.loadKalturaScript())
    }
    function a(e, t) {
        var i = {
            id: t,
            source: e.imagesHandler.getImageSource(t),
            url: e.src,
            errorType: e.errorType,
            reported: !1
        };
        e.brokenImageDescriptors.push(i),
        e.imagesHandler.removeBrokenImages([t]),
        w.call(e)
    }
    function l() {
        for (var t = [], i = 0; i < this.imageContainers.length; ++i)
            if (!e.hasClass(this.imageContainers[i], "yotpo-hidden")) {
                var o = this.imageContainers[i].querySelector(".y-image-overlay");
                t.push(o)
            }
        return t
    }
    function c() {
        return this.imageContainers.length + this.brokenImageDescriptors.length
    }
    function d() {
        if (this.settings.load_lightbox_sync) {
            var e = this.element.querySelector(".yotpo-lightbox-contents");
            this.initLightbox(e)
        } else {
            var t = {};
            t = this._controller.userSettings.generic_gallery ? {
                method: "generic_lightbox_container",
                params: this.getSettings()
            } : {
                method: "lightbox_container",
                params: this.getSettings()
            },
            this._controller.getBatch(u.bind(this), [t], null)
        }
    }
    function u(e) {
        var t = JSON.parse(e)[0];
        if (t) {
            this.element.insertAdjacentHTML("afterbegin", t.result);
            var i = this.element.querySelector(".yotpo-lightbox-contents");
            this.initLightbox(i)
        }
    }
    function p(t) {
        this.lightbox && this.lightbox.isOpen ? e.Modules.Event.on("lightboxClosed", function() {
            e.Modules.Event.removeEvent("lightboxClosed"),
            g.call(this, t)
        }
        .bind(this)) : g.call(this, t)
    }
    function g(t) {
        var i = this.element.querySelector(".y-slider-container")
          , o = JSON.parse(t)[0].result
          , n = document.createElement("div");
        n.insertAdjacentHTML("beforeend", o);
        var r = n.querySelector(".yotpo-pictures-gallery-images-wrapper")
          , l = n.querySelector(".yotpo-lightbox-contents")
          , c = n.querySelector(".y-slider-container")
          , d = r.childElementCount
          , u = this.element.querySelector(".yotpo-lightbox-contents")
          , p = r.querySelector(".y-image-wrapper");
        e.appendChildElements(r, this.container),
        e.appendChildElements(c, i),
        e.appendChildElements(l, u),
        w.call(this),
        this.imagesHandler.loadImages(s, a, h),
        this.initLightbox(u),
        (this._controller.userSettings.generic_gallery && !_.call(this) || d < this.settings.per_page) && (e.addClass(this.loader, "yotpo-hidden"),
        this.isLoadMoreButton && (e.addClass(this.loadIndicator, "yotpo-hidden"),
        e.remove(this.loader))),
        p.focus()
    }
    function h(e, t, i) {
        i.imagesHandler.handleMediaAfterLoad(e, t),
        i.imagesHandler.adjustImageHoverStyle()
    }
    function m() {
        var e = this.getElement().getElementsByClassName("selected")[0]
          , t = f.call(this);
        e && this.settings.sorting_enabled && (t.sorting_enabled = !0,
        t.sort = e.getAttribute("data-selected-key")),
        t.offset = y.call(this);
        var i = {};
        i = this._controller.userSettings.generic_gallery ? {
            method: "partial_generic_gallery",
            params: this.settings
        } : {
            method: "partial_pictures_gallery",
            params: t
        },
        this.endlessScroller && this.endlessScroller.getNextPage(i, p.bind(this))
    }
    function f() {
        return {
            hover: this.settings.hover,
            lightbox: this.settings.lightbox,
            video_hover: this.settings.video_hover,
            cta: this.settings.cta,
            cta_text: this.settings.cta_text,
            cta_color: this.settings.cta_color,
            source: this.settings.source,
            product_id: this.settings.product_id,
            album_id: this.settings.album_id,
            album_name: T,
            widget_ref_name: this.settings.widget_ref_name,
            sort: this.settings.sort
        }
    }
    function y() {
        var e = v.call(this)
          , t = b.call(this);
        return {
            review: e.review + t.review,
            instagram: e.instagram + t.instagram,
            onsite_upload: e.onsite_upload + t.onsite_upload,
            manual_upload: e.manual_upload + t.manual_upload,
            "import": e["import"] + t["import"]
        }
    }
    function v() {
        for (var e = {
            review: 0,
            instagram: 0,
            onsite_upload: 0,
            manual_upload: 0,
            "import": 0
        }, t = 0; t < this.brokenImageDescriptors.length; t++)
            e[this.brokenImageDescriptors[t].source]++;
        return e
    }
    function b() {
        for (var e = {
            review: 0,
            instagram: 0,
            onsite_upload: 0,
            manual_upload: 0,
            "import": 0
        }, t = 0; t < this.imageContainers.length; ++t) {
            var i = this.imageContainers[t].querySelector(".y-image-overlay");
            i && (source = i.getAttribute("data-source"),
            e[source]++)
        }
        return e
    }
    function w() {
        this.imageContainers = this.container.querySelectorAll(".yotpo-single-image-container")
    }
    function _() {
        var e = c.call(this)
          , t = this.settings.total_number_of_images - e;
        return t >= this.settings.images_per_row
    }
    function S(t) {
        if (this.settings.layout_settings.mode === P) {
            var i = this.element.querySelectorAll(".yotpo-single-image-container")
              , o = this.element.querySelectorAll(".yotpo-single-image-container.yotpo-hidden")
              , n = i.length
              , r = this.settings.layout_settings.rows * E[t]
              , s = n - o.length
              , a = s > r
              , l = !a && n > s;
            if (a)
                for (var c = r; s > c; c++)
                    e.addClass(i[c], "yotpo-hidden");
            else if (l)
                for (var c = s; r > c && n > c; c++)
                    e.removeClass(i[c], "yotpo-hidden")
        }
    }
    function C() {
        return this.isLoadMoreButton ? new e.Modules.ButtonEndlessScroll(this.settings.per_page,this._controller,this.loader,m.bind(this),this.loadIndicator) : new e.Modules.InviewEndlessScroll(this.settings.per_page,this._controller,this.loader,m.bind(this))
    }
    var A = {}
      , E = {
        "yotpo-size-7": 7,
        "yotpo-size-6": 6,
        "yotpo-size-5": 5,
        "yotpo-size-4": 4,
        "yotpo-size-3": 3,
        "yotpo-size-2": 3,
        "yotpo-size-1": 3
    }
      , k = 7
      , x = 8
      , I = "full_page"
      , P = "num_of_rows"
      , T = "UGC Gallery";
    return t.selector = e.widgets["pictures-gallery"].selector,
    t.prototype.getMethod = function() {
        return "PicturesGallery"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    t.prototype.getActiveSource = function() {
        return this
    }
    ,
    t.prototype.refresh = function() {
        var t = e.getDocElement().querySelectorAll(".yotpo-pictures-gallery-wrapper");
        t[0].style.opacity = .3,
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.getImageElements = function() {
        return this.imageContainers
    }
    ,
    t.prototype.initLightbox = function(t) {
        var i = this;
        this.lightboxWrapper = this.element.querySelector(".yotpo-lightbox-wrapper");
        var o = this.lightboxWrapper.querySelector(".yotpo-lightbox");
        if (o)
            for (var n = 0; n < i.imageContainers.length; ++n) {
                var r = i.imageContainers[n].querySelector(".y-image-overlay.yotpo-new-image");
                if (r) {
                    e.removeClass(r, "yotpo-new-image");
                    var s = i.imageContainers[n].querySelector(".y-image-wrapper");
                    e.addEventListener(s, "click", function() {
                        var o = l.call(i)
                          , n = new e.SliderContentProvider(o,t,!0,i.analyticsCategory + "_popup",i.settings.gallery_id || "none")
                          , r = new e.AnalyticsTracker(i.analyticsCategory + "_popup",i.analyticsContext)
                          , s = i.lightboxWrapper.cloneNode(!0);
                        i.lightbox = new e.Widgets.Lightbox(i._controller,s.querySelector(".yotpo-lightbox"),n,r,s),
                        i.lightbox.open(this.querySelector(".y-image-overlay"), !0),
                        this.endlessScroller && i.endlessScroller.ignoreLoader(!0)
                    })
                }
            }
    }
    ,
    A = {
        ready: function() {
            o.call(this),
            e.Modules.Handle.select.call(this)
        },
        sizeCalculated: function(e) {
            this.sizeClass = e,
            S.call(this, e)
        },
        refreshed: function() {
            this.sizeClass && S.call(this, this.sizeClass)
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.GenericGallery = function(e) {
    function t(e, t) {
        var o = this;
        this.element = t,
        this.controller = e,
        this.settings = {
            gid: t.dataset.galleryId,
            page: 1,
            max_images_in_view: s.call(this),
            element_width: t.offsetWidth,
            product_id: o.element.getAttribute("data-product-id"),
            demo: o.element.getAttribute("data-demo") || !1
        },
        this.settings.div_settings = g.getDivSettings(o.element),
        this.settings.layout_size = this.settings.div_settings.is_preview ? r.call(this) : n.call(this);
        for (var a in l)
            l.hasOwnProperty(a) && o.on(a, l[a]);
        e.on("CssReady", function() {
            this.cssReady = !0,
            o.widgetImpl && !o.widgetImpl.cssReadyCalled && i.bind(o)()
        })
    }
    function i() {
        this.widgetImpl.cssReadyCalled = !0;
        var e = this.widgetImpl.imagesHandler || this.widgetImpl.imageHandler;
        e.lazyLoadingHandler.loadImagesCalled || e.lazyLoadingHandler.loadImages(!0)
    }
    function o() {
        var e = g.getGallerySettings(this.element);
        this.widgetImpl = d[e.layout_name].constructWidget(this.controller, this.element),
        Object.assign(this.widgetImpl.getSettings(), this.settings),
        this.widgetImpl.trigger("ready")
    }
    function n() {
        var e = this.element.offsetWidth;
        return 415 >= e ? c.small : e > 415 && 1280 >= e ? c.medium : c.large
    }
    function r() {
        var e = this.element.offsetWidth;
        return 415 >= e ? c.small : c.large
    }
    function s() {
        var e = a.call(this)
          , t = this.element.offsetWidth / u
          , i = e ? Math.ceil(t) : Math.floor(t);
        return Math.max(i, p)
    }
    function a() {
        return this.controller.userSettings && this.controller.userSettings.pictures_slider && "1" === String(this.controller.userSettings.pictures_slider.settings.full_width)
    }
    var l = {}
      , c = Object.freeze({
        small: "small",
        medium: "medium",
        large: "large"
    })
      , d = {
        CAROUSEL_1: {
            constructWidget: function(t, i) {
                return new e.Widgets.Slider(t,i)
            }
        },
        GRID_1: {
            constructWidget: function(t, i) {
                return new e.Widgets.PicturesGallery(t,i)
            }
        },
        COLLAGE_1: {
            constructWidget: function(t, i) {
                return new e.Widgets.PicturesCollage(t,i)
            }
        }
    }
      , u = 180
      , p = 3
      , g = new e.Modules.GallerySettings;
    return l = {
        ready: function() {
            o.call(this),
            e.Modules.Handle.select.call(this)
        }
    },
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.getMethod = function() {
        return "GenericGallery"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t
}(Yotpo),
Yotpo.Widgets.PicturesWidget = function(e) {
    function t(e, t) {
        var n, r = this;
        return n = e.userSettings && e.userSettings.generic_gallery ? t.getAttribute("data-layout") || "generic" : t.getAttribute("data-layout"),
        "generic" !== n && e.on("CssReady", function() {
            this.cssReady = !0,
            r.widgetImpl && !r.widgetImpl.cssReadyCalled && i.bind(r)()
        }),
        this.widgetImpl = o[n].constructWidget(e, t),
        this.widgetImpl
    }
    function i() {
        this.widgetImpl.cssReadyCalled = !0;
        var e = this.widgetImpl.imagesHandler || this.widgetImpl.imageHandler;
        !e.lazyLoadingHandler.loadImagesCalled && e.lazyLoadingHandler.loadCallbacks && e.lazyLoadingHandler.loadImages(!0)
    }
    var o = {
        carousel: {
            constructWidget: function(t, i) {
                return new e.Widgets.Slider(t,i)
            }
        },
        full_page: {
            constructWidget: function(t, i) {
                return new e.Widgets.PicturesGallery(t,i)
            }
        },
        num_of_rows: {
            constructWidget: function(t, i) {
                return new e.Widgets.PicturesGallery(t,i)
            }
        },
        collage: {
            constructWidget: function(t, i) {
                return new e.Widgets.PicturesCollage(t,i)
            }
        },
        generic: {
            constructWidget: function(t, i) {
                return new e.Widgets.GenericGallery(t,i)
            }
        }
    };
    return t.selector = e.widgets["pictures-widget"].selector,
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.PromotedProducts = function(e) {
    function t(t, i) {
        var n = this;
        n.analyticsCategory = "promoted_products",
        n._controller = t,
        n.element = i,
        n.settings = {
            promoted: !0
        },
        n.currentItem = 0,
        n.totalItems = i.getElementsByTagName("li").length,
        n.scrollBase = i.getElementsByClassName("promoted-products")[0].scrollLeft,
        n.css_preview = t.userSettings.css_preview,
        e.supportTouch() && (e.hide(i.getElementsByClassName("yotpo-pager")[0]),
        delete o.pageChanged,
        i.getElementsByClassName("promoted-products")[0].style.overflowX = "auto");
        for (var r in o)
            o.hasOwnProperty(r) && n.on(r, o[r])
    }
    function i() {
        var t = this
          , i = "true" === t.getElement().getAttribute("data-is-dummy");
        e.currentAnalytics.trackUniqueEvent("promoted_products", i ? "loaded_dummy" : "loaded"),
        e.currentInview.register(t.element, function() {
            e.currentAnalytics.trackUniqueEvent("promoted_products", i ? "shown_dummy" : "shown")
        }),
        e.hoverAnalytics.register(t.element, function() {
            e.currentAnalytics.trackUniqueEvent("promoted_products", "hovered")
        });
        for (var o = t.getElement().getElementsByClassName("yotpo-promoted-product"), n = [], r = 0; r < o.length; ++r) {
            var s = o[r]
              , a = s.getAttribute("data-product-id")
              , l = function(t, i) {
                return function() {
                    e.currentAnalytics.trackUniqueEvent("promoted_products", t, "product", void 0, i)
                }
            };
            n.push(a),
            e.currentInview.register(s, l(i ? "shown_dummy" : "shown", {
                sppid: a
            })),
            e.hoverAnalytics.register(s, l("hovered", {
                hppid: a
            })),
            s.getElementsByClassName("yotpo-product-link")[0].onclick = l("clicked_on", {
                cppid: a
            })
        }
        var c = {
            lppid: a,
            domain_key: n,
            count_products: n.length
        };
        e.currentAnalytics.trackUniqueEvent("promoted_products", i ? "loaded_dummy" : "loaded", "product", void 0, c)
    }
    var o = {}
      , n = !1;
    return t.selector = ".promoted-products-box",
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getMethod = function() {
        return "promoted_products"
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.perPage = 3,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    o = {
        ready: function() {
            var t = this;
            e.Modules.Pagination.init.call(t),
            t.trigger("resize")
        },
        pageChanged: function(i) {
            t.perPage = Math.min(this.getElement().getElementsByClassName("yotpo-promoted-product").length - 1, t.perPage);
            var o = this._controller.getUserSetting("direction")
              , n = Math.min(Math.max(0, this.currentItem + ("yotpo_next" == i ? t.perPage : -t.perPage)), this.totalItems - 1)
              , r = this.getElement().getElementsByClassName("promoted-products")[0]
              , s = r.getElementsByTagName("li")[n]
              , a = s.clientWidth * n;
            "rtl" == o && (a = this.scrollBase - s.clientWidth * n),
            e.scrollTo(r, a, 500, !1),
            this.currentItem = n
        },
        resize: function() {
            if (!e.supportTouch()) {
                var t = this.element.getElementsByClassName("promoted-products")[0];
                t.scrollWidth <= t.offsetWidth ? e.hide(this.element.getElementsByClassName("yotpo-pager")[0]) : e.show(this.element.getElementsByClassName("yotpo-pager")[0])
            }
        },
        sizeCalculated: function(t) {
            for (var o = this, r = 0, s = document.getElementsByTagName("body")[0], a = o.getElement(); a && a != s && 0 == a.offsetWidth; )
                a = a.parentNode;
            var l = 0;
            l += 2 * parseInt(e.getStyle(a, "margin-left")),
            l += 2 * parseInt(e.getStyle(a, "padding-left"));
            var c = o.getElement().getElementsByClassName("yotpo-promoted-products")[0];
            r += 2 * parseInt(e.getStyle(c, "margin-left"));
            var d = o.getElement().getElementsByClassName("promoted-products")[0]
              , u = d.getElementsByTagName("li").length
              , p = o.getElement().getElementsByClassName("yotpo-promoted-product");
            if (0 == p.length)
                return void e.hide(this.getElement());
            r += u * parseInt(e.getStyle(p[0], "margin-left")) * 2;
            var g = 160;
            "yotpo-small" == t.className && (g = 110);
            var h = g * u;
            !o.css_preview && a.offsetWidth >= h + r + l ? e.hide(this.getElement()) : (e.show(this.getElement(), "block"),
            n || (n = !0,
            i.call(o))),
            o.trigger("resize")
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.QuestionsBottomline = function(e) {
    function t(e, t) {
        var o = this;
        o._controller = e,
        o.element = t,
        o.settings = {
            pid: t.getAttribute("data-product-id")
        };
        for (var n in i)
            i.hasOwnProperty(n) && o.on(n, i[n])
    }
    var i = {};
    return t.selector = e.widgets["questions-bottomline"].selector,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getMethod = function() {
        return "questions_bottomline"
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.refresh = function() {
        e.Modules.Refresh.perform.call(this)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    i = {
        ready: function() {
            var t, i = this, o = i._controller.getWidgetsByName("Main"), n = i.getElement().getElementsByClassName("ask-question")[0];
            if (1 == o.length)
                t = o[0];
            else
                for (var r = 0; r < o.length; r++)
                    if (o[r].settings && "questions" == o[r].settings.mode) {
                        t = o[r];
                        break
                    }
            if (t && n) {
                var s = function() {
                    var i = t.getElement()
                      , o = i.getElementsByClassName("write-question-button")[0];
                    return e.simulateClickEvent(o),
                    i.scrollIntoView(),
                    t.get("forms").questions.getElement().scrollIntoView(),
                    t.get("tabs") ? t.get("tabs").getTab("questions") && t.get("tabs").getTab("questions").focus() : i.focus(),
                    !1
                };
                n.onclick = s,
                e.onEnterKeyDown(n, s)
            }
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.ShoppableGallery = function(e) {
    function t(t, o) {
        var n = this;
        n._controller = t,
        n.element = o,
        n.analyticsCategory = "shoppable_instagram";
        var r = t.getUserSetting("shoppable_instagram")
          , s = {};
        r && (s = r.settings.settings),
        sessionStorage.getItem("yotpoPresetShoppableState") === R && (s.preset_shoppable_state = R,
        n.shoppableState = R,
        n.imageId = sessionStorage.getItem("yotpoPresetImageId")),
        s.demo = o.getAttribute("data-demo"),
        s.only_tagged_images = !0,
        s.source = ["instagram"],
        s.album_name = W;
        var a = n.element.getAttribute("data-no-shoppable-header");
        s.header = {
            enabled: "" === a ? !1 : null === a || !JSON.parse(a)
        },
        s.shop_owner_details = !0,
        s.per_page = 30,
        s.product_scores = !0,
        s.yotpo_hosted_page = "" === n.element.getAttribute("data-yotpo-hosted-page") ? !0 : !1,
        s.css_settings_class = "yotpo-shoppable-instagram",
        n.settings = s,
        this.imagesHandler = new e.ImagesHandler(t.appKey,this);
        for (var l in Y)
            Y.hasOwnProperty(l) && n.on(l, Y[l]);
        t.on("CssReady", function() {
            this.cssReady = !0,
            n.cssReadyCalled || i.bind(n)()
        })
    }
    function i() {
        this.cssReadyCalled = !0;
        var e = this.imagesHandler.lazyLoadingHandler;
        !e.loadImagesCalled && e.loadCallbacks && e.loadImages(!0)
    }
    function o() {
        var t = this.element.querySelector(".yotpo-redirect");
        if (t) {
            var i = this.element.getAttribute("data-empty-redirect-url");
            return void (i && e.redirectToUrl(i))
        }
        history.pushState({}, {}, null),
        this.container = this.element.querySelector(".yotpo-shoppable-gallery-images-wrapper"),
        this.imageDimensions = {},
        this.fullScreenImageID = void 0,
        this.fullScreenImagesDimensions = {},
        this.displayWrapper = this.element.querySelector(".yotpo-display-wrapper"),
        this.headerElement = this.element.querySelector(".yotpo-shoppable-header"),
        this.shopImageElement = this.headerElement.querySelector("img.shop-image"),
        this.shopImagePlaceholderElement = this.headerElement.querySelector(".shop-image-placeholder"),
        this.currentShopImageElement = this.shopImageElement,
        this.headerWrapperElement = this.element.querySelector(".yotpo-shoppable-gallery-header-wrapper"),
        this.backArrow = this.element.querySelector(".yotpo-icon-left-arrow-thin"),
        n.call(this),
        this.singleViewContainer = this.element.querySelector(".yotpo-shoppable-single-view-container"),
        this.singleViewWrapper = this.element.querySelector(".yotpo-shoppable-single-image-wrapper"),
        this.galleryContainer = this.element.querySelector(".yotpo-shoppable-gallery-wrapper"),
        H.call(this),
        this.loader = this.element.querySelector(".yotpo-image-loader.yotpo-pictures-gallery-fullpage-loader"),
        this.imageStatsContainer = this.element.querySelector(".yotpo-shoppable-stats"),
        this.imageSalesTextElement = this.element.querySelector(".yotpo-shoppable-sales"),
        this.imageSalesElement = this.element.querySelector(".yotpo-shoppable-sales-count"),
        this.imageLikesElement = this.element.querySelector(".yotpo-shoppable-likes-count"),
        this.taggedProductsContainer = this.element.querySelector(".yotpo-shoppable-tagged-products-container"),
        this.analyticsTracker = new e.AnalyticsTracker(this.analyticsCategory,{}),
        this.imagesAnalyticsHandler = new e.ImagesAnalyticsHandler(this.element,this.analyticsTracker),
        this.brokenImageDescriptors = [],
        this.imagesHandler.loadImages(c.bind(this), m, s.bind(this)),
        f(this)
    }
    function n() {
        this.settings.header.enabled ? this.galleryHeader = !0 : (e.addClass(this.headerElement, "yotpo-hidden"),
        M.call(this),
        this.galleryHeader = !1),
        this.shopImageElement.onerror = h.bind(this),
        r.call(this)
    }
    function r() {
        var e = window.getComputedStyle(document.body, null).getPropertyValue("margin");
        this.headerElement.style.marginTop = "-" + e,
        this.headerElement.style.marginRight = "-" + e,
        this.headerElement.style.marginLeft = "-" + e
    }
    function s(e, t) {
        a.call(this, e, t),
        l.call(this, e) && E.call(this, e)
    }
    function a(e, t) {
        this.imageDimensions[e] = {
            width: t.width,
            height: t.height
        },
        this.fullScreenImagesDimensions[e] = p.call(this, e)
    }
    function l(e) {
        var t = this.fullScreenImageID === e;
        return this.imageId === e && this.shoppableState === R && !t
    }
    function c() {
        d.call(this)
    }
    function d() {
        this.shoppableState === R && this.fullScreenImageID !== this.imageId && history.back()
    }
    function u() {
        for (var e in this.imageDimensions)
            this.fullScreenImagesDimensions[e] = p.call(this, e);
        g.call(this)
    }
    function p(e) {
        var t = this.imageDimensions[e]
          , i = window.innerWidth || screen.width
          , o = Math.min(i, B);
        return {
            width: o,
            height: Math.ceil(t.height * o / t.width)
        }
    }
    function g() {
        var e = this.singleViewContainer.querySelector(".yotpo-shoppable-image-container");
        if (this.fullScreenImageID && this.fullScreenImagesDimensions) {
            var t = this.fullScreenImagesDimensions[this.fullScreenImageID].height;
            e.style.height = t + "px"
        }
    }
    function h() {
        e.hide(this.shopImageElement),
        e.show(this.shopImagePlaceholderElement),
        this.currentShopImageElement = this.shopImagePlaceholderElement
    }
    function m(e, t) {
        var i = {
            id: t,
            url: e.src,
            errorType: e.errorType,
            source: "instagram",
            reported: !1
        };
        e.brokenImageDescriptors.push(i)
    }
    function f(t) {
        b.call(t),
        t.endlessScroller = new e.Modules.InviewEndlessScroll(t.settings.per_page,t._controller,t.loader,y.bind(t),t.loadIndicator),
        t.imageContainers.length >= t.settings.per_page && e.removeClass(t.loader, "yotpo-hidden")
    }
    function y() {
        var e = this.settings;
        e.offset = {
            instagram: this.endlessScroller.per_page * this.endlessScroller.page
        },
        e.widget = "shoppable_gallery",
        this.endlessScroller.getNextPage({
            method: "partial_shoppable_gallery",
            params: e
        }, v.bind(this))
    }
    function v(t) {
        var i = this.element.querySelector(".yotpo-shoppable-single-image-contents")
          , o = JSON.parse(t)[0].result
          , n = document.createElement("div");
        n.insertAdjacentHTML("beforeend", o);
        var r = n.querySelector(".yotpo-pictures-gallery-images-wrapper")
          , a = n.querySelector(".yotpo-shoppable-single-image-contents")
          , l = r.childElementCount;
        e.appendChildElements(r, this.container),
        e.appendChildElements(a, i),
        H.call(this),
        this.imagesHandler.loadImages(null, m, s.bind(this)),
        A.call(this),
        l < this.settings.per_page && e.addClass(this.loader, "yotpo-hidden")
    }
    function b() {
        this.shoppableState = this.settings.preset_shoppable_state || O,
        w.call(this),
        N.call(this)
    }
    function w() {
        var t = this;
        this.backArrow && (e.addEventListener(this.backArrow, "click", _.bind(this)),
        e.addEventListener(this.headerElement.querySelector(".yotpo-icon-grid"), "click", _.bind(this))),
        A.call(this),
        e.addEventListener(window, "scroll", function() {
            window.innerHeight < t.element.clientHeight - 10 && (document.body.scrollTop - 1 >= t.headerElement.offsetTop ? (0 === t.headerWrapperElement.offsetTop && (e.addClass(t.galleryContainer, "yotpo-relative-wrapper"),
            e.addClass(t.singleViewWrapper, "yotpo-relative-wrapper")),
            e.addClass(t.headerWrapperElement, "yotpo-fixed-header")) : document.body.scrollTop - 1 < t.headerElement.offsetTop && (e.removeClass(t.galleryContainer, "yotpo-relative-wrapper"),
            e.removeClass(t.singleViewWrapper, "yotpo-relative-wrapper"),
            e.removeClass(t.headerWrapperElement, "yotpo-fixed-header")))
        }),
        e.addEventListener(window, "unload", function() {
            sessionStorage.setItem("yotpoPresetShoppableState", t.shoppableState),
            sessionStorage.setItem("yotpoPresetImageId", t.imageId)
        }),
        e.addEventListener(window, "popstate", S.bind(t))
    }
    function _() {
        history.back()
    }
    function S() {
        this.shoppableState === R && (C.call(this),
        P.call(this),
        window.scrollTo(0, this.imageOffset),
        this.productsSlider && this.productsSlider.destroy())
    }
    function C() {
        var t = this.element.querySelector(".yotpo-shoppable-image");
        t.removeAttribute("src"),
        e.removeEventListener(t, "click", this.imageClickCallback)
    }
    function A() {
        for (var t = this, i = this.imageContainers, o = 0; o < i.length; o++) {
            var n = i[o].querySelector(".y-image-overlay.yotpo-new-image");
            n && (e.removeClass(n, "yotpo-new-image"),
            e.addEventListener(n, "click", function() {
                t.imageOffset = document.body.scrollTop,
                t.imageId = this.getAttribute("data-external-image-id"),
                history.pushState({}, {}, null),
                E.call(t, t.imageId)
            }))
        }
    }
    function E(t) {
        this.fullScreenImageID = t;
        var i = L.call(this)
          , o = i.taggedProducts.length > 1;
        T.call(this),
        k.call(this, i.imageUrl),
        this.productsSlider = new e.ShoppableProductsSlider(this._controller,this.analyticsTracker,this.taggedProductsContainer),
        x.call(this, i.taggedProducts),
        o || I.call(this, i.taggedProducts[0]),
        this.displayWrapper.scrollIntoView(),
        D.call(this, i.taggedProducts, i.imageId)
    }
    function k(e) {
        g.call(this);
        var t = this.singleViewContainer.querySelector(".yotpo-shoppable-image");
        t.style.opacity = "0",
        t.src = e,
        t.onload = function() {
            this.style.opacity = "1"
        }
    }
    function x(t) {
        var i = this.singleViewContainer.querySelector(".yotpo-shoppable-title")
          , o = i.querySelector(".yotpo-clickable-title")
          , n = this.singleViewContainer.querySelector(".yotpo-shoppable-image")
          , r = this.settings.star_rating.enabled
          , s = this.settings.cta.enabled ? this.settings.cta.text : {}
          , a = this.settings.promoted_products.enabled;
        this.productsSlider.showElement(t, r, s, a, this.imageId),
        o.removeAttribute("href"),
        e.removeClass(n, "yotpo-clickable"),
        e.addClass(i, "yotpo-hidden")
    }
    function I(t) {
        var i = this
          , o = this.singleViewContainer.querySelector(".yotpo-shoppable-title")
          , n = o.querySelector(".yotpo-clickable-title")
          , r = this.singleViewContainer.querySelector(".yotpo-shoppable-image")
          , s = t.link;
        o.querySelector(".yotpo-shoppable-product-image").src = t.imageUrl,
        o.querySelector(".yotpo-shoppable-product-name").innerHTML = t.name,
        n.href = s,
        e.addEventListener(n, "click", function() {
            i.analyticsTracker.track("clicked_on", "shop_now")
        }),
        e.addEventListener(r, "click", function() {
            i.analyticsTracker.track("clicked_on", "single_image")
        }),
        this.imageClickCallback = e.redirectToUrl.bind(null, s),
        e.addEventListener(r, "click", this.imageClickCallback),
        e.addClass(r, "yotpo-clickable"),
        e.removeClass(o, "yotpo-hidden")
    }
    function P() {
        this.shoppableState = O,
        this.galleryHeader || e.addClass(this.headerElement, "yotpo-hidden"),
        q.call(this),
        this.imageStatsContainer.style.opacity = "0",
        e.addClass(this.singleViewContainer, "yotpo-hidden"),
        e.removeClass(this.galleryContainer, "yotpo-hidden"),
        e.hasClass(this.loader, "display-on-gallery-view") && e.removeClass(this.loader, "yotpo-hidden")
    }
    function T() {
        this.shoppableState = R,
        this.galleryHeader || e.removeClass(this.headerElement, "yotpo-hidden"),
        q.call(this),
        e.hasClass(this.loader, "yotpo-hidden") || (e.addClass(this.loader, "display-on-gallery-view"),
        e.addClass(this.loader, "yotpo-hidden")),
        e.addClass(this.galleryContainer, "yotpo-hidden"),
        e.removeClass(this.singleViewContainer, "yotpo-hidden")
    }
    function q() {
        this.galleryHeader && (this.shoppableState === O ? F.call(this) : this.shoppableState === R && M.call(this))
    }
    function F() {
        var t = this.headerElement.querySelector(".yotpo-shoppable-gallery-header-reviews-wrapper");
        t && e.removeClass(t, "yotpo-hidden"),
        e.show(this.currentShopImageElement),
        e.removeClass(this.headerElement.querySelector(".yotpo-shoppable-gallery-title"), "yotpo-hidden"),
        e.addClass(this.backArrow, "yotpo-hidden"),
        e.addClass(this.headerElement.querySelector(".yotpo-icon-grid"), "yotpo-hidden")
    }
    function M() {
        var t = this.headerElement.querySelector(".yotpo-shoppable-gallery-header-reviews-wrapper");
        t && e.addClass(t, "yotpo-hidden"),
        e.hide(this.currentShopImageElement),
        e.addClass(this.headerElement.querySelector(".yotpo-shoppable-gallery-title"), "yotpo-hidden"),
        e.removeClass(this.backArrow, "yotpo-hidden"),
        e.removeClass(this.headerElement.querySelector(".yotpo-icon-grid"), "yotpo-hidden")
    }
    function L() {
        var e = this.element.querySelector(".yotpo-shoppable-content-" + this.fullScreenImageID)
          , t = e.querySelector(".yotpo-image")
          , i = {};
        i.imageUrl = t.getAttribute("data-image-url"),
        i.imageId = t.getAttribute("data-image-id"),
        i.taggedProducts = [];
        for (var o = e.querySelectorAll(".yotpo-tagged-product"), n = 0; n < o.length; n++)
            i.taggedProducts[n] = {
                id: o[n].getAttribute("data-tagged-product-id"),
                domainKey: o[n].getAttribute("data-tagged-product-domain-key"),
                name: o[n].getAttribute("data-tagged-product-name"),
                link: o[n].getAttribute("data-tagged-product-link"),
                imageUrl: o[n].getAttribute("data-tagged-product-image-url"),
                score: o[n].getAttribute("data-tagged-product-score"),
                reviewsCount: o[n].getAttribute("data-tagged-product-reviews-count")
            };
        return i
    }
    function H() {
        this.imageContainers = this.container.querySelectorAll(".yotpo-single-image-container")
    }
    function N() {
        this.imagesAnalyticsHandler.bindAnalyticsForloadedImages(this.imageContainers)
    }
    function D(t, i) {
        for (var o = [], n = 0; n < t.length; n++)
            o.push(t[n].id);
        var r = [{
            method: "shoppable_image_stats",
            params: {
                product_ids: o,
                image_id: i
            },
            format: "json"
        }];
        this._controller.getBatch(function(t) {
            var i = JSON.parse(t);
            i = i[0].result,
            i.sales > 10 && !this.settings.hide_sales ? (e.removeClass(this.imageSalesTextElement, "yotpo-hidden"),
            e.removeClass(this.imageSalesElement, "yotpo-hidden"),
            this.imageSalesElement.innerHTML = i.sales) : (e.addClass(this.imageSalesTextElement, "yotpo-hidden"),
            e.addClass(this.imageSalesElement, "yotpo-hidden")),
            this.imageLikesElement.innerHTML = i.likes,
            this.imageStatsContainer.style.opacity = "1"
        }
        .bind(this), r)
    }
    var Y = {}
      , B = 768
      , O = "gallery"
      , R = "single_image"
      , W = "Shoppable Instagram";
    return t.selector = e.widgets["shoppable-gallery"].selector,
    t.prototype.getMethod = function() {
        return "shoppable_gallery"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    t.prototype.getImageElements = function() {
        return this.imageContainers
    }
    ,
    Y = {
        ready: function() {
            o.call(this)
        },
        resize: function() {
            u.call(this),
            this.productsSlider && this.productsSlider.adjustSize()
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.ShoppersSay = function(e) {
    function t(t, i) {
        var o = this;
        o._controller = t,
        o.element = i,
        o.settings = {},
        o.moreReviewsClicked = !1;
        var n, r = o._controller.getUserSetting("shoppers_say");
        r && (n = r.settings),
        o.settings.title = l(o, "data-title", n, "title", !0),
        o.settings.product_id = l(o, "data-product-id"),
        o.settings.demo = l(o, "data-demo"),
        e.isMobile() ? o.settings.maximum_reviews_mobile = l(o, "data-maximum-reviews-mobile", n, "max_sentences_mobile", !0) : o.settings.maximum_reviews_desktop = l(o, "data-maximum-reviews-desktop", n, "max_sentences_desktop", !0);
        for (var s in c)
            c.hasOwnProperty(s) && o.on(s, c[s])
    }
    function i(e) {
        return '"' == e.charAt(0) && (e = e.substring(1, e.length)),
        '"' == e.charAt(e.length - 1) && (e = e.substring(0, e.length - 1)),
        "..." == e.substring(e.length - 3, e.length) && (e = e.substring(0, e.length - 3)),
        e
    }
    function o() {
        var e = this
          , t = e._controller.getUserSetting("shoppers_say");
        if (t !== !1) {
            var i = e.element.getElementsByClassName("shoppers-say-display-wrapper");
            if (i.length) {
                var o = i[0]
                  , l = o.getElementsByClassName("more-reviews");
                s(e, l);
                var c = o.getElementsByClassName("sentence-wrapper");
                a(e, c),
                r(o);
                var d = o.getElementsByClassName("sentence-collapsed");
                n(e.settings.demo, d)
            }
        }
    }
    function n(e, t) {
        e && "true" === e && t.length > 1 && t[1].click()
    }
    function r(t) {
        var i = t.getElementsByClassName("single-best-sentence").length
          , o = "true" === t.getAttribute("data-met-requirements")
          , n = !o || "true" === t.getAttribute("data-is-dummy");
        e.currentAnalytics.trackEvent("shoppers_say", n ? "loaded_dummy" : "loaded", null, null, {
            met_requirements: o,
            quotes_count: n ? "y" : i
        }),
        e.currentInview.register(t, function() {
            e.currentAnalytics.trackEvent("shoppers_say", n ? "shown_dummy" : "shown", null, null, {
                met_requirements: o,
                quotes_count: n ? "y" : i
            })
        })
    }
    function s(t, i) {
        for (var o = 0; o < i.length; o++)
            i[o].onclick = function(i) {
                t.moreReviewsClicked = !0,
                i.stopPropagation(),
                e.scrollToReviewsTabInMainWidget(t._controller, !0)
            }
    }
    function a(e, t) {
        for (var i = 0; i < t.length; i++)
            t[i].onclick = function(t) {
                e.trigger("toggleFullReview", t)
            }
    }
    function l(e, t, i, o, n) {
        var r = e.element.getAttribute(t);
        return r ? r : n && i ? i[o] : void 0
    }
    var c = {};
    return t.prototype.getMethod = function() {
        return "shoppers_say"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.selector = e.widgets["shoppers-say"].selector,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    c = {
        ready: function() {
            var e = this;
            o.call(e)
        },
        toggleFullReview: function(t) {
            var o = t.currentTarget
              , n = e.Modules.Helper.findAncestorByClass(o, "single-best-sentence")
              , r = n.getElementsByClassName("sentence-expanded")[0]
              , s = n.getElementsByClassName("sentence-collapsed")[0]
              , a = n.getElementsByClassName("no-review-background")[0]
              , l = o.classList.contains("sentence-collapsed") ? !0 : !1;
            if (l) {
                var c = s.getElementsByClassName("sentence");
                if (c.length > 0) {
                    var d = i(c[0].textContent);
                    e.currentAnalytics.trackEvent("shoppers_say", "clicked_on", null, d)
                }
            }
            var u = l ? r : s;
            e.addClass(o, "yotpo-hidden"),
            e.Animations.fadeIn(u, 1e3),
            null !== a && void 0 !== a && e.toggleAttribute(a, "aria-expanded")
        }
    },
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.SingleVideo = function(e) {
    function t(e, t) {
        var i = this;
        i._controller = e,
        i.element = t,
        i.settings = {};
        for (var n in o)
            o.hasOwnProperty(n) && i.on(n, o[n])
    }
    function i() {
        var e = this.getElement()
          , t = e.querySelector(".yotpo-video-container")
          , i = this._controller.appKey;
        t.onclick = function() {
            n.playing || n.ready(i, e)
        }
    }
    var o = {};
    t.prototype.getMethod = function() {
        return "Video"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.selector = e.widgets["single-video"].selector,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    o = {
        ready: function() {
            var e = this.getElement().querySelector("#video");
            e && i.call(this)
        }
    };
    var n = {
        ready: function(e, t) {
            this.container = t,
            this.appKey = e,
            this.playing = !1,
            this.me = "_" + Math.random().toString(36).substr(2, 9),
            this.room = new Room({
                signalServer: "wss://live.yotpo.com/signal/_/",
                me: this.me,
                iceServers: [{
                    urls: ["stun:stun.lawsroom.com:3478"]
                }, {
                    urls: "turn:stun.lawsroom.com:3478",
                    username: "yiquganchangduan",
                    credential: "tianyahechumizhiyin"
                }, {
                    urls: "turn:stun.lawsroom.com:3478?transport=tcp",
                    username: "yiquganchangduan",
                    credential: "tianyahechumizhiyin"
                }, {
                    urls: "turn:stun.lawsroom.com:3478?transport=udp",
                    username: "yiquganchangduan",
                    credential: "tianyahechumizhiyin"
                }]
            }),
            this.room.on("signal_open", this.signal_open.bind(this)),
            this.room.on("signal_close", this.signal_close.bind(this)),
            this.room.on("signal_error", this.signal_error.bind(this)),
            this.room.on("peer_open", this.peer_open.bind(this)),
            this.room.on("peer_close", this.peer_close.bind(this)),
            this.room.on("channel_open", this.channel_open.bind(this)),
            this.room.on("channel_message", this.channel_message.bind(this)),
            this.room.on("channel_close", this.channel_close.bind(this)),
            this.room.on("message_create", this.message_create.bind(this)),
            this.room.on("message_join", this.message_join.bind(this)),
            this.room.on("message_leave", this.message_leave.bind(this)),
            this.room.on("message_notice", this.message_notice.bind(this)),
            this.room.on("stream_add", this.stream_add.bind(this)),
            this.room.on("stream_remove", this.stream_remove.bind(this)),
            this.room["in"]()
        },
        signal_open: function() {
            n.join(this.appKey)
        },
        signal_close: function() {},
        signal_error: function() {},
        peer_open: function() {},
        peer_close: function(e) {
            this.removeVideo(e)
        },
        channel_open: function() {},
        channel_message: function() {},
        channel_close: function() {},
        message_create: function() {},
        message_join: function() {},
        message_leave: function() {
            this.removeVideos()
        },
        message_notice: function(e) {
            "string" == typeof e.Data && ("room_exists" === e.Data && this.room.join(this.roomId),
            "room_full" === e.Data)
        },
        stream_add: function(e, t) {
            this.addVideo(e, t)
        },
        stream_remove: function(e) {
            this.removeVideo(e)
        },
        addVideo: function(t, i) {
            var o = this.container.querySelector("#video");
            o.src = URL.createObjectURL(i),
            o.play(),
            this.playing = !0,
            o.ontimeupdate = function() {
                var t = parseInt(o.currentTime, 10)
                  , i = Math.floor(t / 3600)
                  , n = Math.floor((t - 3600 * i) / 60)
                  , r = t - 3600 * i - 60 * n;
                10 > i && (i = "0" + i),
                10 > n && (n = "0" + n),
                10 > r && (r = "0" + r),
                e.getDocElement().querySelector(".live-duration").innerHTML = i + ":" + n + ":" + r
            }
        },
        removeVideo: function() {
            var e = this.container.querySelector("#video");
            e.stop()
        },
        join: function(e) {
            this.playing || (this.roomId = e,
            this.room.create(e))
        },
        leave: function() {
            this.room.leave()
        },
        send: function() {}
    };
    return t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Slider = function(e) {
    function t(t, o) {
        var n = this;
        n.analyticsContext = {
            layout: "carousel"
        },
        n._controller = t,
        n.videoScriptLoaded = !1,
        this.imageHandler = new e.ImagesHandler(t.appKey,this),
        n.isRTL = "rtl" == t.userSettings.direction,
        n.element = o;
        var r = t.getUserSetting("pictures_slider");
        n.settings = {
            widget_name: "slider",
            product_id: o.getAttribute("data-product-id"),
            demo: o.getAttribute("data-demo")
        };
        var s = new e.Modules.GallerySettings
          , a = t.getUserSetting("generic_gallery")
          , l = s.getGallerySettings(n.element);
        a && l && Object.assign(n.settings, l),
        r && (n.settings.use_full_width = "1" === String(r.settings.full_width),
        n.settings.auto_play = "1" === String(r.settings.auto_slide),
        n.settings.widget_ref_name = "visual_carousel_shop_now",
        n.settings.title = r.settings.slider_title,
        n.settings.source = r.settings.slider_source,
        n.settings.hover = r.settings.slider_hover,
        n.settings.per_page = r.settings.number_of_images || q,
        n.settings.sort = r.settings.sort),
        n.settings.product_id ? (n.show_tagged_products = !0,
        n.analyticsCategory = "pictures_widget",
        n.analyticsContext.album_type = "product") : (n.show_tagged_products = !0,
        n.analyticsCategory = "dedicated_page",
        n.analyticsContext.album_type = "custom"),
        this.gallerySettings = new e.Modules.GallerySettings,
        this.gallerySettings.overrideSettingsFromDiv(n.element, n.settings),
        n.analyticsContext.album_id = n.settings.album_id || "none",
        n.analyticsContext.gallery_id = n.settings.gallery_id || "none",
        n.analyticsContext.num_of_images_to_display = this.settings.layout.num_of_images_to_display,
        n.settings.images_to_display = this.calcDisplaySize(o, n.settings.use_full_width);
        for (var c in L)
            L.hasOwnProperty(c) && n.on(c, L[c]);
        var d = this;
        t.on("CssReady", function() {
            this.cssReady = !0,
            d.cssReadyCalled || i.bind(d)()
        })
    }
    function i() {
        this.cssReadyCalled = !0;
        var e = this.imageHandler.lazyLoadingHandler;
        !e.loadImagesCalled && e.loadCallbacks && e.loadImages(!0)
    }
    function o(e, t) {
        var i;
        return i = F >= t ? M.LOW_CHOICE_RANGE[e] : M.HIGH_CHOICE_RANGE[e],
        Math.min(t, i)
    }
    function n(e, t) {
        var i = e.offsetWidth / k
          , o = t ? Math.ceil(i) : Math.floor(i);
        return Math.max(o, P)
    }
    function r(e, t) {
        for (var i = 0; i < e.length; i++)
            if (e[i].getAttribute(T) == t.getAttribute(T))
                return !0;
        return !1
    }
    function s() {
        for (var e = [], t = a.call(this); t < this.elements.length; ++t) {
            var i = this.elements[t].querySelector(".y-image-overlay");
            r(e, i) || e.push(i)
        }
        return e
    }
    function a() {
        return this.displaySize >= this.originalNumOfImages ? 0 : this.displaySize + 1
    }
    function l() {
        e.hide(this.querySelector(".yotpo-icon"))
    }
    function c() {
        e.show(this.querySelector(".yotpo-icon"))
    }
    function d() {
        var t = this.leftArrow && this.rightArrow;
        if (this.settings.show_arrows_only_on_hover && t) {
            var i = this.element.querySelector(".arrows-wrapper-left")
              , o = this.element.querySelector(".arrows-wrapper-right");
            e.addClass(this.leftArrow, "yotpo-hidden"),
            e.addClass(this.rightArrow, "yotpo-hidden"),
            i.style.width = o.style.width = this.element.offsetWidth / this.displaySize / 2 + "px",
            e.addEventListener(i, "mouseover", function() {
                c.call(this)
            }),
            e.addEventListener(i, "mouseleave", function() {
                l.call(this)
            }),
            e.addEventListener(o, "mouseover", function() {
                c.call(this)
            }),
            e.addEventListener(o, "mouseleave", function() {
                l.call(this)
            })
        }
    }
    function u() {
        var t = this
          , i = this.element.querySelector(".yotpo-lightbox-wrapper")
          , o = this.element.querySelector(".yotpo-lightbox-contents")
          , n = i.querySelector(".yotpo-lightbox");
        if (n) {
            var r = s.call(this)
              , a = new e.SliderContentProvider(r,o,this.show_tagged_products,t.analyticsCategory + "_popup",t.settings.gallery_id || "none")
              , l = new e.AnalyticsTracker(this.analyticsCategory + "_popup",this.analyticsContext);
            this.lightbox = new e.Widgets.Lightbox(this._controller,n,a,l,i);
            for (var c = 0; c < this.elements.length; ++c) {
                var d = this.elements[c].querySelector(".y-image-wrapper");
                e.addEventListener(d, "click", function() {
                    t.lightbox.open(this.querySelector(".y-image-overlay"))
                })
            }
        }
    }
    function p() {
        this.settings.gid || (this._controller.userSettings.generic_gallery = !1),
        this.sliderWrapper = this.element.querySelector(".yotpo-slider-wrapper"),
        e.setHoverEnable(this.sliderWrapper),
        this.displayWrapper = this.element.querySelector(".yotpo-display-wrapper.yotpo-slider"),
        this.container = this.element.querySelector(".y-slider-container"),
        this.container && (e.Flows.UploadButton.initUploadButton(this._controller, this.element, this.settings, this.analyticsContext),
        this.elements = this.container.querySelectorAll(".yotpo-single-image-container"),
        this.elements.length <= 0 || (this.leftArrow = this.displayWrapper.querySelector(".yotpo-icon-left-arrow-light"),
        this.rightArrow = this.displayWrapper.querySelector(".yotpo-icon-right-arrow-light"),
        this.originalNumOfImages = parseInt(this.displayWrapper.getAttribute("data-images"), 10),
        this.displaySize = this.calcDisplaySize(this.displayWrapper, this.settings.use_full_width, this.settings.layout_size),
        this.analyticsTracker = new e.AnalyticsTracker(this.analyticsCategory,this.analyticsContext),
        this.imagesAnalyticsHandler = new e.ImagesAnalyticsHandler(this.element,this.analyticsTracker),
        this.brokenImageDescriptors = [],
        e.isMobile() || this.settings.is_preview || d.call(this),
        this._controller.userSettings && this._controller.userSettings.video_support && (this.videoPlayerLoader = new e.VideoPlayerLoader(this,this._controller.userSettings.video_support.settings),
        this.videoPlayerLoader.checkAndUpdateIfHasVideo() && (this.videoScriptLoaded = this.videoPlayerLoader.loadKalturaScript())),
        y.call(this),
        f.call(this),
        this.imageHandler.loadImages(m, h, g)))
    }
    function g(e, t, i) {
        i.imageHandler.handleMediaAfterLoad(e, t),
        i.imageHandler.adjustImageHoverStyle()
    }
    function h(e, t) {
        var i = {
            id: t,
            source: e.imageHandler.getImageSource(t),
            url: e.src,
            errorType: e.errorType,
            reported: !1
        };
        e.brokenImageDescriptors.push(i)
    }
    function m(e) {
        e.brokenImageDescriptors.length > 0 && e.imageHandler.replaceBrokenImages(e.brokenImageDescriptors),
        C.call(e),
        e.imageHandler.verifyKalturaLoad()
    }
    function f() {
        b.call(this),
        this.sliderWrapper.style.maxWidth = w.call(this);
        var t = this.settings.auto_play;
        this._controller.userSettings.generic_gallery && (t = this.gallerySettings.getGallerySettings(this.element).layout.auto_slide),
        this.slide = new e.Modules.Slide(this.container,{
            imageCount: this.originalNumOfImages,
            displayWindowCount: this.displaySize,
            useOffset: this.displaySize < this.elements.length,
            delayInterval: I,
            autoSlide: t,
            slideDirection: this.isRTL ? "left" : "right",
            rtl: this.isRTL,
            loadCallbacks: {
                onFinish: m,
                onLoadError: h,
                onLoad: g
            },
            widgetParams: this
        }),
        this.slide.onSlide(E),
        this.slide.start(),
        S.call(this)
    }
    function y() {
        if (this.settings.load_lightbox_sync)
            u.call(this);
        else {
            var e = {};
            e = this._controller.userSettings.generic_gallery ? {
                method: "generic_lightbox_container",
                params: this.getSettings()
            } : {
                method: "lightbox_container",
                params: this.getSettings()
            },
            this._controller.getBatch(v.bind(this), [e], null)
        }
    }
    function v(e) {
        var t = JSON.parse(e)[0];
        t && (this.element.insertAdjacentHTML("afterbegin", t.result),
        u.call(this))
    }
    function b() {
        var e = this.elements.length;
        this.displaySize <= e && (this.container.style.width = 100 / this.displaySize * e + "%");
        for (var t = 100 / e + "%", i = "undefined" == typeof this.settings.layout.spacing ? 5 : this.settings.layout.spacing, o = 0; e > o; ++o)
            this.elements[o].style.width = "calc(" + t + " - " + i + "px)"
    }
    function w() {
        var t = x;
        if (!e.isIE8) {
            var i, o = this.elements[0], n = "undefined" == typeof this.settings.layout.spacing ? 5 : this.settings.layout.spacing;
            i = this.settings.num_of_images_to_display ? "none" : parseInt(e.getComputedStyle(o, "max-width").replace("px", ""), 10),
            t = i + n
        }
        return t * this.displaySize + "px"
    }
    function _(t) {
        var i = this;
        e.addEventListener(t, "mouseover", function() {
            i.slide.pause()
        }),
        e.addEventListener(t, "mouseout", function() {
            i.slide.play()
        })
    }
    function S() {
        var e = this;
        this.leftArrow && (this.leftArrow.onclick = function() {
            e.slide.left()
        }
        ,
        this.leftArrow.onkeypress = function() {
            e.slide.left()
        }
        ,
        _.call(this, this.leftArrow)),
        this.rightArrow && (this.rightArrow.onclick = function() {
            e.slide.right()
        }
        ,
        this.rightArrow.onkeypress = function() {
            e.slide.right()
        }
        ,
        _.call(this, this.rightArrow));
        for (var t = 0; t < this.elements.length; ++t)
            _.call(this, this.elements[t])
    }
    function C() {
        this.imagesAnalyticsHandler.bindAnalyticsForloadedImages(this.elements),
        A.call(this)
    }
    function A() {
        var t = this;
        this.rightArrow && e.addEventListener(this.rightArrow, "click", function() {
            t.analyticsTracker.track("clicked_on", t.isRTL ? "widget_previous_image" : "widget_next_image", null)
        }),
        this.leftArrow && e.addEventListener(this.leftArrow, "click", function() {
            t.analyticsTracker.track("clicked_on", t.isRTL ? "widget_next_image" : "widget_previous_image", null)
        })
    }
    function E() {
        var e = this.getElement()
          , t = e.querySelectorAll(".y-image-wrapper");
        if (this.slide)
            for (var i = this.slide.position, o = i + this.slide.displayWindowCount, n = 0; n < t.length; n++)
                n >= i && o > n ? t[n].setAttribute("tabindex", 0) : t[n].removeAttribute("tabindex")
    }
    var k = 180
      , x = 185
      , I = 5e3
      , P = 3
      , T = "data-image-id"
      , q = 56
      , F = 6
      , M = {
        LOW_CHOICE_RANGE: {
            small: 2,
            medium: 4,
            large: 9
        },
        HIGH_CHOICE_RANGE: {
            small: 3,
            medium: 5,
            large: 9
        }
    }
      , L = {};
    return t.selector = e.widgets.slider.selector,
    t.prototype.getMethod = function() {
        return "Slider"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "new"
    }
    ,
    t.prototype.getImageElements = function() {
        return this.elements
    }
    ,
    t.prototype.calcDisplaySize = function(e, t, i) {
        var r = this.settings.layout.num_of_images_to_display;
        return i && r ? o(i, r) : n(e, t)
    }
    ,
    L = {
        ready: function() {
            p.call(this),
            E.call(this)
        }
    },
    t
}(Yotpo),
Yotpo.Widgets.VisualCarousel = function(e) {
    function t(t, o) {
        var n = 56
          , r = "UGC Gallery";
        e.Widgets.Slider.call(this, t, o),
        this.getMethod = function() {
            return "VisualCarousel"
        }
        ,
        this.analyticsCategory = "dedicated_page",
        self.analyticsContext = {
            layout: "carousel"
        };
        var s = t.getUserSetting("visual_carousel");
        this.settings.widget_name = "visual_carousel",
        this.settings.album_name = r,
        s && (this.settings.auto_play = "1" === String(s.settings.auto_slide),
        this.settings.title = s.settings.slider_title,
        this.settings.cta_text = s.settings.cta_text,
        this.settings.cta_color = s.settings.cta_color,
        this.settings.source = s.settings.slider_source,
        this.settings.css_settings_class = "yotpo-visual-carousel",
        this.settings.widget_ref_name = "visual_carousel_shop_now",
        this.settings.use_full_width = "1" === String(s.settings.full_width),
        this.settings.per_page = s.settings.number_of_images || n,
        this.settings.sort = s.settings.sort);
        var a = new e.Modules.GallerySettings;
        a.overrideSettingsFromDiv(this.element, this.settings),
        self.analyticsContext.album_id = this.settings.album_id || "none",
        self.analyticsContext.album_type = "custom",
        this.show_tagged_products = !0,
        this.settings.images_to_display = this.calcDisplaySize(o, this.settings.use_full_width);
        var l = this;
        t.on("CssReady", function() {
            this.cssReady = !0,
            l.cssReadyCalled || i.bind(l)()
        })
    }
    function i() {
        this.cssReadyCalled = !0;
        var e = this.imageHandler.lazyLoadingHandler;
        !e.loadImagesCalled && e.loadCallbacks && e.loadImages(!0)
    }
    return t.prototype = e.Widgets.Slider.prototype,
    t.selector = ".yotpo.yotpo-visual-carousel",
    t
}(Yotpo),
Yotpo.Widgets = Yotpo.Widgets || {},
Yotpo.Widgets.Testimonials = function(e) {
    function t(t, o) {
        var n = this;
        n.analyticsCategory = "tab",
        n._controller = t,
        n.element = o || i(),
        n.sources = {},
        n.settings = {},
        n.firstElementId = "testimonials-modal-dialog-starts",
        n.lastElementId = "testimonials-modal-dialog-ends",
        this.imagesHandler = new e.ImagesHandler(t.appKey,this),
        "yotpo-testimonials-custom-tab" == n.element.id ? (n.settings.per_page = 10,
        n.settings.type = "testimonials_custom_tab",
        delete b.resize,
        n.analyticsCategory = "reviews_dedicated_page") : n.settings.type = "testimonials",
        t.getWidgetByName("Main") && t.getWidgetByName("Main").getSettings().tags && (n.settings.tags = t.getWidgetByName("Main").getSettings().tags),
        n.element.getAttribute("data-product-readonly") ? n.settings["data-product-readonly"] = !0 : t.getWidgetByName("Main") && t.getWidgetByName("Main").getSettings()["product-readonly"] && (n.settings["data-product-readonly"] = !0),
        t.getWidgetByName("ShoppableGallery") && t.getWidgetByName("ShoppableGallery").getSettings().yotpo_hosted_page && (n.settings["hidden-widget"] = !0);
        var r = "undefined" != typeof t.getUserSetting("testimonials") ? t.getUserSetting("testimonials").settings : null
          , s = r && ("both" == r.show_tab ? r.default_tab : r.show_tab);
        if ("product_tab" == s) {
            var a = t.getWidgetByName("Main");
            null != a && (n.settings.pid = a.getSettings().pid)
        }
        for (var l in b)
            b.hasOwnProperty(l) && n.on(l, b[l])
    }
    function i() {
        var e = document.createElement("div");
        return e.className = "yotpo testimonials",
        document.body.appendChild(e),
        e
    }
    function o() {
        var t = this
          , i = t.getElement().getElementsByClassName("yotpo-testimonials-btn")[0]
          , o = t.getElement().getElementsByClassName("close")[0];
        t.button = i,
        t.content = e.getDocElement().querySelector("#" + i.getAttribute("href").substring(1));
        var n = function() {
            return e.currentAnalytics.trackUniqueEvent("tab", "clicked_on"),
            t.open(),
            !1
        }
          , r = function() {
            return t.close(),
            "undefined" != typeof t.get("form") && t.get("form").clean(),
            !1
        };
        i.onclick = n,
        e.mouseClickOnEnterKeyDown(i),
        o.onclick = r,
        e.mouseClickOnEnterKeyDown(o),
        e.loopKeyboardTabs(t.firstElementId, t.lastElementId);
        var s = t.content.getElementsByClassName("yotpo-modal-mask")[0];
        s && (s.onclick = o.onclick)
    }
    function n() {
        var t = this;
        t.tabs = new e.Tabs(t.getElement().getElementsByClassName("yotpo-nav")[0]),
        t.tabs.on("changed", function(e) {
            l.call(t, e)
        })
    }
    function r() {
        var t = e.getDocElement().querySelector("#testimonials-tab-product")
          , i = e.getDocElement().querySelector("#testimonials-tab-site");
        t && e.onKeyDown(t, function() {
            i && i.focus()
        }, [e.keyCodes.right, e.keyCodes.left]),
        i && e.onKeyDown(i, function() {
            t && t.focus()
        }, [e.keyCodes.right, e.keyCodes.left])
    }
    function s() {
        for (var t = this, i = t._controller.getWidgetByName("Main"), o = t.tabs.getTabs(), n = 0; n < o.length; ++n) {
            var r = o[n].getAttribute("data-content")
              , s = o[n].getAttribute("data-type")
              , l = o[n] == t.tabs.getActive();
            e.forEach(r.split(" "), function(o) {
                var n = a(o);
                if (n) {
                    var r = e.getDocElement().querySelector("#" + o)
                      , c = e.hasClass(r, "yotpo-reviews") ? "basic" : "bottomline"
                      , d = s + "-" + c;
                    t.sources[d] = new (e.Widgets[e.capitalize(c)])(t._controller,r),
                    "site" == s && (t.sources[d].settings.pid = "yotpo_site_reviews",
                    t.sources[d].settings.include_site_reviews = !0),
                    "product" == s && i && (t.sources[d].settings.pid = i.getSettings().pid),
                    t.sources[d].sourceType = s;
                    var u, g;
                    "site-basic" == d ? (u = e.getDocElement().querySelector("#yotpo-site-reviews-tab"),
                    g = e.getDocElement().querySelector("#yotpo-site-mobile-clear-filters")) : "product-basic" == d && (u = e.getDocElement().querySelector("#yotpo-product-reviews-tab"),
                    g = e.getDocElement().querySelector("#yotpo-product-mobile-clear-filters")),
                    u && (t.sources[d].reviewsContainerElement = u),
                    g && (t.sources[d].mobileClearFiltersBtnElem = g);
                    var f = t._controller.userSettings.review_with_pictures;
                    t.sources[d].reviewsWithPicturesEnabled = f && "1" === f.settings.testimonials_visible,
                    t.sources[d].settings.reference = "testimonials_widget_internal",
                    t.sources[d].settings.hide_custom_fields = !0,
                    t.sources[d].settings.per_page = t.getSettings().per_page,
                    t.sources[d].settings.type = t.getSettings().type,
                    t.sources[d].on("ready", function() {
                        p.call(t, t.sources[d]);
                        for (var i = this.element.querySelectorAll(".yotpo-video.thumbnail-player"), o = 0; o < i.length; o++)
                            t.imagesHandler.handleMediaAfterLoad(i[o].getAttribute("data-image-id"), this.element, !0);
                        this._controller.userSettings && this._controller.userSettings.video_support && (this.videoPlayerLoader = new e.VideoPlayerLoader(this,this._controller.userSettings.video_support.settings),
                        this.videoPlayerLoader.checkAndUpdateIfHasVideo() && (this.videoScriptLoaded = this.videoPlayerLoader.loadKalturaScript()))
                    }),
                    l && !t.sources[d].initialized && t._controller.userSettings.new_testimonials_widget_layout && m.call(t.sources[d], s),
                    t.sources[d].trigger("ready"),
                    t.sources[d].on("pageChanged", function() {
                        this.isFilteredReviews && (h.call(this, !0),
                        this.filtersManager.fetchPage(this.settings.page)),
                        setTimeout(function() {
                            e.scrollToTop(t.sources[d].getElement())
                        }, 300)
                    })
                }
            })
        }
    }
    function a(e) {
        return -1 !== e.search("yotpo-testimonials-site-reviews") || -1 !== e.search("yotpo-testimonials-product-reviews") || -1 !== e.search("yotpo-testimonials-site-bottomline") || -1 !== e.search("yotpo-testimonials-product-bottomline")
    }
    function l(t) {
        var i = this
          , o = t.element.getAttribute("data-type")
          , n = t.element.getAttribute("data-content");
        e.forEach(n.split(" "), function(t) {
            var n = a(t);
            if (n) {
                var r = e.getDocElement().querySelector("#" + t);
                if (!r.innerHTML.trim() || 0 == r.innerHTML.trim().length) {
                    var s = e.hasClass(r, "yotpo-reviews") ? "basic" : "bottomline"
                      , l = o + "-" + s;
                    i.sources[l].settings.is_bottomline_summary = !1,
                    i._controller.getUserSettings().new_testimonials_widget_layout && (i.sources[l].settings.is_bottomline_summary = !0),
                    i.sources[l].refresh(),
                    i.sources[l].on("ready", function() {
                        !this.initialized && i._controller.userSettings.new_testimonials_widget_layout && (e.Modules.Handle.write.call(i, "review"),
                        m.call(this, o));
                        var t = this.getElement().querySelector(".write-first-review-button");
                        return t ? void e.addEventListener(t, "click", function() {
                            var t = i.getElement().querySelector(".yotpo-modal-bottom-line .write-review-button");
                            e.simulateClickEvent(t)
                        }) : void u.call(this)
                    })
                }
            }
        });
        var r = i.getElement().querySelector("input[type=button]");
        "product" == o && "undefined" == typeof i.getActiveSource().getSettings().pid ? e.hide(r) : e.show(r);
        var s = i.getElement().querySelector(".write-review-wrapper");
        e.removeClass(s, "visible"),
        s.style.display = "none";
        for (var l = i.getElement().querySelectorAll(".yotpo-custom-tag-field"), c = 0; c < l.length; c++)
            "site" == o ? e.addClass(l[c], "yotpo-hidden") : e.removeClass(l[c], "yotpo-hidden")
    }
    function c() {
        var t = this
          , i = t.button.getAttribute("data-position")
          , o = function(e, t) {
            var i = {};
            if ("horizontal" == t) {
                var o = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                i.left = o / 2 - e.offsetWidth / 2 + "px"
            } else {
                var n = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                i.top = n / 2 - e.offsetHeight / 2 + "px"
            }
            i["z-index"] = 799;
            for (var r in i)
                i.hasOwnProperty(r) && (e.style[r] = i[r])
        };
        if (/MSIE/.test(navigator.userAgent)) {
            var n = parseInt(navigator.userAgent.toLowerCase().split("msie")[1].split(";")[0]);
            (n != document.documentMode || 9 > n && "horizontal" != i) && e.addClass(t.button, "use-image")
        }
        o(t.button, i),
        e.addEventListener(window, "resize", function() {
            o(t.button, i)
        })
    }
    function d() {
        var t = this.getElement().getElementsByClassName("yotpo-messages");
        t.length > 0 && (this.messages = new e.Messages(t))
    }
    function u() {
        for (var t, i = this, o = i.getElement().getElementsByClassName("product-link"), n = 0; t = o[n]; n++)
            e.addEventListener(t, "click", function() {
                var t = this.getAttribute("data-product-id");
                e.currentAnalytics.trackEvent("reviews", "clicked_on", "product_name", t)
            })
    }
    function p(t) {
        var i, o = this;
        i = "tab" == o.analyticsCategory ? o.analyticsCategory + "_popup" : o.analyticsCategory;
        var n = [];
        t.reviewsContainerElement && (n = t.reviewsContainerElement.querySelectorAll(".yotpo-review"));
        for (var r = [], s = 0; s < n.length; s++) {
            var a = n[s]
              , l = a.getAttribute("data-review-id");
            "0" != l && r.push(l),
            e.hoverAnalytics.register(a, function() {
                e.currentAnalytics.trackReview(this, i, "hovered")
            });
            var c = function(o) {
                return function() {
                    if (void 0 !== t.analyticsFilterId && 0 !== t.analyticsFilterId) {
                        var n = {
                            source: "filter_reviews",
                            filter_state_id: t.analyticsFilterId,
                            page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(t),
                            reviews_tab_type: t.sourceType
                        };
                        e.currentAnalytics.trackReview(o, i, "shown", n)
                    } else
                        e.currentAnalytics.trackReview(o, i, "shown", {
                            source: "reviews"
                        })
                }
            }(a);
            "reviews_dedicated_page" == i ? e.currentInview.register(a, c) : e.currentInview.registerinModal(a, c)
        }
        e.currentAnalytics.trackReviews(r, i, "loaded");
        var d = n.length - 1
          , u = d > 0 ? "has_reviews" : "no_reviews";
        e.currentAnalytics.trackUniqueEvent(o.analyticsCategory, "loaded", u),
        e.currentAnalytics.trackUniqueEvent(o.analyticsCategory, "shown"),
        e.hoverAnalytics.register(o.element, function() {
            e.currentAnalytics.trackUniqueEvent(o.analyticsCategory, "hovered")
        })
    }
    function g() {
        var t = this;
        for (var i in t.sources)
            if (-1 !== i.search("basic")) {
                var o = t.sources[i];
                e.Modules.Handle.desktopDropDown.call(o, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSelectSort, o.reviewsContainerElement, "sorting"),
                e.Modules.Handle.desktopDropDown.call(o, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSelectFilter, o.reviewsContainerElement, "filters-dropdown"),
                o.filtersManager = new e.FiltersStateManager(t._controller,"Testimonials",o.settings),
                o.filtersManager.subscribeToFiltersUpdate(t),
                o.mobileFiltersModal = new e.MobileFilterModal(o,o.reviewsContainerElement,e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onMobileFiltersSubmitted);
                var n = Array.from(o.reviewsContainerElement.querySelectorAll(".desktop-clear-all-btn"));
                o.mobileClearFiltersBtnElem && n.push(o.mobileClearFiltersBtnElem),
                o.clearAllButtons = n;
                for (var r = 0; r < o.clearAllButtons.length; r++)
                    !function(t) {
                        e.addEventListener(t.clearAllButtons[r], "click", function() {
                            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.clearAllFilters.call(t)
                        })
                    }(o);
                e.FreeTextSearch.bind.call(o, o.reviewsContainerElement, y, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onFreeTextSearchedCallBack, e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onClearTextSearchedCallBack)
            }
    }
    function h(t) {
        var i = this.element;
        e.SearchInProgress.switchMode(i.parentElement, t)
    }
    function m(t) {
        var i = this.getElement().querySelector(".total-reviews-search");
        if (i) {
            var o = i.getAttribute("total-reviews-search")
              , n = !1
              , r = !1;
            0 == o ? (n = !0,
            r = !0) : o < e.filterAndSearch.min_reviews_for_filters_container && (r = !0);
            var s = this.getElement().parentElement.querySelector("#yotpo-" + t + "-reviews-header");
            if (s)
                if (n)
                    e.hide(s);
                else {
                    var a = s.querySelector(".reviews-amount");
                    a && (a.innerHTML = o + " " + e.filterAndSearch.filtered_reviews_title)
                }
            if (r) {
                var l = this.getElement().parentElement.querySelector("#yotpo-" + t + "-reviews-filters");
                l && e.hide(l)
            } else
                f.call(this, o)
        }
        this.initialized = !0
    }
    function f(t) {
        e.FilterAndSearch.Analytics.AnalyticsNotifier.init.call(this);
        var i = {
            met_requirements: !0,
            desktop_topics_count: 0,
            desktop_suggested_topics: [],
            mobile_topics_count: 0,
            mobile_suggested_topics: [],
            custom_fields_count: 0,
            reviews_count: parseInt(t),
            metadata_fields_count: 0,
            free_text_included: this._controller.userSettings.testimonials.settings.display_free_text_filters,
            page_type: e.FilterAndSearch.Analytics.AnalyticsNotifier.getPageType.call(this)
        }
          , o = this;
        e.currentInview.register(this.reviewsContainerElement, function() {
            e.currentAnalytics.trackEvent("filter_reviews", "shown", o.settings.pid, null, i)
        }),
        e.currentAnalytics.trackEvent("filter_reviews", "loaded", this.settings.pid, null, i)
    }
    var y, v, b = {};
    return t.selector = e.widgets.testimonials.selector,
    t.createsElement = function(t) {
        return e.isMobile() ? !1 : "undefined" != typeof t.testimonials_tab && t.testimonials_tab !== !1
    }
    ,
    t.prototype.getMethod = function() {
        return "testimonials"
    }
    ,
    t.prototype.getSettings = function() {
        return this.settings
    }
    ,
    t.prototype.getElement = function() {
        return this.element
    }
    ,
    t.prototype.getTabs = function() {
        return this.tabs
    }
    ,
    t.prototype.getAppKey = function() {
        return this._controller.getAppKey()
    }
    ,
    t.prototype.get = function(e) {
        return this[e]
    }
    ,
    t.prototype.getActiveSource = function() {
        return this.sources[this.tabs.getActive().getAttribute("data-type") + "-basic"]
    }
    ,
    t.prototype.getProductInfo = function() {
        var t = this.tabs.getActive().getAttribute("data-type");
        if ("product" == t && "undefined" != typeof this.getActiveSource().getSettings().pid)
            for (var i = this._controller.getWidgets(), o = 0; o < i.length; ++o)
                if (i[o]instanceof e.Widgets.Main)
                    return i[o].getProductInfo();
        var n = this._controller.getUserSettings().account_settings.settings.name
          , r = this._controller.getUserSettings().account_settings.settings.domain
          , s = "my.yotpo.com" === window.location.host ? r : e.origin();
        return {
            sku: "yotpo_site_reviews",
            product_title: n,
            product_url: s,
            domain: s
        }
    }
    ,
    t.prototype.on = function(t, i) {
        e.Modules.Event.on.call(this, t, i)
    }
    ,
    t.prototype.trigger = function(t, i) {
        e.Modules.Event.trigger.call(this, t, i)
    }
    ,
    t.prototype.open = function() {
        var i = this;
        i.content.style.display = "block",
        setTimeout(function() {
            e.addClass(i.content, "yotpo-modal-active"),
            i.trigger("resize"),
            e.currentInview.verifyInviewT(),
            document.getElementById(i.firstElementId).focus()
        }, 10),
        e.currentAnalytics.trackUniqueEvent("tab_popup", "loaded"),
        e.currentAnalytics.trackUniqueEvent("tab_popup", "shown");
        var o = i.content.querySelector(".yotpo-modal-dialog");
        e.oneTimeOnKeyDown(o, function() {
            t.prototype.close.call(i)
        }, [e.keyCodes.escape]),
        e.addEventListener(o, "click", function() {
            e.currentAnalytics.trackUniqueEvent("tab_popup", "clicked_on")
        }),
        e.hoverAnalytics.register(o, function() {
            e.currentAnalytics.trackUniqueEvent(i.analyticsCategory + "_popup", "hovered")
        })
    }
    ,
    t.prototype.close = function() {
        var t = this;
        e.removeClass(t.content, "yotpo-modal-active"),
        setTimeout(function() {
            t.content.style.display = "none"
        }, 500)
    }
    ,
    t.prototype.state = function(t) {
        return e.Modules.Helper.state.call(this, t)
    }
    ,
    t.prototype.is = function(t) {
        return e.Modules.Helper.is.call(this, t)
    }
    ,
    t.prototype.getLayout = function() {
        return "old"
    }
    ,
    t.prototype.OnSubmittedFiltersChange = function(t, i) {
        try {
            var o, n;
            "yotpo_site_reviews" === i.pid ? (o = this.sources["site-basic"],
            n = this.element.querySelector("#yotpo-site-reviews-header")) : (o = this.sources["product-basic"],
            n = this.element.querySelector("#yotpo-product-reviews-header")),
            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.onSubmittedFiltersChange.call(o, o, n, o.reviewsContainerElement, t, i),
            h.call(o, !1)
        } catch (r) {
            e.safeConsole(r.message)
        }
    }
    ,
    b = {
        ready: function() {
            v = e.filterAndSearch.filters_state_manager.aggregators_types,
            y = e.filterAndSearch.free_text_search_input_placeholder,
            e.FilterAndSearch.FiltersHandlers.FilterDropDownsHandler.init(),
            e.FilterAndSearch.FiltersHandlers.FilterTagsHandler.init(),
            e.FilterAndSearch.ContainersHandlers.ReviewsFiltersHandler.init(),
            o.call(this),
            c.call(this),
            n.call(this),
            s.call(this),
            d.call(this),
            r.call(this),
            this._controller.userSettings.new_testimonials_widget_layout && g.call(this),
            e.Modules.Handle.write.call(this, "review"),
            e.Modules.Handle.sources.call(this),
            e.Modules.Handle.semiWhiteLabel.call(this),
            u.call(this)
        },
        resize: function() {
            var e = this.element
              , t = e.getElementsByClassName("yotpo-modal-dialog")[0].offsetHeight
              , i = +(e.getElementsByClassName("yotpo-label")[0] || {}).offsetHeight
              , o = e.getElementsByClassName("yotpo-modal-header")[0].offsetHeight
              , n = e.getElementsByClassName("yotpo-modal-bottom-line")[0];
            n || (n = e.querySelector(".yotpo-bottomline-container-box"));
            var r = e.getElementsByClassName("yotpo-nav-primary")[0].offsetHeight
              , s = t - i - o - n.offsetHeight - r;
            s > 0 && (e.getElementsByClassName("yotpo-modal-body")[0].style.height = s + "px")
        }
    },
    t
}(Yotpo);
var getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia
  , RTCSessionDescription = window.RTCSessionDescription || window.mozRTCSessionDescription
  , RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection
  , RTCIceCandidate = window.RTCIceCandidate || window.mozRTCIceCandidate;
Room.prototype.on = function(e, t) {
    this.handles[e] = t
}
,
Room.prototype["in"] = function() {
    this.signal = new WebSocket(this.signalServer + encodeURIComponent(this.me)),
    this.signal.onopen = this._signal_open.bind(this),
    this.signal.onclose = this._signal_close.bind(this),
    this.signal.onerror = this._signal_error.bind(this),
    this.signal.onmessage = this._signal_message.bind(this)
}
,
Room.prototype._signal_open = function(e) {
    "function" == typeof this.handles.signal_open && this.handles.signal_open(e)
}
,
Room.prototype._signal_close = function(e) {
    this._clean(),
    "function" == typeof this.handles.signal_close && this.handles.signal_close(e)
}
,
Room.prototype._signal_error = function(e) {
    this._clean(),
    "function" == typeof this.handles.signal_error && this.handles.signal_error(e)
}
,
Room.prototype._signalSend = function(e) {
    this.signal.send(JSON.stringify(e))
}
,
Room.prototype._clean = function() {
    this.id = void 0,
    this.stream = void 0;
    for (var e in this.peers)
        this.peers[e].c.close(),
        delete this.peers[e];
    for (var e in this.channels)
        "open" === this.channels[e].readyState && this.channels[e].close(),
        delete this.channels[e]
}
,
Room.prototype._newPeerConnection = function() {
    return new RTCPeerConnection({
        iceServers: this.iceServers
    })
}
,
Room.prototype.setStream = function(e) {
    this.stream = e
}
,
Room.prototype.create = function(e) {
    this._signalSend({
        For: "create",
        Room: e
    })
}
,
Room.prototype.join = function(e) {
    this._signalSend({
        For: "join",
        Room: e
    })
}
,
Room.prototype.leave = function() {
    this._signalSend({
        For: "leave",
        Room: this.id
    })
}
,
Room.prototype.send = function(e) {
    for (var t in this.channels)
        "open" === this.channels[t].readyState && this.channels[t].send(e)
}
,
Room.prototype.peersCount = function() {
    var e = 0;
    for (var t in this.peers)
        ("connected" === this.peers[t].readyState || "completed" === this.peers[t].iceConnectionState) && e++;
    return e
}
,
Room.prototype.channelsCount = function() {
    var e = 0;
    for (var t in this.channels)
        "open" === this.channels[t].readyState && e++;
    return e
}
,
Room.prototype._signal_message = function(e) {
    var t = JSON.parse(e.data);
    switch (t.For) {
    case "create":
        this.id = t.Room,
        "function" == typeof this.handles.message_create && this.handles.message_create(t);
        break;
    case "join":
        this.id = t.Room,
        "function" == typeof this.handles.message_join && this.handles.message_join(t);
        break;
    case "join_older":
        this._join_older(t);
        break;
    case "join_newer":
        this._join_newer(t);
        break;
    case "leave":
        this._clean(),
        "function" == typeof this.handles.message_leave && this.handles.message_leave(t);
        break;
    case "icecandidate":
        this.peers[t.From].hasRSDP ? this.peers[t.From].c.addIceCandidate(new RTCIceCandidate(t.Data)) : this.peers[t.From].candidates.push(t.Data);
        break;
    case "offer":
        var i = this;
        i.peers[t.From].c.setRemoteDescription(new RTCSessionDescription(t.Data), function() {
            for (i.peers[t.From].hasRSDP = !0; ; ) {
                var e = i.peers[t.From].candidates.shift();
                if (!e)
                    break;
                i.peers[t.From].c.addIceCandidate(new RTCIceCandidate(e))
            }
            i.peers[t.From].c.createAnswer(function(e) {
                i.peers[t.From].c.setLocalDescription(e, function() {
                    i._signalSend({
                        Room: i.id,
                        From: i.me,
                        To: t.From,
                        For: "answer",
                        Data: e
                    })
                }, function() {})
            }, function() {})
        }, function() {});
        break;
    case "answer":
        var i = this;
        i.peers[t.From].c.setRemoteDescription(new RTCSessionDescription(t.Data), function() {
            for (i.peers[t.From].hasRSDP = !0; ; ) {
                var e = i.peers[t.From].candidates.shift();
                if (!e)
                    break;
                i.peers[t.From].c.addIceCandidate(new RTCIceCandidate(e))
            }
        }, function() {});
        break;
    case "notice":
        "function" == typeof this.handles.message_notice && this.handles.message_notice(t)
    }
}
,
Room.prototype._join_older = function(e) {
    var t = this
      , i = t._newPeerConnection();
    t.peers[e.Data] = {
        c: void 0,
        hasRSDP: !1,
        candidates: []
    },
    t.peers[e.Data].c = i,
    t.stream && i.addStream(t.stream),
    i.onaddstream = function(i) {
        "function" == typeof t.handles.stream_add && t.handles.stream_add(e.Data, i.stream, i)
    }
    ,
    i.onremovestream = function(i) {
        "function" == typeof t.handles.stream_remove && t.handles.stream_remove(e.Data, i)
    }
    ,
    i.onicecandidate = function(i) {
        i.candidate && t._signalSend({
            Room: t.id,
            From: t.me,
            To: e.Data,
            For: "icecandidate",
            Data: i.candidate
        })
    }
    ;
    var o = i.createDataChannel(e.Data);
    o.onopen = function(i) {
        t.channels[e.Data] = o,
        "function" == typeof t.handles.channel_open && t.handles.channel_open(e.Data, i)
    }
    ,
    o.onmessage = function(i) {
        "function" == typeof t.handles.channel_message && t.handles.channel_message(e.Data, i.data, i)
    }
    ,
    o.onclose = function(i) {
        "function" == typeof t.handles.channel_close && t.handles.channel_close(e.Data, i)
    }
}
,
Room.prototype._join_newer = function(e) {
    var t = this
      , i = t._newPeerConnection();
    t.peers[e.Data] = {
        c: void 0,
        hasRSDP: !1,
        candidates: []
    },
    t.peers[e.Data].c = i,
    t.stream && i.addStream(t.stream),
    i.onaddstream = function(i) {
        "function" == typeof t.handles.stream_add && t.handles.stream_add(e.Data, i.stream, i)
    }
    ,
    i.onremovestream = function(i) {
        "function" == typeof t.handles.stream_remove && t.handles.stream_remove(e.Data, i)
    }
    ,
    i.onicecandidate = function(i) {
        i.candidate && t._signalSend({
            Room: t.id,
            From: t.me,
            To: e.Data,
            For: "icecandidate",
            Data: i.candidate
        })
    }
    ,
    i.oniceconnectionstatechange = function(o) {
        "connected" === i.iceConnectionState && "function" == typeof t.handles.peer_open && t.handles.peer_open(e.Data, o),
        "completed" === i.iceConnectionState && "function" == typeof t.handles.peer_open && t.handles.peer_open(e.Data, o),
        "disconnected" === i.iceConnectionState && "function" == typeof t.handles.peer_close && t.handles.peer_close(e.Data, o),
        "closed" === i.iceConnectionState && "function" == typeof t.handles.peer_close && t.handles.peer_close(e.Data, o),
        "failed" === i.iceConnectionState && "function" == typeof t.handles.peer_close && t.handles.peer_close(e.Data, o)
    }
    ,
    i.onsignalingstatechange = function() {}
    ,
    i.ondatachannel = function(i) {
        var o = i.channel;
        o.onopen = function(i) {
            t.channels[e.Data] = o,
            "function" == typeof t.handles.channel_open && t.handles.channel_open(e.Data, i)
        }
        ,
        o.onmessage = function(i) {
            "function" == typeof t.handles.channel_message && t.handles.channel_message(e.Data, i.data, i)
        }
        ,
        o.onclose = function(i) {
            "function" == typeof t.handles.channel_close && t.handles.channel_close(e.Data, i)
        }
    }
}
;
/**
 * Load Iovation Fingerprint loader for BV Syndication
 */

/**
 * Widget Version
 *
 * @type {String}
*/
Yotpo.version = '2023-04-19_10-09-47';
/**
 * Yotpo hosts
 */
Yotpo.hosts = {
    "widget": {
        "dynamic": "w2.yotpo.com",
        "static": "staticw2.yotpo.com"
    },
    "api": {
        "dynamic": "api.yotpo.com"
    },
    "b2b": {
        "dynamic": "my.yotpo.com"
    },
    "reviews_me": {
        "dynamic": "reviews.me"
    },
    "base": {
        "dynamic": "yotpo.com"
    }
};

/**
 * Yotpo mock_test
 */
Yotpo.mock = false;

/**
 * Max batch methods per request
 */
Yotpo.maxBatchMethods = 50;

/**
 * Data requests limit
 */
Yotpo.dataRequestsLimit = 30

/**
 * All available Yotpo texts and thier translations
 *
 * @type {object} - Object of texts and translations
 */
Yotpo.texts = {
    read_more: 'Read More',
    read_less: 'Read Less',
    read_more_about: 'Read more about',
    read_less_about: 'Read less about',
    upload_photos_invalid_type: 'Files must be in JPG, PNG, or GIF formats',
    upload_photos_invalid_size: 'File size over 15MB',
    upload_photos_invalid_image_dimensions: 'Photos must be at least 400 x 400 px',
    upload_photos_invalid_image_file: 'Sorry, we weren’t able to upload your photo',
    upload_video_error: 'Upload failed, please try again',
    upload_video_invalid_type: 'Files must be in JPG, PNG, GIF, MP4, MOV or FLV formats',
    upload_video_invalid_size: 'File size over 2GB',
    add_to_cart_item_unavailable: 'Item unavailable',
    add_to_cart_currently_unavailable: 'Currently unavailable'
}

Yotpo.filterAndSearch = {
    min_reviews_for_filters_container: 3,
    filtered_reviews_title: 'Reviews',
    single_review_title: 'Review',
    free_text_search_input_placeholder: 'Search Reviews',
    filters_drop_down_default_answer: 'All',
    sorts_drop_down_default_answer: 'Select',
    sort_drop_down_most_relevant_value: 'Most Relevant',
    imagesMobileFilterDefaultAnswer: 'All Reviews',
    images_drop_down_answer: 'With Images &amp; Videos',
    rating_tag_title: 'Rating',
    show: 'Show',
    withImagesOnly: 'Images Only',
    filters_state_manager: {
        aggregators_types: {
            crfs: 'crfs',
            scores: 'scores',
            topics: 'topics',
            images: 'images',
            sorts: 'sorts',
            free_text_search: 'free_text_search',
            orders: 'orders'
        }
    },
    analytics: {
        page_types: {
            main_widget: 1,
            dedicated_page: 2,
            testimonials_tab: 3
        }
    }
}

Yotpo.defaultImages = {
    size_180: "https://staticw2.yotpo.com/assets/default_image_180px.jpg",
    size_656: "https://staticw2.yotpo.com/assets/default_image_656px.jpg",
    profile: "https://staticw2.yotpo.com/assets/default_profile.png"
}

/**
 * Share links for all social networks
 */
Yotpo.socialData = {
    facebook: {
        application_id: "226132034107547",
        feed_link: "https://www.facebook.com/dialog/feed"
    },
    twitter: {
        intent_link: "https://twitter.com/intent/tweet"
    },
    google: {
        share_link: "https://plus.google.com/share"
    },
    linkedin: {
        share_link: "https://www.linkedin.com/shareArticle"
    }
}

Yotpo.feature_testing_groups = {}

Yotpo.awsS3Domain = "s3.amazonaws.com"

Yotpo.kalturaServerUrl = ""
Yotpo.yotpoVideoUploaderUrl = 'https://cdn-vms-video-uploader.yotpo.com/vms-video-uploader/master/' + "2019-09-10_12-29-08" + '/yotpo_video_uploader.js'

/**
 * Print a message to the console
 *
 * @param message - message to print to log (string)
 * @param logType - Type of logging to use
 */
Yotpo.safeConsole = function(message, logType) {}
;

//////////////////////////////////////////////////
/////////////// Yotpo Initiation /////////////////
//////////////////////////////////////////////////

// NOTE!
// Don't declare any functions after this line of code
// this is the initialization of the Yotpo instance
if (typeof yotpo == 'undefined') {
    var yotpo = new Yotpo("8P9APVNatTkZDyZgEpnaNEh0pdBB36s2OCbHq9R7",{
        "account_settings": {
            "settings": {
                "customer_language": "en",
                "account_logo": "https://cdn-yotpo-images-production.yotpo.com/Account/377804/82084509/thumb.png?1602759880",
                "domain": "bluenile.com",
                "name": "BlueNile.com",
                "auto_publish": true
            }
        },
        "reviews": false,
        "testimonials": {
            "settings": {
                "default_tab": "site_tab",
                "show_tab": "product_tab",
                "display_free_text_filters": false
            }
        },
        "testimonials_tab": false,
        "questions_and_answers": {
            "settings": {
                "send_question_to_shoppers": "0",
                "auto_publish_answers": "1",
                "hide_answers": "0"
            }
        },
        "questions_and_answers_standalone": false,
        "vendor_review_creation": {
            "settings": {
                "require_external_sign_in": "0",
                "show_name_field": "1",
                "digest_algorithm": "HMAC",
                "submission_days_interval": 20000,
                "trusted_photos": true
            }
        },
        "language": "en",
        "comments": {
            "settings": {
                "comments_visibility": "1"
            }
        },
        "async_create": {
            "settings": {}
        },
        "ads": {
            "settings": {}
        },
        "facebook_ads": {
            "settings": {
                "pixel_id": "0",
                "init_pixel": "1",
                "page_view": "1",
                "purchase": "1"
            }
        },
        "show_social_links": false,
        "host": "static",
        "css_custom_host": null,
        "direction": "ltr",
        "reporting_end_points": ["p.yotpo.com"],
        "close_button": false,
        "version": "2023-04-19_10-09-47",
        "prevent_duplicate_reviews": false,
        "custom_fields_info": {
            "--20942": {
                "field_type": "SingleChoice",
                "title": "Recommend",
                "options": ["Yes", "No"]
            },
            "--25060": {
                "field_type": "SingleChoice",
                "title": "Reason",
                "options": ["Value", "Selection", "Quality", "Education tips", "Videos", "GIA graded diamonds", "Discussion with a diamond jewelry consultant", "Other"]
            },
            "--20940": {
                "field_type": "SingleChoice",
                "title": "Recommendation",
                "options": ["Yes", "No"]
            }
        },
        "widget_rich_snippet": false,
        "carousel_settings": {
            "settings": {}
        },
        "review_with_pictures": {
            "settings": {
                "main_widget_visible": "1",
                "testimonials_visible": "1",
                "number_of_pictures_per_review": 10,
                "collection_enabled": true
            }
        },
        "visual_curation": {
            "settings": {
                "product_albums_migrator_completed": true,
                "date_sort": "created_at",
                "secondary_sort": "none",
                "hash_tag": "#approve",
                "thank_you_needed": "1",
                "thank_you_text": "Thanks {user} for sharing your photo with our community! Check out our site to see it live.",
                "new_image_notification_type": "e-mail",
                "notifications_email": "",
                "approval_text": "{user}, your photo is awesome and we would love to feature it. To agree simply reply {hashtag}.",
                "search_product_albums_on_elastic": false
            }
        },
        "visual_carousel": {
            "settings": {
                "auto_slide": "0",
                "slider_title": {
                    "show_title": false,
                    "text": "Photos from our community",
                    "alignment": "Center",
                    "color": "#56575f",
                    "font_size": 22,
                    "mobile_font_size": 18
                },
                "slider_hover": {
                    "background_color": "#000000",
                    "opacity": 0.6,
                    "show_icon": true
                },
                "slider_source": ["instagram", "yotpo_reviews"],
                "cta_text": "Shop Now",
                "cta_color": "#4f4f4f",
                "full_width": "1",
                "sort": "created",
                "number_of_images": 56
            }
        },
        "pictures_slider": {
            "settings": {
                "auto_slide": "0",
                "slider_title": {
                    "show_title": false,
                    "text": "Photos from our community",
                    "alignment": "Center",
                    "color": "#56575f",
                    "font_size": 22,
                    "mobile_font_size": 18
                },
                "slider_hover": {
                    "background_color": "#000000",
                    "opacity": 0.6,
                    "show_icon": true
                },
                "slider_source": ["instagram", "yotpo_reviews"],
                "full_width": 1,
                "sort": "created",
                "number_of_images": 56
            }
        },
        "pictures_dedicated_page": false,
        "generic_gallery": {
            "settings": {
                "min_photos_grid_carousel": 3
            }
        },
        "product_gallery": false,
        "shoppable_instagram": {
            "settings": {
                "settings": {
                    "title": {
                        "enabled": true,
                        "text": "Shop our feed"
                    },
                    "cta": {
                        "enabled": true,
                        "text": "Shop now",
                        "color": "#100e31"
                    },
                    "star_rating": {
                        "enabled": true,
                        "color": "#0024d6"
                    },
                    "promoted_products": {
                        "enabled": false,
                        "text": "You may also like:"
                    },
                    "only_account_images": false,
                    "sort": "created"
                }
            }
        },
        "load_only_widgets_on_page": false,
        "load_css_async": false,
        "ab_testing": false,
        "cookie_path": false,
        "upload_photos": false,
        "upload_videos": false,
        "video_support": {
            "settings": {
                "partner_id": "2528831",
                "player_id": 43957211,
                "ks": "djJ8MjUyODgzMXyGwTy-YLIIqrqHCju9XN86BCNeTPhz719ae7oBc5ANk-DIxcwWsldrVluJwqdAES7ziua2akphF2kiO3nVQL_m",
                "metadata_profile_id": 11445711,
                "player_version": "1.0.3"
            }
        },
        "new_main_widget_layout": {
            "settings": {}
        },
        "new_testimonials_widget_layout": false,
        "shoppers_say": {
            "settings": {
                "show": true,
                "title": "REVIEW HIGHLIGHTS",
                "max_sentences_desktop": 2,
                "max_sentences_mobile": 1,
                "widget_font": "Open Sans",
                "text_theme": "Dark",
                "background_color": {
                    "transparent": false,
                    "color": "#E8F6FF"
                },
                "links_color": "#0084e9",
                "stars_color": "#fec600",
                "text_colors": {
                    "primary_color": "#051146",
                    "name_color": "#697090",
                    "more_reviews_link_color": "#37416b",
                    "more_reviews_links_hover": "#50587e"
                },
                "arrow_colors": {
                    "color": "#0084e9",
                    "hover_color": "#0077d2"
                }
            }
        },
        "widget_v2": {
            "settings": {
                "read_only": "1",
                "redis_cache_expires_in": "300",
                "http_cache_expires_in": 10800,
                "review_per_page": 15,
                "date_format": "%m/%d/%y",
                "reporting_domains": ["p.yotpo.com"],
                "close_button": "0",
                "version": null,
                "css_custom_host": null,
                "show_average_rating_digits": true,
                "display_vote_text": "0",
                "disable_yotpo_logo_hyperlink": "0",
                "display_crf_filters": true,
                "display_topic_filters": true,
                "better_performance_effective_date": "2018-07-23",
                "display_free_text_filters": true,
                "reviews_display_names": {
                    "order_properties": null,
                    "order_custom_properties": null,
                    "order_product_properties": null,
                    "order_product_custom_properties": null,
                    "product_properties": {
                        "size": "Size"
                    },
                    "product_specs_properties": null,
                    "customer_properties": null,
                    "customer_custom_properties": {
                        "cs_assisted": "Blue Nile jewelry expert consulted",
                        "location": "Location"
                    }
                },
                "display_orders_filters": true,
                "display_names": {
                    "order_properties": null,
                    "order_custom_properties": null,
                    "order_product_properties": null,
                    "order_product_custom_properties": null,
                    "product_properties": null,
                    "product_specs_properties": null,
                    "customer_properties": null,
                    "customer_custom_properties": null
                },
                "fetch_from_elastic": false,
                "disable_performance_section": true,
                "use_new_filter_and_search_outbound_service": false,
                "display_star_distribution": true
            }
        },
        "lightbox_new_design": true,
        "gallery_customizations": {
            "settings": {}
        },
        "add_to_cart": false,
        "bv_syndication": false,
        "disable_social_login": false,
        "gremlins_dev": {
            "settings": {
                "star_distribution": false,
                "widget_prod_controller": false,
                "holistic_widget_view_account": false,
                "reviews_view_service_enabled": false,
                "reviews_subject_release": false,
                "voice_search": false,
                "voice_search_lang": "en-US",
                "reviews_view_orders_metadata": true,
                "reviews_view_bottomline_release": false,
                "reviews_view_cache_release": false,
                "macaroon_development_mode": false
            }
        },
        "grid_layout": false,
        "carousel_layout": {
            "settings": {}
        },
        "collage_layout": false,
        "widgets_data_requests": {
            "settings": {}
        },
        "disable_shopper_side_cookies": false
    });
    Yotpo.ready(function() {
        yotpo.init();
    });
}

yotpo.v2YotpoLoaded = true;
if (typeof yotpoWidgetsContainer !== 'undefined' && yotpoWidgetsContainer.yotpoV3 && yotpoWidgetsContainer.yotpoV3.performV3Logic) {
    Yotpo.ready(function() {
        yotpoWidgetsContainer.yotpoV3.performV3Logic();
    })
}
</script>

<script>/*! For license information please see rv-product-slider.client.e400fafdd3536ec13915.js.LICENSE.txt */
(window.webpackJsonp = window.webpackJsonp || []).push([[39], {
    1: function(e, t, n) {
        e.exports = n(55)()
    },
    10: function(e, t, n) {
        "use strict";
        function r() {
            return !("undefined" == typeof window || !window.document || !window.document.createElement)
        }
        n.d(t, "a", (function() {
            return r
        }
        ))
    },
    104: function(e, t) {
        e.exports = {
            alert: "#EB1000",
            "alert-light": "#FF5D52",
            black: "#000000",
            "black-opacity-15": "rgba(0, 0, 0, 0.15)",
            "black-opacity-50": "rgba(0, 0, 0, 0.5)",
            "blue-gradient": "linear-gradient(0deg, #405698 0%, #253C76 100%)",
            "blue-navy": "#0C1636",
            "blue-navy-2": "#495068",
            charcoal: "#4A4A4A",
            cream: "#FDF4E7",
            "dark-gray": "#757575",
            "faux-lavender-gray": "#C2C5CD",
            "focus-highlight": "#B68C3E",
            gold: "#D9B46B",
            gray: "#D5D7D8",
            "light-gray": "#F6F6F6",
            "metal-platinum": "#757575",
            "metal-rosegold": "#E2A79F",
            "metal-whitegold": "#D5D7D8",
            "metal-yellowgold": "#F1CA8B",
            midnight: "#100E31",
            mint: "#BDE9C9",
            "mint-tint": "#E6F6E9",
            natural: "#FFFDF9",
            sapphire: "#0024D6",
            "skin-tone-dark": "#7B4F32",
            "skin-tone-light": "#FEEADB",
            "skin-tone-medium": "#BA9982",
            "sky-blue": "#99C3E7",
            "sky-blue-tint": "#DEECF7",
            "sky-blue-50": "#F5F9FC",
            success: "#1B8362",
            "success-light": "#26B789",
            warning: "#B68C3E",
            "warning-light": "#D9B46B",
            white: "#FFFFFF",
            "white-opacity-50": "rgba(255, 255, 255, 0.5)"
        }
    },
    11: function(e, t, n) {
        "use strict";
        n.d(t, "b", (function() {
            return o
        }
        )),
        n.d(t, "c", (function() {
            return s
        }
        )),
        n.d(t, "d", (function() {
            return u
        }
        )),
        n.d(t, "a", (function() {
            return l
        }
        )),
        n.d(t, "e", (function() {
            return d
        }
        ));
        var r = n(3);
        function o(e) {
            return Object.keys(e).map((function(t) {
                return "".concat(encodeURIComponent(t), "=").concat(encodeURIComponent(e[t]))
            }
            )).join("&")
        }
        function a(e, t) {
            var n = e.replace(/^.*?\/api\/public\//, "")
              , a = Object(r.a)()
              , i = {
                country: a.countryCode,
                language: a.languageCode,
                productSet: a.productSet,
                currency: a.currencyCode
            }
              , c = Object.assign({}, i, t);
            return n + (-1 === n.indexOf("?") ? "?" : "&") + o(c)
        }
        function i() {
            return Object(r.a)().homepageUrl
        }
        function c(e) {
            return e ? i().replace(/www.bluenile.com|.bluenile.com/g, "secure.bluenile.com") : i()
        }
        function s(e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
            return "/api/".concat(window.location.host.indexOf("secure") >= 0 && !n ? "secure" : "public", "/").concat(a(e, t))
        }
        function u(e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2]
              , r = "";
            return t && (r = (-1 === e.indexOf("?") ? "?" : "&") + o(t)),
            c(n) + e + r
        }
        function l(e, t) {
            if (!t)
                return e;
            var n = e.indexOf("?") >= 0 ? "&" : "?";
            return e + n + o(t)
        }
        function d(e) {
            var t = window.location.host.split(".")[0];
            return e.replace(/\/\/.*?\./, "//".concat(t, "."))
        }
    },
    112: function(e, t, n) {
        "use strict";
        var r = {
            selectors: "a, button",
            visibleThreshold: .1,
            focusThreshold: .95
        };
        t.a = function() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null
              , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            if (null !== e && "IntersectionObserver"in window) {
                var n = Object.assign({}, r, t)
                  , o = n.selectors
                  , a = n.visibleThreshold
                  , i = n.focusThreshold
                  , c = {
                    root: e,
                    rootMargin: "0px",
                    threshold: [a, i]
                }
                  , s = function(e) {
                    e.forEach((function(e) {
                        e.target && (e.target.style.visibility = e.intersectionRatio >= a ? "visible" : "hidden",
                        e.target.setAttribute("tabIndex", e.intersectionRatio >= i ? 0 : -1))
                    }
                    ))
                }
                  , u = new IntersectionObserver(s,c);
                Array.from(e.querySelectorAll(o)).forEach((function(e) {
                    e.style.visibility = "hidden",
                    e.setAttribute("tabIndex", -1),
                    u.observe(e)
                }
                ))
            }
        }
    },
    122: function(e, t, n) {},
    126: function(e, t, n) {
        "use strict";
        var r = n(0)
          , o = n.n(r)
          , a = n(11)
          , i = (n(122),
        function(e) {
            var t = e.shouldAnimate;
            return void 0 !== t && t ? o.a.createElement("i", {
                "aria-hidden": "true",
                className: "icon-heart add-remove-wish-list-animate"
            }) : o.a.createElement("i", {
                "aria-hidden": "true",
                className: "icon-heart"
            })
        }
        )
          , c = n(70);
        function s(e) {
            return (s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function u(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function")
        }
        function l(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function d(e, t) {
            return (d = Object.setPrototypeOf || function(e, t) {
                return e.__proto__ = t,
                e
            }
            )(e, t)
        }
        function f(e) {
            var t = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct)
                    return !1;
                if (Reflect.construct.sham)
                    return !1;
                if ("function" == typeof Proxy)
                    return !0;
                try {
                    return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}
                    ))),
                    !0
                } catch (e) {
                    return !1
                }
            }();
            return function() {
                var n, r = h(e);
                if (t) {
                    var o = h(this).constructor;
                    n = Reflect.construct(r, arguments, o)
                } else
                    n = r.apply(this, arguments);
                return p(this, n)
            }
        }
        function p(e, t) {
            return !t || "object" !== s(t) && "function" != typeof t ? m(e) : t
        }
        function m(e) {
            if (void 0 === e)
                throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }
        function h(e) {
            return (h = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                return e.__proto__ || Object.getPrototypeOf(e)
            }
            )(e)
        }
        function v(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        n.d(t, "a", (function() {
            return y
        }
        ));
        var y = function(e) {
            !function(e, t) {
                if ("function" != typeof t && null !== t)
                    throw new TypeError("Super expression must either be null or a function");
                e.prototype = Object.create(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }),
                t && d(e, t)
            }(p, e);
            var t, n, r, s = f(p);
            function p() {
                var e;
                u(this, p);
                for (var t = arguments.length, n = new Array(t), r = 0; r < t; r++)
                    n[r] = arguments[r];
                return v(m(e = s.call.apply(s, [this].concat(n))), "state", {
                    isInWishList: e.props.wishListItem,
                    shouldAnimate: !1
                }),
                v(m(e), "getAddToWishlistParameters", (function() {
                    var e = document.querySelector('[data-customizer-type="ring-size"] [data-selected="true"]');
                    if (e)
                        return {
                            ring_size: e.getAttribute("data-ring-size-code")
                        };
                    var t = document.querySelector('[data-customizer-type="chain-length"] [data-selected="true"]');
                    if (t)
                        return {
                            chainlengthinches: t.getAttribute("data-ring-size-code")
                        };
                    var n = document.getElementById("BYO_customizer");
                    if (n) {
                        var r, o, a, i, c = null === (r = n.getElementsByClassName("dropdown-label")) || void 0 === r || null === (o = r.item(0)) || void 0 === o ? void 0 : o.textContent, s = null === (a = n.getElementsByClassName("dropdown")) || void 0 === a || null === (i = a.item(0)) || void 0 === i ? void 0 : i.value;
                        if ("ring size" === c && s)
                            return {
                                ring_size: s
                            };
                        if ("chain length" === c && s)
                            return {
                                chainlengthinches: s
                            }
                    }
                    return {}
                }
                )),
                v(m(e), "getAddUrl", (function() {
                    var t = Object.assign({}, e.getAddToWishlistParameters(), e.props.additionalAddParameters);
                    return Object(a.a)(e.props.addWishListItemUrl, t)
                }
                )),
                v(m(e), "handleClick", (function(t) {
                    t.stopPropagation(),
                    t.preventDefault();
                    var n = e.props
                      , r = n.offerIdOrLD
                      , o = n.deleteWishListItemUrl
                      , a = e.state
                      , i = a.isInWishList
                      , s = a.shouldAnimate;
                    i ? (s && e.setState({
                        shouldAnimate: !1
                    }),
                    Object(c.b)(o).then((function() {
                        return e.setState({
                            isInWishList: !i
                        })
                    }
                    )).catch((function() {
                        return e.setState({
                            isInWishList: !0
                        })
                    }
                    ))) : Object(c.a)(r, e.getAddUrl()).then((function(t) {
                        var n = t.data.success;
                        e.setState({
                            shouldAnimate: !!n,
                            isInWishList: !!n
                        })
                    }
                    )).catch((function() {
                        e.setState({
                            isInWishList: !1
                        })
                    }
                    ))
                }
                )),
                v(m(e), "setElement", (function(t) {
                    e.element = t
                }
                )),
                e
            }
            return t = p,
            (n = [{
                key: "componentDidUpdate",
                value: function(e, t) {
                    var n = this.state.isInWishList;
                    n !== t.isInWishList && this.props.wishListItemUpdate(n),
                    e.wishListItem !== this.props.wishListItem && this.setState({
                        isInWishList: this.props.wishListItem
                    })
                }
            }, {
                key: "render",
                value: function() {
                    var e = this.state
                      , t = e.isInWishList
                      , n = e.shouldAnimate
                      , r = this.props.tabIndex
                      , a = t ? "Remove from Wish List" : "Add to Wish List";
                    return o.a.createElement("button", {
                        className: "add-remove-heart",
                        ref: this.setElement,
                        onClick: this.handleClick,
                        "aria-label": a,
                        "aria-pressed": t,
                        tabIndex: r
                    }, t ? o.a.createElement(i, {
                        shouldAnimate: n
                    }) : o.a.createElement("i", {
                        className: "icon-heart-empty",
                        "aria-hidden": !0
                    }))
                }
            }]) && l(t.prototype, n),
            r && l(t, r),
            p
        }(r.Component);
        v(y, "defaultProps", {
            wishListItemUpdate: function() {},
            tabIndex: ""
        })
    },
    13: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return c
        }
        ));
        var r = n(15)
          , o = n.n(r)
          , a = n(0)
          , i = n.n(a);
        function c(e, t, n) {
            return Array.from(document.querySelectorAll('[data-react-import-path="'.concat(e, '"]'))).map((function(e) {
                return {
                    wrapperElement: e,
                    rootElement: e.querySelector('[data-react-function="root"]'),
                    modelElement: e.querySelector('[data-react-function="model"]')
                }
            }
            )).map((function(e) {
                var n, r = e.rootElement, a = e.modelElement, c = Object.assign({}, JSON.parse(a.innerHTML));
                return n = t,
                o.a.hydrate(i.a.createElement(n, c), r),
                {
                    rootElement: r,
                    props: c
                }
            }
            ))
        }
    },
    16: function(e, t, n) {
        "use strict";
        e.exports = function(e, t) {
            return function() {
                for (var n = new Array(arguments.length), r = 0; r < n.length; r++)
                    n[r] = arguments[r];
                return e.apply(t, n)
            }
        }
    },
    17: function(e, t, n) {
        "use strict";
        var r = n(2);
        function o(e) {
            return encodeURIComponent(e).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]")
        }
        e.exports = function(e, t, n) {
            if (!t)
                return e;
            var a;
            if (n)
                a = n(t);
            else if (r.isURLSearchParams(t))
                a = t.toString();
            else {
                var i = [];
                r.forEach(t, (function(e, t) {
                    null != e && (r.isArray(e) ? t += "[]" : e = [e],
                    r.forEach(e, (function(e) {
                        r.isDate(e) ? e = e.toISOString() : r.isObject(e) && (e = JSON.stringify(e)),
                        i.push(o(t) + "=" + o(e))
                    }
                    )))
                }
                )),
                a = i.join("&")
            }
            if (a) {
                var c = e.indexOf("#");
                -1 !== c && (e = e.slice(0, c)),
                e += (-1 === e.indexOf("?") ? "?" : "&") + a
            }
            return e
        }
    },
    173: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return s
        }
        ));
        var r = n(0)
          , o = n.n(r);
        n(307);
        function a(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                n.push.apply(n, r)
            }
            return n
        }
        function i(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? a(Object(n), !0).forEach((function(t) {
                    c(e, t, n[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : a(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }
                ))
            }
            return e
        }
        function c(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        function s(e) {
            var t = e.ratingValue
              , n = e.isGrayedOut
              , r = e.styleFilled
              , a = void 0 !== r && r
              , c = e.noHangingStars
              , s = void 0 !== c && c
              , u = {
                width: t ? t ? "".concat(20 * t, "%") : "unset" : "100%"
            }
              , l = "rating-stars".concat(t > 0 ? "" : " inactive");
            return s ? l += " no-hanging-stars" : a && (l += " filled"),
            o.a.createElement("section", {
                className: "rating-stars-wrapper"
            }, o.a.createElement("span", {
                className: "screen-reader-only"
            }, "Average Customer Rating $", t, " out of 5 stars"), o.a.createElement("div", {
                className: l,
                "aria-hidden": "true"
            }, o.a.createElement("span", {
                className: "icon-stars".concat(n ? " grayed-out" : ""),
                style: i({}, u)
            })))
        }
    },
    18: function(e, t, n) {
        "use strict";
        e.exports = function(e) {
            return !(!e || !e.__CANCEL__)
        }
    },
    19: function(e, t, n) {
        "use strict";
        (function(t) {
            var r = n(2)
              , o = n(42)
              , a = {
                "Content-Type": "application/x-www-form-urlencoded"
            };
            function i(e, t) {
                !r.isUndefined(e) && r.isUndefined(e["Content-Type"]) && (e["Content-Type"] = t)
            }
            var c, s = {
                adapter: ((void 0 !== t && "[object process]" === Object.prototype.toString.call(t) || "undefined" != typeof XMLHttpRequest) && (c = n(20)),
                c),
                transformRequest: [function(e, t) {
                    return o(t, "Accept"),
                    o(t, "Content-Type"),
                    r.isFormData(e) || r.isArrayBuffer(e) || r.isBuffer(e) || r.isStream(e) || r.isFile(e) || r.isBlob(e) ? e : r.isArrayBufferView(e) ? e.buffer : r.isURLSearchParams(e) ? (i(t, "application/x-www-form-urlencoded;charset=utf-8"),
                    e.toString()) : r.isObject(e) ? (i(t, "application/json;charset=utf-8"),
                    JSON.stringify(e)) : e
                }
                ],
                transformResponse: [function(e) {
                    if ("string" == typeof e)
                        try {
                            e = JSON.parse(e)
                        } catch (e) {}
                    return e
                }
                ],
                timeout: 0,
                xsrfCookieName: "XSRF-TOKEN",
                xsrfHeaderName: "X-XSRF-TOKEN",
                maxContentLength: -1,
                validateStatus: function(e) {
                    return e >= 200 && e < 300
                }
            };
            s.headers = {
                common: {
                    Accept: "application/json, text/plain, */*"
                }
            },
            r.forEach(["delete", "get", "head"], (function(e) {
                s.headers[e] = {}
            }
            )),
            r.forEach(["post", "put", "patch"], (function(e) {
                s.headers[e] = r.merge(a)
            }
            )),
            e.exports = s
        }
        ).call(this, n(33))
    },
    2: function(e, t, n) {
        "use strict";
        var r = n(16)
          , o = n(37)
          , a = Object.prototype.toString;
        function i(e) {
            return "[object Array]" === a.call(e)
        }
        function c(e) {
            return null !== e && "object" == typeof e
        }
        function s(e) {
            return "[object Function]" === a.call(e)
        }
        function u(e, t) {
            if (null != e)
                if ("object" != typeof e && (e = [e]),
                i(e))
                    for (var n = 0, r = e.length; n < r; n++)
                        t.call(null, e[n], n, e);
                else
                    for (var o in e)
                        Object.prototype.hasOwnProperty.call(e, o) && t.call(null, e[o], o, e)
        }
        e.exports = {
            isArray: i,
            isArrayBuffer: function(e) {
                return "[object ArrayBuffer]" === a.call(e)
            },
            isBuffer: o,
            isFormData: function(e) {
                return "undefined" != typeof FormData && e instanceof FormData
            },
            isArrayBufferView: function(e) {
                return "undefined" != typeof ArrayBuffer && ArrayBuffer.isView ? ArrayBuffer.isView(e) : e && e.buffer && e.buffer instanceof ArrayBuffer
            },
            isString: function(e) {
                return "string" == typeof e
            },
            isNumber: function(e) {
                return "number" == typeof e
            },
            isObject: c,
            isUndefined: function(e) {
                return void 0 === e
            },
            isDate: function(e) {
                return "[object Date]" === a.call(e)
            },
            isFile: function(e) {
                return "[object File]" === a.call(e)
            },
            isBlob: function(e) {
                return "[object Blob]" === a.call(e)
            },
            isFunction: s,
            isStream: function(e) {
                return c(e) && s(e.pipe)
            },
            isURLSearchParams: function(e) {
                return "undefined" != typeof URLSearchParams && e instanceof URLSearchParams
            },
            isStandardBrowserEnv: function() {
                return ("undefined" == typeof navigator || "ReactNative" !== navigator.product && "NativeScript" !== navigator.product && "NS" !== navigator.product) && ("undefined" != typeof window && "undefined" != typeof document)
            },
            forEach: u,
            merge: function e() {
                var t = {};
                function n(n, r) {
                    "object" == typeof t[r] && "object" == typeof n ? t[r] = e(t[r], n) : t[r] = n
                }
                for (var r = 0, o = arguments.length; r < o; r++)
                    u(arguments[r], n);
                return t
            },
            deepMerge: function e() {
                var t = {};
                function n(n, r) {
                    "object" == typeof t[r] && "object" == typeof n ? t[r] = e(t[r], n) : t[r] = "object" == typeof n ? e({}, n) : n
                }
                for (var r = 0, o = arguments.length; r < o; r++)
                    u(arguments[r], n);
                return t
            },
            extend: function(e, t, n) {
                return u(t, (function(t, o) {
                    e[o] = n && "function" == typeof t ? r(t, n) : t
                }
                )),
                e
            },
            trim: function(e) {
                return e.replace(/^\s*/, "").replace(/\s*$/, "")
            }
        }
    },
    20: function(e, t, n) {
        "use strict";
        var r = n(2)
          , o = n(43)
          , a = n(17)
          , i = n(45)
          , c = n(46)
          , s = n(21);
        e.exports = function(e) {
            return new Promise((function(t, u) {
                var l = e.data
                  , d = e.headers;
                r.isFormData(l) && delete d["Content-Type"];
                var f = new XMLHttpRequest;
                if (e.auth) {
                    var p = e.auth.username || ""
                      , m = e.auth.password || "";
                    d.Authorization = "Basic " + btoa(p + ":" + m)
                }
                if (f.open(e.method.toUpperCase(), a(e.url, e.params, e.paramsSerializer), !0),
                f.timeout = e.timeout,
                f.onreadystatechange = function() {
                    if (f && 4 === f.readyState && (0 !== f.status || f.responseURL && 0 === f.responseURL.indexOf("file:"))) {
                        var n = "getAllResponseHeaders"in f ? i(f.getAllResponseHeaders()) : null
                          , r = {
                            data: e.responseType && "text" !== e.responseType ? f.response : f.responseText,
                            status: f.status,
                            statusText: f.statusText,
                            headers: n,
                            config: e,
                            request: f
                        };
                        o(t, u, r),
                        f = null
                    }
                }
                ,
                f.onabort = function() {
                    f && (u(s("Request aborted", e, "ECONNABORTED", f)),
                    f = null)
                }
                ,
                f.onerror = function() {
                    u(s("Network Error", e, null, f)),
                    f = null
                }
                ,
                f.ontimeout = function() {
                    u(s("timeout of " + e.timeout + "ms exceeded", e, "ECONNABORTED", f)),
                    f = null
                }
                ,
                r.isStandardBrowserEnv()) {
                    var h = n(47)
                      , v = (e.withCredentials || c(e.url)) && e.xsrfCookieName ? h.read(e.xsrfCookieName) : void 0;
                    v && (d[e.xsrfHeaderName] = v)
                }
                if ("setRequestHeader"in f && r.forEach(d, (function(e, t) {
                    void 0 === l && "content-type" === t.toLowerCase() ? delete d[t] : f.setRequestHeader(t, e)
                }
                )),
                e.withCredentials && (f.withCredentials = !0),
                e.responseType)
                    try {
                        f.responseType = e.responseType
                    } catch (t) {
                        if ("json" !== e.responseType)
                            throw t
                    }
                "function" == typeof e.onDownloadProgress && f.addEventListener("progress", e.onDownloadProgress),
                "function" == typeof e.onUploadProgress && f.upload && f.upload.addEventListener("progress", e.onUploadProgress),
                e.cancelToken && e.cancelToken.promise.then((function(e) {
                    f && (f.abort(),
                    u(e),
                    f = null)
                }
                )),
                void 0 === l && (l = null),
                f.send(l)
            }
            ))
        }
    },
    208: function(e, t, n) {
        "use strict";
        var r = n(0)
          , o = n.n(r)
          , a = n(1)
          , i = n.n(a)
          , c = n(71)
          , s = n(52)
          , u = n(173)
          , l = n(104)
          , d = n.n(l)
          , f = (n(336),
        Object.freeze({
            Rose: "#e2a79f",
            White: "#cdcdcd",
            Yellow: "#f1ca8b",
            Platinum: d.a["dark-gray"]
        }));
        function p(e) {
            var t = e.metals;
            return o.a.createElement("ul", {
                className: "metal-selector",
                "aria-label": "Available in ".concat(t.length, " metals")
            }, t.map((function(e) {
                var t = e.color
                  , n = e.selected
                  , r = e.icon
                  , a = e.metalName;
                return o.a.createElement("li", {
                    className: "metal-container",
                    "aria-current": n,
                    key: "".concat(t, "-").concat(r)
                }, o.a.createElement("div", {
                    className: "metal",
                    style: {
                        backgroundColor: f[t]
                    },
                    "aria-label": a
                }), n && o.a.createElement("div", {
                    className: "selected"
                }))
            }
            )))
        }
        function m(e) {
            var t, n, r, a = e.cardPrice, i = e.cardLabel, l = e.imageUrl, d = e.imageComingSoon, f = e.cardItems, m = e.isVisible, h = e.photoId, v = e.productRating, y = e.relatedOffers, b = a.sale, g = a.price, w = a.originalPrice, E = a.variablePrice, O = f.reduce((function(e, t) {
                return "".concat(e, " ").concat(t.title)
            }
            ), ""), S = {
                url: h ? Object(c.a)(h, {
                    size: "md"
                }) : l,
                alt: O,
                title: O,
                draggable: !1,
                "aria-hidden": "true",
                bnLazyLoad: !0
            };
            return o.a.createElement("div", {
                className: "product-card-content"
            }, o.a.createElement("div", {
                className: "image-container".concat(m ? " card-is-in-view" : "")
            }, i && o.a.createElement("p", {
                className: "card-image-label"
            }, i), o.a.createElement("div", {
                className: "image-or-icon"
            }, o.a.createElement(s.a, S), d && o.a.createElement("p", {
                className: "image-coming-soon-label"
            }, "Image Coming Soon"), o.a.createElement("div", {
                className: "spacer"
            }))), o.a.createElement("div", {
                className: "card-content"
            }, (null == y ? void 0 : y.metals) && o.a.createElement(p, {
                metals: y.metals
            }), o.a.createElement("div", {
                className: "rv-card-items",
                title: O
            }, f && f.map((function(e, t) {
                var n = e.title
                  , r = e.subtitle
                  , a = e.labGrownTitle
                  , i = e.available;
                return o.a.createElement("div", {
                    className: "four-cs-and-icons".concat(i ? "" : " unavailable"),
                    key: t
                }, o.a.createElement("div", {
                    className: "four-cs"
                }, o.a.createElement("div", {
                    className: "title-formatting".concat(i ? "" : " unavailable")
                }, a && o.a.createElement("div", {
                    class: "lab-grown-text"
                }, a), n), r && o.a.createElement("div", {
                    className: "subtitle-formatting"
                }, r)))
            }
            ))), b && o.a.createElement("span", {
                className: "price original-price".concat(E ? " variable-price" : "")
            }, o.a.createElement("p", {
                dangerouslySetInnerHTML: {
                    __html: "".concat(E ? "Starting at: " : "").concat(w)
                }
            })), g && o.a.createElement("span", {
                className: "price".concat(b ? " sale-price" : "").concat(E ? " variable-price" : "")
            }, o.a.createElement("p", {
                dangerouslySetInnerHTML: {
                    __html: "".concat((t = b,
                    n = E,
                    r = [],
                    t && r.push("now"),
                    n && r.push("starting at"),
                    r.length ? "".concat(r.join(" "), ":") : ""), " ").concat(g || "")
                }
            })), v && o.a.createElement(u.a, v)))
        }
        n.d(t, "a", (function() {
            return m
        }
        )),
        m.defaultProps = {
            isVisible: !0
        },
        m.propTypes = {
            cardPrice: i.a.object,
            cardLabel: i.a.string,
            imageUrl: i.a.string,
            imageComingSoon: i.a.bool,
            cardItems: i.a.array,
            availableCardItems: i.a.bool,
            isVisible: i.a.bool
        }
    },
    21: function(e, t, n) {
        "use strict";
        var r = n(44);
        e.exports = function(e, t, n, o, a) {
            var i = new Error(e);
            return r(i, t, n, o, a)
        }
    },
    22: function(e, t, n) {
        "use strict";
        var r = n(2);
        e.exports = function(e, t) {
            t = t || {};
            var n = {};
            return r.forEach(["url", "method", "params", "data"], (function(e) {
                void 0 !== t[e] && (n[e] = t[e])
            }
            )),
            r.forEach(["headers", "auth", "proxy"], (function(o) {
                r.isObject(t[o]) ? n[o] = r.deepMerge(e[o], t[o]) : void 0 !== t[o] ? n[o] = t[o] : r.isObject(e[o]) ? n[o] = r.deepMerge(e[o]) : void 0 !== e[o] && (n[o] = e[o])
            }
            )),
            r.forEach(["baseURL", "transformRequest", "transformResponse", "paramsSerializer", "timeout", "withCredentials", "adapter", "responseType", "xsrfCookieName", "xsrfHeaderName", "onUploadProgress", "onDownloadProgress", "maxContentLength", "validateStatus", "maxRedirects", "httpAgent", "httpsAgent", "cancelToken", "socketPath"], (function(r) {
                void 0 !== t[r] ? n[r] = t[r] : void 0 !== e[r] && (n[r] = e[r])
            }
            )),
            n
        }
    },
    23: function(e, t, n) {
        "use strict";
        function r(e) {
            this.message = e
        }
        r.prototype.toString = function() {
            return "Cancel" + (this.message ? ": " + this.message : "")
        }
        ,
        r.prototype.__CANCEL__ = !0,
        e.exports = r
    },
    26: function(e, t) {
        e.exports = {
            small: 600,
            "query-small": "only screen and (max-width: ".concat(599.9.toFixed(1), "px)"),
            medium: 850,
            "query-medium": "only screen and (min-width: ".concat(600, "px)"),
            large: 1e3,
            "query-large": "only screen and (min-width: ".concat(850, "px)"),
            "query-extra-large": "only screen and (min-width: ".concat(1e3, "px)")
        }
    },
    28: function(e, t) {
        !function(e, t) {
            "use strict";
            var n, r, o = {
                rootMargin: "256px 0px",
                threshold: .01,
                lazyImage: 'img[loading="lazy"]',
                lazyIframe: 'iframe[loading="lazy"]'
            }, a = "loading"in HTMLImageElement.prototype && "loading"in HTMLIFrameElement.prototype, i = "onscroll"in window;
            function c(e) {
                var t, n, r = [];
                "picture" === e.parentNode.tagName.toLowerCase() && ((n = (t = e.parentNode).querySelector("source[data-lazy-remove]")) && t.removeChild(n),
                r = Array.prototype.slice.call(e.parentNode.querySelectorAll("source"))),
                r.push(e),
                r.forEach((function(e) {
                    e.hasAttribute("data-lazy-srcset") && (e.setAttribute("srcset", e.getAttribute("data-lazy-srcset")),
                    e.removeAttribute("data-lazy-srcset"))
                }
                )),
                e.setAttribute("src", e.getAttribute("data-lazy-src")),
                e.removeAttribute("data-lazy-src")
            }
            function s(e) {
                var t = document.createElement("div");
                for (t.innerHTML = function(e) {
                    var t = e.textContent || e.innerHTML
                      , r = "data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 " + ((t.match(/width=['"](\d+)['"]/) || !1)[1] || 1) + " " + ((t.match(/height=['"](\d+)['"]/) || !1)[1] || 1) + "%27%3E%3C/svg%3E";
                    return !a && i && (void 0 === n ? t = t.replace(/(?:\r\n|\r|\n|\t| )src=/g, ' lazyload="1" src=') : ("picture" === e.parentNode.tagName.toLowerCase() && (t = '<source srcset="' + r + '" data-lazy-remove="true"></source>' + t),
                    t = t.replace(/(?:\r\n|\r|\n|\t| )srcset=/g, " data-lazy-srcset=").replace(/(?:\r\n|\r|\n|\t| )src=/g, ' src="' + r + '" data-lazy-src='))),
                    t
                }(e); t.firstChild; )
                    a || !i || void 0 === n || !t.firstChild.tagName || "img" !== t.firstChild.tagName.toLowerCase() && "iframe" !== t.firstChild.tagName.toLowerCase() || n.observe(t.firstChild),
                    e.parentNode.insertBefore(t.firstChild, e);
                e.parentNode.removeChild(e)
            }
            function u() {
                document.querySelectorAll("noscript.loading-lazy").forEach(s),
                void 0 !== window.matchMedia && window.matchMedia("print").addListener((function(e) {
                    e.matches && document.querySelectorAll(o.lazyImage + "[data-lazy-src]," + o.lazyIframe + "[data-lazy-src]").forEach((function(e) {
                        c(e)
                    }
                    ))
                }
                ))
            }
            "undefined" != typeof NodeList && NodeList.prototype && !NodeList.prototype.forEach && (NodeList.prototype.forEach = Array.prototype.forEach),
            "IntersectionObserver"in window && (n = new IntersectionObserver((function(e, t) {
                e.forEach((function(e) {
                    if (0 !== e.intersectionRatio) {
                        var n = e.target;
                        t.unobserve(n),
                        c(n)
                    }
                }
                ))
            }
            ),o)),
            r = "requestAnimationFrame"in window ? window.requestAnimationFrame : function(e) {
                e()
            }
            ,
            /comp|inter/.test(document.readyState) ? r(u) : "addEventListener"in document ? document.addEventListener("DOMContentLoaded", (function() {
                r(u)
            }
            )) : document.attachEvent("onreadystatechange", (function() {
                "complete" === document.readyState && u()
            }
            ))
        }()
    },
    29: function(e, t, n) {
        "use strict";
        n.r(t);
        var r = n(4);
        if (window && window.location && window.location.hostname) {
            var o = null !== window.location.hostname.match(/^(www|secure)/);
            n.p = o ? "".concat(Object(r.a)().cdnUrl, "/static/reactapps/") : "https://".concat(window.location.hostname, "/static/reactapps/")
        }
    },
    3: function(e, t, n) {
        "use strict";
        t.a = function() {
            try {
                return JSON.parse(document.getElementsByTagName("body")[0].getAttribute("data-userstate") || "{}")
            } catch (e) {
                return {}
            }
        }
    },
    30: function(e, t, n) {
        "use strict";
        var r, o, a, i, c;
        if (Object.defineProperty(t, "__esModule", {
            value: !0
        }),
        "undefined" == typeof window || "function" != typeof MessageChannel) {
            var s = null
              , u = null
              , l = function() {
                if (null !== s)
                    try {
                        var e = t.unstable_now();
                        s(!0, e),
                        s = null
                    } catch (e) {
                        throw setTimeout(l, 0),
                        e
                    }
            }
              , d = Date.now();
            t.unstable_now = function() {
                return Date.now() - d
            }
            ,
            r = function(e) {
                null !== s ? setTimeout(r, 0, e) : (s = e,
                setTimeout(l, 0))
            }
            ,
            o = function(e, t) {
                u = setTimeout(e, t)
            }
            ,
            a = function() {
                clearTimeout(u)
            }
            ,
            i = function() {
                return !1
            }
            ,
            c = t.unstable_forceFrameRate = function() {}
        } else {
            var f = window.performance
              , p = window.Date
              , m = window.setTimeout
              , h = window.clearTimeout
              , v = window.requestAnimationFrame
              , y = window.cancelAnimationFrame;
            if ("undefined" != typeof console && ("function" != typeof v && console.error("This browser doesn't support requestAnimationFrame. Make sure that you load a polyfill in older browsers. https://fb.me/react-polyfills"),
            "function" != typeof y && console.error("This browser doesn't support cancelAnimationFrame. Make sure that you load a polyfill in older browsers. https://fb.me/react-polyfills")),
            "object" == typeof f && "function" == typeof f.now)
                t.unstable_now = function() {
                    return f.now()
                }
                ;
            else {
                var b = p.now();
                t.unstable_now = function() {
                    return p.now() - b
                }
            }
            var g = !1
              , w = null
              , E = -1
              , O = 5
              , S = 0;
            i = function() {
                return t.unstable_now() >= S
            }
            ,
            c = function() {}
            ,
            t.unstable_forceFrameRate = function(e) {
                0 > e || 125 < e ? console.error("forceFrameRate takes a positive int between 0 and 125, forcing framerates higher than 125 fps is not unsupported") : O = 0 < e ? Math.floor(1e3 / e) : 33.33
            }
            ;
            var x = new MessageChannel
              , C = x.port2;
            x.port1.onmessage = function() {
                if (null !== w) {
                    var e = t.unstable_now();
                    S = e + O;
                    try {
                        w(!0, e) ? C.postMessage(null) : (g = !1,
                        w = null)
                    } catch (e) {
                        throw C.postMessage(null),
                        e
                    }
                } else
                    g = !1
            }
            ,
            r = function(e) {
                w = e,
                g || (g = !0,
                C.postMessage(null))
            }
            ,
            o = function(e, n) {
                E = m((function() {
                    e(t.unstable_now())
                }
                ), n)
            }
            ,
            a = function() {
                h(E),
                E = -1
            }
        }
        function I(e, t) {
            var n = e.length;
            e.push(t);
            e: for (; ; ) {
                var r = Math.floor((n - 1) / 2)
                  , o = e[r];
                if (!(void 0 !== o && 0 < T(o, t)))
                    break e;
                e[r] = t,
                e[n] = o,
                n = r
            }
        }
        function j(e) {
            return void 0 === (e = e[0]) ? null : e
        }
        function L(e) {
            var t = e[0];
            if (void 0 !== t) {
                var n = e.pop();
                if (n !== t) {
                    e[0] = n;
                    e: for (var r = 0, o = e.length; r < o; ) {
                        var a = 2 * (r + 1) - 1
                          , i = e[a]
                          , c = a + 1
                          , s = e[c];
                        if (void 0 !== i && 0 > T(i, n))
                            void 0 !== s && 0 > T(s, i) ? (e[r] = s,
                            e[c] = n,
                            r = c) : (e[r] = i,
                            e[a] = n,
                            r = a);
                        else {
                            if (!(void 0 !== s && 0 > T(s, n)))
                                break e;
                            e[r] = s,
                            e[c] = n,
                            r = c
                        }
                    }
                }
                return t
            }
            return null
        }
        function T(e, t) {
            var n = e.sortIndex - t.sortIndex;
            return 0 !== n ? n : e.id - t.id
        }
        var A = []
          , P = []
          , k = 1
          , N = null
          , _ = 3
          , R = !1
          , M = !1
          , D = !1;
        function F(e) {
            for (var t = j(P); null !== t; ) {
                if (null === t.callback)
                    L(P);
                else {
                    if (!(t.startTime <= e))
                        break;
                    L(P),
                    t.sortIndex = t.expirationTime,
                    I(A, t)
                }
                t = j(P)
            }
        }
        function U(e) {
            if (D = !1,
            F(e),
            !M)
                if (null !== j(A))
                    M = !0,
                    r(B);
                else {
                    var t = j(P);
                    null !== t && o(U, t.startTime - e)
                }
        }
        function B(e, n) {
            M = !1,
            D && (D = !1,
            a()),
            R = !0;
            var r = _;
            try {
                for (F(n),
                N = j(A); null !== N && (!(N.expirationTime > n) || e && !i()); ) {
                    var c = N.callback;
                    if (null !== c) {
                        N.callback = null,
                        _ = N.priorityLevel;
                        var s = c(N.expirationTime <= n);
                        n = t.unstable_now(),
                        "function" == typeof s ? N.callback = s : N === j(A) && L(A),
                        F(n)
                    } else
                        L(A);
                    N = j(A)
                }
                if (null !== N)
                    var u = !0;
                else {
                    var l = j(P);
                    null !== l && o(U, l.startTime - n),
                    u = !1
                }
                return u
            } finally {
                N = null,
                _ = r,
                R = !1
            }
        }
        function W(e) {
            switch (e) {
            case 1:
                return -1;
            case 2:
                return 250;
            case 5:
                return 1073741823;
            case 4:
                return 1e4;
            default:
                return 5e3
            }
        }
        var z = c;
        t.unstable_ImmediatePriority = 1,
        t.unstable_UserBlockingPriority = 2,
        t.unstable_NormalPriority = 3,
        t.unstable_IdlePriority = 5,
        t.unstable_LowPriority = 4,
        t.unstable_runWithPriority = function(e, t) {
            switch (e) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                break;
            default:
                e = 3
            }
            var n = _;
            _ = e;
            try {
                return t()
            } finally {
                _ = n
            }
        }
        ,
        t.unstable_next = function(e) {
            switch (_) {
            case 1:
            case 2:
            case 3:
                var t = 3;
                break;
            default:
                t = _
            }
            var n = _;
            _ = t;
            try {
                return e()
            } finally {
                _ = n
            }
        }
        ,
        t.unstable_scheduleCallback = function(e, n, i) {
            var c = t.unstable_now();
            if ("object" == typeof i && null !== i) {
                var s = i.delay;
                s = "number" == typeof s && 0 < s ? c + s : c,
                i = "number" == typeof i.timeout ? i.timeout : W(e)
            } else
                i = W(e),
                s = c;
            return e = {
                id: k++,
                callback: n,
                priorityLevel: e,
                startTime: s,
                expirationTime: i = s + i,
                sortIndex: -1
            },
            s > c ? (e.sortIndex = s,
            I(P, e),
            null === j(A) && e === j(P) && (D ? a() : D = !0,
            o(U, s - c))) : (e.sortIndex = i,
            I(A, e),
            M || R || (M = !0,
            r(B))),
            e
        }
        ,
        t.unstable_cancelCallback = function(e) {
            e.callback = null
        }
        ,
        t.unstable_wrapCallback = function(e) {
            var t = _;
            return function() {
                var n = _;
                _ = t;
                try {
                    return e.apply(this, arguments)
                } finally {
                    _ = n
                }
            }
        }
        ,
        t.unstable_getCurrentPriorityLevel = function() {
            return _
        }
        ,
        t.unstable_shouldYield = function() {
            var e = t.unstable_now();
            F(e);
            var n = j(A);
            return n !== N && null !== N && null !== n && null !== n.callback && n.startTime <= e && n.expirationTime < N.expirationTime || i()
        }
        ,
        t.unstable_requestPaint = z,
        t.unstable_continueExecution = function() {
            M || R || (M = !0,
            r(B))
        }
        ,
        t.unstable_pauseExecution = function() {}
        ,
        t.unstable_getFirstCallbackNode = function() {
            return j(A)
        }
        ,
        t.unstable_Profiling = null
    },
    307: function(e, t, n) {},
    31: function(e, t, n) {
        "use strict";
        n.r(t);
        function r(e) {
            return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function o() {
            if ("function" != typeof WeakMap)
                return null;
            var e = new WeakMap;
            return o = function() {
                return e
            }
            ,
            e
        }
        var a = [];
        "loading"in HTMLImageElement.prototype != 1 && a.push(Promise.resolve().then((function() {
            return function(e) {
                if (e && e.__esModule)
                    return e;
                if (null === e || "object" !== r(e) && "function" != typeof e)
                    return {
                        default: e
                    };
                var t = o();
                if (t && t.has(e))
                    return t.get(e);
                var n = {}
                  , a = Object.defineProperty && Object.getOwnPropertyDescriptor;
                for (var i in e)
                    if (Object.prototype.hasOwnProperty.call(e, i)) {
                        var c = a ? Object.getOwnPropertyDescriptor(e, i) : null;
                        c && (c.get || c.set) ? Object.defineProperty(n, i, c) : n[i] = e[i]
                    }
                return n.default = e,
                t && t.set(e, n),
                n
            }(n(28))
        }
        ))),
        Promise.all(a).catch((function(e) {
            console.error("Failed fetching polyfills", e)
        }
        ))
    },
    33: function(e, t) {
        var n, r, o = e.exports = {};
        function a() {
            throw new Error("setTimeout has not been defined")
        }
        function i() {
            throw new Error("clearTimeout has not been defined")
        }
        function c(e) {
            if (n === setTimeout)
                return setTimeout(e, 0);
            if ((n === a || !n) && setTimeout)
                return n = setTimeout,
                setTimeout(e, 0);
            try {
                return n(e, 0)
            } catch (t) {
                try {
                    return n.call(null, e, 0)
                } catch (t) {
                    return n.call(this, e, 0)
                }
            }
        }
        !function() {
            try {
                n = "function" == typeof setTimeout ? setTimeout : a
            } catch (e) {
                n = a
            }
            try {
                r = "function" == typeof clearTimeout ? clearTimeout : i
            } catch (e) {
                r = i
            }
        }();
        var s, u = [], l = !1, d = -1;
        function f() {
            l && s && (l = !1,
            s.length ? u = s.concat(u) : d = -1,
            u.length && p())
        }
        function p() {
            if (!l) {
                var e = c(f);
                l = !0;
                for (var t = u.length; t; ) {
                    for (s = u,
                    u = []; ++d < t; )
                        s && s[d].run();
                    d = -1,
                    t = u.length
                }
                s = null,
                l = !1,
                function(e) {
                    if (r === clearTimeout)
                        return clearTimeout(e);
                    if ((r === i || !r) && clearTimeout)
                        return r = clearTimeout,
                        clearTimeout(e);
                    try {
                        r(e)
                    } catch (t) {
                        try {
                            return r.call(null, e)
                        } catch (t) {
                            return r.call(this, e)
                        }
                    }
                }(e)
            }
        }
        function m(e, t) {
            this.fun = e,
            this.array = t
        }
        function h() {}
        o.nextTick = function(e) {
            var t = new Array(arguments.length - 1);
            if (arguments.length > 1)
                for (var n = 1; n < arguments.length; n++)
                    t[n - 1] = arguments[n];
            u.push(new m(e,t)),
            1 !== u.length || l || c(p)
        }
        ,
        m.prototype.run = function() {
            this.fun.apply(null, this.array)
        }
        ,
        o.title = "browser",
        o.browser = !0,
        o.env = {},
        o.argv = [],
        o.version = "",
        o.versions = {},
        o.on = h,
        o.addListener = h,
        o.once = h,
        o.off = h,
        o.removeListener = h,
        o.removeAllListeners = h,
        o.emit = h,
        o.prependListener = h,
        o.prependOnceListener = h,
        o.listeners = function(e) {
            return []
        }
        ,
        o.binding = function(e) {
            throw new Error("process.binding is not supported")
        }
        ,
        o.cwd = function() {
            return "/"
        }
        ,
        o.chdir = function(e) {
            throw new Error("process.chdir is not supported")
        }
        ,
        o.umask = function() {
            return 0
        }
    },
    336: function(e, t, n) {},
    35: function(e, t) {
        e.exports = {
            small: 600,
            "query-small": "only screen and (max-width: ".concat(599.9.toFixed(1), "px)"),
            medium: 850,
            "query-medium": "only screen and (min-width: ".concat(600, "px)"),
            large: 1e3,
            "query-large": "only screen and (min-width: ".concat(850, "px)"),
            "query-extra-large": "only screen and (min-width: ".concat(1e3, "px)")
        }
    },
    358: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return l
        }
        ));
        var r = n(0)
          , o = n.n(r)
          , a = n(1)
          , i = n.n(a)
          , c = (n(480),
        n(126))
          , s = n(208);
        function u() {
            return (u = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n)
                        Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            }
            ).apply(this, arguments)
        }
        function l(e) {
            var t, n, r, a = e.trackTargetCardIndex, i = e.cardIndex, l = e.cardsTotal, d = e.cardStyles, f = e.detailsUrl, p = e.touchEndHandler, m = e.clickHandler, h = e.cardWrapperInteraction, v = e.wishListInfo, y = e.rel, b = void 0 === y ? null : y, g = e.showItemNumberLabel, w = void 0 === g || g, E = e.tabIndex, O = void 0 === E ? "" : E, S = e.ariaHidden, x = void 0 === S ? "false" : S;
            function C() {
                i && a(i)
            }
            return o.a.createElement("div", (r = "listitem",
            (n = "role")in (t = {
                className: "product-card-wrapper",
                role: "group",
                style: d,
                onMouseDown: C,
                onMouseUp: h,
                onTouchStart: C,
                onTouchEnd: h
            }) ? Object.defineProperty(t, n, {
                value: r,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[n] = r,
            t), o.a.createElement("a", {
                className: "product-card",
                onTouchEnd: p,
                onClick: m,
                href: f,
                "data-details-url": f,
                rel: b,
                "aria-hidden": x,
                tabIndex: O
            }, w && o.a.createElement("span", {
                className: "screen-reader-only"
            }, "item ".concat(i + 1, " of ").concat(l)), e.children ? e.children : o.a.createElement(s.a, u({}, e, {
                key: f
            })), v && o.a.createElement("div", {
                className: "add-remove-heart-container"
            }, o.a.createElement(c.a, u({}, v, {
                tabIndex: O,
                additionalAddParameters: {
                    track: "slider"
                }
            })))))
        }
        l.defaultProps = {
            cardStyles: {},
            trackTargetCardIndex: function() {},
            touchEndHandler: function() {},
            clickHandler: function() {},
            cardWrapperInteraction: function() {}
        },
        l.propTypes = {
            trackTargetCardIndex: i.a.func,
            cardIndex: i.a.number,
            cardStyles: i.a.object,
            detailsUrl: i.a.string,
            touchEndHandler: i.a.func,
            clickHandler: i.a.func,
            cardWrapperInteraction: i.a.func
        }
    },
    36: function(e, t, n) {
        "use strict";
        var r = n(2)
          , o = n(16)
          , a = n(38)
          , i = n(22);
        function c(e) {
            var t = new a(e)
              , n = o(a.prototype.request, t);
            return r.extend(n, a.prototype, t),
            r.extend(n, t),
            n
        }
        var s = c(n(19));
        s.Axios = a,
        s.create = function(e) {
            return c(i(s.defaults, e))
        }
        ,
        s.Cancel = n(23),
        s.CancelToken = n(50),
        s.isCancel = n(18),
        s.all = function(e) {
            return Promise.all(e)
        }
        ,
        s.spread = n(51),
        e.exports = s,
        e.exports.default = s
    },
    37: function(e, t) {
        e.exports = function(e) {
            return null != e && null != e.constructor && "function" == typeof e.constructor.isBuffer && e.constructor.isBuffer(e)
        }
    },
    38: function(e, t, n) {
        "use strict";
        var r = n(2)
          , o = n(17)
          , a = n(39)
          , i = n(40)
          , c = n(22);
        function s(e) {
            this.defaults = e,
            this.interceptors = {
                request: new a,
                response: new a
            }
        }
        s.prototype.request = function(e) {
            "string" == typeof e ? (e = arguments[1] || {}).url = arguments[0] : e = e || {},
            (e = c(this.defaults, e)).method = e.method ? e.method.toLowerCase() : "get";
            var t = [i, void 0]
              , n = Promise.resolve(e);
            for (this.interceptors.request.forEach((function(e) {
                t.unshift(e.fulfilled, e.rejected)
            }
            )),
            this.interceptors.response.forEach((function(e) {
                t.push(e.fulfilled, e.rejected)
            }
            )); t.length; )
                n = n.then(t.shift(), t.shift());
            return n
        }
        ,
        s.prototype.getUri = function(e) {
            return e = c(this.defaults, e),
            o(e.url, e.params, e.paramsSerializer).replace(/^\?/, "")
        }
        ,
        r.forEach(["delete", "get", "head", "options"], (function(e) {
            s.prototype[e] = function(t, n) {
                return this.request(r.merge(n || {}, {
                    method: e,
                    url: t
                }))
            }
        }
        )),
        r.forEach(["post", "put", "patch"], (function(e) {
            s.prototype[e] = function(t, n, o) {
                return this.request(r.merge(o || {}, {
                    method: e,
                    url: t,
                    data: n
                }))
            }
        }
        )),
        e.exports = s
    },
    39: function(e, t, n) {
        "use strict";
        var r = n(2);
        function o() {
            this.handlers = []
        }
        o.prototype.use = function(e, t) {
            return this.handlers.push({
                fulfilled: e,
                rejected: t
            }),
            this.handlers.length - 1
        }
        ,
        o.prototype.eject = function(e) {
            this.handlers[e] && (this.handlers[e] = null)
        }
        ,
        o.prototype.forEach = function(e) {
            r.forEach(this.handlers, (function(t) {
                null !== t && e(t)
            }
            ))
        }
        ,
        e.exports = o
    },
    4: function(e, t, n) {
        "use strict";
        function r() {
            var e = "https://bnsec.bluenile.com/bluenile";
            try {
                var t = JSON.parse(document.getElementsByTagName("body")[0].getAttribute("data-pagestate") || "{}");
                return t.scene7Url = t.scene7Url || e,
                t
            } catch (t) {
                return {
                    cdnUrl: "https://bnsec.bluenile.com/bnsecure",
                    scene7Url: e
                }
            }
        }
        n.d(t, "a", (function() {
            return r
        }
        ))
    },
    40: function(e, t, n) {
        "use strict";
        var r = n(2)
          , o = n(41)
          , a = n(18)
          , i = n(19)
          , c = n(48)
          , s = n(49);
        function u(e) {
            e.cancelToken && e.cancelToken.throwIfRequested()
        }
        e.exports = function(e) {
            return u(e),
            e.baseURL && !c(e.url) && (e.url = s(e.baseURL, e.url)),
            e.headers = e.headers || {},
            e.data = o(e.data, e.headers, e.transformRequest),
            e.headers = r.merge(e.headers.common || {}, e.headers[e.method] || {}, e.headers || {}),
            r.forEach(["delete", "get", "head", "post", "put", "patch", "common"], (function(t) {
                delete e.headers[t]
            }
            )),
            (e.adapter || i.adapter)(e).then((function(t) {
                return u(e),
                t.data = o(t.data, t.headers, e.transformResponse),
                t
            }
            ), (function(t) {
                return a(t) || (u(e),
                t && t.response && (t.response.data = o(t.response.data, t.response.headers, e.transformResponse))),
                Promise.reject(t)
            }
            ))
        }
    },
    41: function(e, t, n) {
        "use strict";
        var r = n(2);
        e.exports = function(e, t, n) {
            return r.forEach(n, (function(n) {
                e = n(e, t)
            }
            )),
            e
        }
    },
    42: function(e, t, n) {
        "use strict";
        var r = n(2);
        e.exports = function(e, t) {
            r.forEach(e, (function(n, r) {
                r !== t && r.toUpperCase() === t.toUpperCase() && (e[t] = n,
                delete e[r])
            }
            ))
        }
    },
    43: function(e, t, n) {
        "use strict";
        var r = n(21);
        e.exports = function(e, t, n) {
            var o = n.config.validateStatus;
            !o || o(n.status) ? e(n) : t(r("Request failed with status code " + n.status, n.config, null, n.request, n))
        }
    },
    44: function(e, t, n) {
        "use strict";
        e.exports = function(e, t, n, r, o) {
            return e.config = t,
            n && (e.code = n),
            e.request = r,
            e.response = o,
            e.isAxiosError = !0,
            e.toJSON = function() {
                return {
                    message: this.message,
                    name: this.name,
                    description: this.description,
                    number: this.number,
                    fileName: this.fileName,
                    lineNumber: this.lineNumber,
                    columnNumber: this.columnNumber,
                    stack: this.stack,
                    config: this.config,
                    code: this.code
                }
            }
            ,
            e
        }
    },
    45: function(e, t, n) {
        "use strict";
        var r = n(2)
          , o = ["age", "authorization", "content-length", "content-type", "etag", "expires", "from", "host", "if-modified-since", "if-unmodified-since", "last-modified", "location", "max-forwards", "proxy-authorization", "referer", "retry-after", "user-agent"];
        e.exports = function(e) {
            var t, n, a, i = {};
            return e ? (r.forEach(e.split("\n"), (function(e) {
                if (a = e.indexOf(":"),
                t = r.trim(e.substr(0, a)).toLowerCase(),
                n = r.trim(e.substr(a + 1)),
                t) {
                    if (i[t] && o.indexOf(t) >= 0)
                        return;
                    i[t] = "set-cookie" === t ? (i[t] ? i[t] : []).concat([n]) : i[t] ? i[t] + ", " + n : n
                }
            }
            )),
            i) : i
        }
    },
    46: function(e, t, n) {
        "use strict";
        var r = n(2);
        e.exports = r.isStandardBrowserEnv() ? function() {
            var e, t = /(msie|trident)/i.test(navigator.userAgent), n = document.createElement("a");
            function o(e) {
                var r = e;
                return t && (n.setAttribute("href", r),
                r = n.href),
                n.setAttribute("href", r),
                {
                    href: n.href,
                    protocol: n.protocol ? n.protocol.replace(/:$/, "") : "",
                    host: n.host,
                    search: n.search ? n.search.replace(/^\?/, "") : "",
                    hash: n.hash ? n.hash.replace(/^#/, "") : "",
                    hostname: n.hostname,
                    port: n.port,
                    pathname: "/" === n.pathname.charAt(0) ? n.pathname : "/" + n.pathname
                }
            }
            return e = o(window.location.href),
            function(t) {
                var n = r.isString(t) ? o(t) : t;
                return n.protocol === e.protocol && n.host === e.host
            }
        }() : function() {
            return !0
        }
    },
    47: function(e, t, n) {
        "use strict";
        var r = n(2);
        e.exports = r.isStandardBrowserEnv() ? {
            write: function(e, t, n, o, a, i) {
                var c = [];
                c.push(e + "=" + encodeURIComponent(t)),
                r.isNumber(n) && c.push("expires=" + new Date(n).toGMTString()),
                r.isString(o) && c.push("path=" + o),
                r.isString(a) && c.push("domain=" + a),
                !0 === i && c.push("secure"),
                document.cookie = c.join("; ")
            },
            read: function(e) {
                var t = document.cookie.match(new RegExp("(^|;\\s*)(" + e + ")=([^;]*)"));
                return t ? decodeURIComponent(t[3]) : null
            },
            remove: function(e) {
                this.write(e, "", Date.now() - 864e5)
            }
        } : {
            write: function() {},
            read: function() {
                return null
            },
            remove: function() {}
        }
    },
    48: function(e, t, n) {
        "use strict";
        e.exports = function(e) {
            return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(e)
        }
    },
    480: function(e, t, n) {},
    49: function(e, t, n) {
        "use strict";
        e.exports = function(e, t) {
            return t ? e.replace(/\/+$/, "") + "/" + t.replace(/^\/+/, "") : e
        }
    },
    5: function(e, t, n) {
        e.exports = n(36)
    },
    50: function(e, t, n) {
        "use strict";
        var r = n(23);
        function o(e) {
            if ("function" != typeof e)
                throw new TypeError("executor must be a function.");
            var t;
            this.promise = new Promise((function(e) {
                t = e
            }
            ));
            var n = this;
            e((function(e) {
                n.reason || (n.reason = new r(e),
                t(n.reason))
            }
            ))
        }
        o.prototype.throwIfRequested = function() {
            if (this.reason)
                throw this.reason
        }
        ,
        o.source = function() {
            var e;
            return {
                token: new o((function(t) {
                    e = t
                }
                )),
                cancel: e
            }
        }
        ,
        e.exports = o
    },
    51: function(e, t, n) {
        "use strict";
        e.exports = function(e) {
            return function(t) {
                return e.apply(null, t)
            }
        }
    },
    52: function(e, t, n) {
        "use strict";
        var r = n(0)
          , o = n.n(r)
          , a = n(5)
          , i = n.n(a);
        function c() {
            var e = "https://bnsec.bluenile.com/bluenile";
            try {
                var t = JSON.parse(document.getElementsByTagName("body")[0].getAttribute("data-pagestate") || "{}");
                return t.scene7Url = t.scene7Url || e,
                t
            } catch (t) {
                return {
                    cdnUrl: "https://bnsec.bluenile.com/bnsecure",
                    scene7Url: e
                }
            }
        }
        var s = function() {
            try {
                return JSON.parse(document.getElementsByTagName("body")[0].getAttribute("data-userstate") || "{}")
            } catch (e) {
                return {}
            }
        };
        var u = c().pageId
          , l = i.a.create({
            headers: {
                "x-bn-pageid": u
            }
        });
        function d() {
            return !("undefined" == typeof window || !window.document || !window.document.createElement)
        }
        function f(e) {
            return Object.keys(e).map((function(t) {
                return "".concat(encodeURIComponent(t), "=").concat(encodeURIComponent(e[t]))
            }
            )).join("&")
        }
        function p(e, t) {
            var n = e.replace(/^.*?\/api\/public\//, "")
              , r = s()
              , o = {
                country: r.countryCode,
                language: r.languageCode,
                productSet: r.productSet,
                currency: r.currencyCode
            }
              , a = Object.assign({}, o, t);
            return n + (-1 === n.indexOf("?") ? "?" : "&") + f(a)
        }
        function m(e, t, n, r, o) {
            var a = {};
            return o && o.message ? a.message = o.message.toString() : a.message = e,
            o instanceof Error && (o.stack ? a.stackTrace = (o.stack.toString() || "").split(/[\n\r]/g).join("\\n") : window.printStackTrace && (a.stackTrace = window.printStackTrace(o))),
            e && e.description && (a.description = e.description),
            t && (a.file = t),
            n && (a.line = n),
            r && (a.column = r),
            a.timeStamp = (new Date).getTime(),
            a.userAgent = navigator.userAgent,
            Object.assign({}, a, s || {}, c || {}),
            a
        }
        function h(e) {
            return function(e, t) {
                var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
                return "/api/".concat(window.location.host.indexOf("secure") >= 0 && !n ? "secure" : "public", "/").concat(p(e, t))
            }(e, {}, !0)
        }
        function v(e) {
            var t;
            try {
                t = function e(t) {
                    var n, r = "{";
                    for (n in t)
                        t.hasOwnProperty(n) && (r += '"'.concat(n, '": '),
                        r += "lastIdentifier" === n ? e(t[n]) : '"'.concat((t[n] || "").toString().replace(/"/g, '\\"'), '"'),
                        r += ",");
                    return r = r.slice(0, -1),
                    r += "}"
                }(e)
            } catch (n) {
                t = e.toString()
            }
            l.post(h("log-client-error"), {
                data: t,
                headers: {
                    "Content-Type": "application/json; charset=utf-8"
                }
            }).catch((function() {
                return function(e) {
                    var t = new Image(1,1);
                    t.src = "".concat(h("log-client-error-pixel"), "&error=").concat(encodeURI(e)),
                    t.onload = function() {}
                }(t)
            }
            ))
        }
        var y = n(35)
          , b = n.n(y)
          , g = n(26)
          , w = n.n(g);
        function E(e) {
            return e && "[object Function]" === {}.toString.call(e)
        }
        function O(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function S(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var x = "all"
          , C = "small"
          , I = "medium"
          , j = "large"
          , L = "extra-large"
          , T = "none";
        function A() {
            return d() && E(window.matchMedia) && window.matchMedia(w.a["query-large"]).matches
        }
        function P() {
            return d() && E(window.matchMedia) && window.matchMedia(w.a["query-extra-large"]).matches
        }
        function k() {
            if (d()) {
                if (d() && E(window.matchMedia) && window.matchMedia(w.a["query-small"]).matches)
                    return C;
                if (d() && E(window.matchMedia) && window.matchMedia(w.a["query-medium"]).matches && !A())
                    return I;
                if (A() && !P())
                    return j;
                if (P())
                    return L
            }
            return T
        }
        var N = function() {
            function e() {
                var t, n = this;
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, e),
                S(this, "destruct", (function() {
                    return window.removeEventListener("resize", n.resizeListener)
                }
                )),
                this.fns = (S(t = {}, x, []),
                S(t, C, []),
                S(t, I, []),
                S(t, j, []),
                S(t, L, []),
                t);
                var r, o = k();
                this.resizeListener = function() {
                    clearTimeout(r),
                    r = setTimeout((function() {
                        var e = k();
                        e !== o && [].concat(n.fns[e]).concat(n.fns[x]).forEach((function(t) {
                            return t(e)
                        }
                        )),
                        o = k()
                    }
                    ), 100)
                }
                ,
                this.removeListener = function() {
                    return window.removeEventListener("resize", n.resizeListener)
                }
                ,
                window && window.addEventListener && window.addEventListener("resize", this.resizeListener)
            }
            var t, n, r;
            return t = e,
            (n = [{
                key: "addFnForSmallBreakpoint",
                value: function(e) {
                    this.fns[C].push(e)
                }
            }, {
                key: "addFnForMediumBreakpoint",
                value: function(e) {
                    this.fns[I].push(e)
                }
            }, {
                key: "addFnForLargeBreakpoint",
                value: function(e) {
                    this.fns[j].push(e)
                }
            }, {
                key: "addFnForExtraLargeBreakpoint",
                value: function(e) {
                    this.fns[L].push(e)
                }
            }, {
                key: "addFnForAllBreakpoints",
                value: function(e) {
                    this.fns[x].push(e)
                }
            }]) && O(t.prototype, n),
            r && O(t, r),
            e
        }();
        function _(e) {
            return (_ = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function R() {
            return (R = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n)
                        Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            }
            ).apply(this, arguments)
        }
        function M(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function D(e, t) {
            return (D = Object.setPrototypeOf || function(e, t) {
                return e.__proto__ = t,
                e
            }
            )(e, t)
        }
        function F(e) {
            var t = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct)
                    return !1;
                if (Reflect.construct.sham)
                    return !1;
                if ("function" == typeof Proxy)
                    return !0;
                try {
                    return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}
                    ))),
                    !0
                } catch (e) {
                    return !1
                }
            }();
            return function() {
                var n, r = W(e);
                if (t) {
                    var o = W(this).constructor;
                    n = Reflect.construct(r, arguments, o)
                } else
                    n = r.apply(this, arguments);
                return U(this, n)
            }
        }
        function U(e, t) {
            return !t || "object" !== _(t) && "function" != typeof t ? B(e) : t
        }
        function B(e) {
            if (void 0 === e)
                throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }
        function W(e) {
            return (W = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                return e.__proto__ || Object.getPrototypeOf(e)
            }
            )(e)
        }
        function z(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var q = "https://bnsec.bluenile.com/bnsecure/ai/pxl.gif"
          , V = function(e) {
            !function(e, t) {
                if ("function" != typeof t && null !== t)
                    throw new TypeError("Super expression must either be null or a function");
                e.prototype = Object.create(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }),
                t && D(e, t)
            }(c, e);
            var t, n, a, i = F(c);
            function c(e) {
                var t;
                !function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, c),
                z(B(t = i.call(this, e)), "imageSrc", null),
                z(B(t), "setImageSrc", (function() {
                    var e = t.props
                      , n = e.url
                      , r = e.urlSmall
                      , o = e.urlMedium
                      , a = e.urlLarge
                      , i = q;
                    if (t.isResponsiveImage())
                        switch (k()) {
                        case C:
                            i = r;
                            break;
                        case I:
                            i = o;
                            break;
                        default:
                            i = a
                        }
                    else
                        n && (i = n);
                    t.imageSrc = i
                }
                )),
                z(B(t), "isResponsiveImage", (function() {
                    var e, n, r, o, a, i = t.props, c = i.url, s = i.urlSmall, u = i.urlMedium, l = i.urlLarge, f = s && u && l;
                    return c || f || (e = "At least one url was provided but not all of them were provided.\n        url: ".concat(c, ", urlSmall: ").concat(s, ", urlMedium: ").concat(u, ", urlLarge: ").concat(l),
                    d() && v(m(e, n, r, o, a))),
                    f
                }
                )),
                z(B(t), "renderSources", (function() {
                    var e = {
                        large: {
                            media: b.a["query-large"],
                            "data-media": "large",
                            srcset: t.props.urlLarge
                        },
                        medium: {
                            media: b.a["query-medium"],
                            "data-media": "medium",
                            srcset: t.props.urlMedium
                        },
                        small: {
                            media: b.a["query-small"],
                            "data-media": "small",
                            srcset: t.props.urlSmall
                        }
                    }
                      , n = Object.values(e).map((function(e) {
                        return o.a.createElement("source", R({
                            key: e["data-media"]
                        }, e))
                    }
                    ));
                    return o.a.createElement(o.a.Fragment, null, n)
                }
                )),
                z(B(t), "renderImg", (function() {
                    var e = {
                        id: t.props.id,
                        "data-action": t.props.action,
                        title: t.props.title,
                        height: t.props.height,
                        width: t.props.width,
                        draggable: t.props.draggable
                    };
                    return t.isResponsiveImage() ? (e["data-large-url"] = t.props.urlLarge,
                    e["data-medium-url"] = t.props.urlLarge,
                    e["data-small-url"] = t.props.urlLarge,
                    e.src = t.imageSrc) : t.props.url && (e.src = t.props.url ? t.props.url : q),
                    t.props.includeItemprop && (e.itemprop = "image"),
                    o.a.createElement("img", R({
                        alt: t.props.alt
                    }, e, {
                        className: t.props.className,
                        "aria-hidden": t.props["aria-hidden"]
                    }))
                }
                )),
                z(B(t), "componentDidMount", (function() {
                    t.state.visible || (t.intersectionObserver = new IntersectionObserver(t.handleIntersection,{
                        rootMargin: "150px"
                    }),
                    t.intersectionObserver.observe(t.visibleIndicator.current)),
                    t.isResponsiveImage() && !window.HTMLPictureElement && (t.mediaQueryWatcher = new N,
                    t.mediaQueryWatcher.addFnForAllBreakpoints((function() {
                        return t.setImageSrc()
                    }
                    )))
                }
                )),
                z(B(t), "handleIntersection", (function(e) {
                    e.some((function(e) {
                        return e.isIntersecting
                    }
                    )) && (t.setState((function() {
                        return {
                            visible: !0
                        }
                    }
                    )),
                    t.intersectionObserver.disconnect())
                }
                )),
                z(B(t), "componentWillUnmount", (function() {
                    var e;
                    null === (e = t.intersectionObserver) || void 0 === e || e.disconnect()
                }
                )),
                t.setImageSrc(),
                t.visibleIndicator = Object(r.createRef)();
                var n = "undefined" != typeof window && "IntersectionObserver"in window
                  , a = !0 === e.bnLazyLoad && (n || !d());
                return t.state = {
                    visible: !a
                },
                t
            }
            return t = c,
            (n = [{
                key: "render",
                value: function() {
                    var e = this.props.imageWrapper || o.a.Fragment;
                    return this.isResponsiveImage() ? o.a.createElement("picture", {
                        ref: this.visibleIndicator
                    }, o.a.createElement(e, null, this.renderSources(), this.state.visible && this.renderImg())) : o.a.createElement(e, null, o.a.createElement("div", {
                        ref: this.visibleIndicator
                    }), this.state.visible && this.renderImg())
                }
            }]) && M(t.prototype, n),
            a && M(t, a),
            c
        }(r.Component);
        z(V, "defaultProps", {
            bnLazyLoad: !1
        });
        t.a = V
    },
    53: function(e, t, n) {
        "use strict";
        n.d(t, "d", (function() {
            return o
        }
        )),
        n.d(t, "a", (function() {
            return a
        }
        )),
        n.d(t, "c", (function() {
            return i
        }
        )),
        n.d(t, "b", (function() {
            return c
        }
        ));
        var r = n(65)
          , o = new (n.n(r).a)
          , a = Object.freeze({
            INCREMENT_COUNT: Symbol("INCREMENT_COUNT"),
            DECREMENT_COUNT: Symbol("DECREMENT_COUNT")
        });
        function i() {
            o.emit(a.INCREMENT_COUNT)
        }
        function c() {
            o.emit(a.DECREMENT_COUNT)
        }
    },
    55: function(e, t, n) {
        "use strict";
        var r = n(56);
        function o() {}
        function a() {}
        a.resetWarningCache = o,
        e.exports = function() {
            function e(e, t, n, o, a, i) {
                if (i !== r) {
                    var c = new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");
                    throw c.name = "Invariant Violation",
                    c
                }
            }
            function t() {
                return e
            }
            e.isRequired = e;
            var n = {
                array: e,
                bool: e,
                func: e,
                number: e,
                object: e,
                string: e,
                symbol: e,
                any: e,
                arrayOf: t,
                element: e,
                elementType: e,
                instanceOf: t,
                node: e,
                objectOf: t,
                oneOf: t,
                oneOfType: t,
                shape: t,
                exact: t,
                checkPropTypes: a,
                resetWarningCache: o
            };
            return n.PropTypes = n,
            n
        }
    },
    56: function(e, t, n) {
        "use strict";
        e.exports = "SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"
    },
    599: function(e, t, n) {
        "use strict";
        var r = n(0)
          , o = n.n(r)
          , a = n(1)
          , i = n.n(a)
          , c = n(269)
          , s = n.n(c)
          , u = n(77)
          , l = n(69)
          , d = n(112)
          , f = n(358)
          , p = n(86)
          , m = n.n(p)
          , h = n(10)
          , v = n(80);
        function y(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                n.push.apply(n, r)
            }
            return n
        }
        function b(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? y(Object(n), !0).forEach((function(t) {
                    g(e, t, n[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : y(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }
                ))
            }
            return e
        }
        function g(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var w = b({}, m.a, {
            "query-extra-small": "only screen and (max-width: ".concat(384, "px)")
        })
          , E = b({}, v.a, {
            EXTRA_SMALL: "extra-small"
        });
        function O() {
            return Object(h.a)() && window.matchMedia(w["query-extra-small"]).matches
        }
        function S() {
            return Object(h.a)() && window.matchMedia ? O() ? E.EXTRA_SMALL : !O() && Object(v.g)() ? E.SMALL : Object(v.f)() && !Object(v.e)() ? E.MEDIUM : Object(v.e)() && !Object(v.d)() ? E.LARGE : Object(v.d)() ? E.EXTRA_LARGE : E.NONE : E.NONE
        }
        function x(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                n.push.apply(n, r)
            }
            return n
        }
        function C(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? x(Object(n), !0).forEach((function(t) {
                    I(e, t, n[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : x(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }
                ))
            }
            return e
        }
        function I(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var j = {
            SLIDE_ON_MOBILE: {
                action: "slide on mobile"
            },
            SLIDE_ON_DESKTOP: {
                action: "slide on desktop"
            },
            PEEKING_CARD_DECREMENT: {
                action: "peeking card left-slide"
            },
            PEEKING_CARD_INCREMENT: {
                action: "peeking card right-slide"
            },
            ARROW_FULL_SCROLL: {
                action: "arrow full-row scroll"
            },
            TRIGGER_SEE_ALL_LINK: {
                action: "see all link"
            }
        };
        var L = n(64);
        n(637);
        function T(e) {
            return (T = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function A() {
            return (A = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n)
                        Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            }
            ).apply(this, arguments)
        }
        function P(e, t) {
            var n = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var r = Object.getOwnPropertySymbols(e);
                t && (r = r.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }
                ))),
                n.push.apply(n, r)
            }
            return n
        }
        function k(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = null != arguments[t] ? arguments[t] : {};
                t % 2 ? P(Object(n), !0).forEach((function(t) {
                    U(e, t, n[t])
                }
                )) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : P(Object(n)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                }
                ))
            }
            return e
        }
        function N(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function _(e, t) {
            return (_ = Object.setPrototypeOf || function(e, t) {
                return e.__proto__ = t,
                e
            }
            )(e, t)
        }
        function R(e) {
            var t = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct)
                    return !1;
                if (Reflect.construct.sham)
                    return !1;
                if ("function" == typeof Proxy)
                    return !0;
                try {
                    return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}
                    ))),
                    !0
                } catch (e) {
                    return !1
                }
            }();
            return function() {
                var n, r = F(e);
                if (t) {
                    var o = F(this).constructor;
                    n = Reflect.construct(r, arguments, o)
                } else
                    n = r.apply(this, arguments);
                return M(this, n)
            }
        }
        function M(e, t) {
            return !t || "object" !== T(t) && "function" != typeof t ? D(e) : t
        }
        function D(e) {
            if (void 0 === e)
                throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }
        function F(e) {
            return (F = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                return e.__proto__ || Object.getPrototypeOf(e)
            }
            )(e)
        }
        function U(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        n.d(t, "a", (function() {
            return W
        }
        ));
        var B = function(e) {
            !function(e, t) {
                if ("function" != typeof t && null !== t)
                    throw new TypeError("Super expression must either be null or a function");
                e.prototype = Object.create(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }),
                t && _(e, t)
            }(c, e);
            var t, n, a, i = R(c);
            function c(e) {
                var t;
                return function(e, t) {
                    if (!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                }(this, c),
                U(D(t = i.call(this, e)), "sliderComponent", o.a.createRef()),
                U(D(t), "sliderWindowInner", o.a.createRef()),
                U(D(t), "scrollArrowLeft", o.a.createRef()),
                U(D(t), "scrollArrowRight", o.a.createRef()),
                U(D(t), "windowPadLeft", o.a.createRef()),
                U(D(t), "windowPadRight", o.a.createRef()),
                U(D(t), "resizeListener", function(e, t, n) {
                    var r, o = arguments;
                    return function() {
                        var a = this
                          , i = n && !r;
                        clearTimeout(r),
                        r = setTimeout((function() {
                            r = null,
                            n || e.apply(a, o)
                        }
                        ), t),
                        i && e.apply(a, o)
                    }
                }((function() {
                    var e = S()
                      , n = Math.floor(t.sliderViewportSettings[e])
                      , r = t.sliderComponent && t.sliderComponent.current.getBoundingClientRect().width > 1272;
                    n === t.state.numberOfCardsToShow && r === t.state.isExtraWide || t.setState({
                        sliderIndexStart: 0,
                        sliderIndexEnd: n,
                        numberOfCardsToShow: n,
                        isExtraWide: r
                    })
                }
                ), t.props.resizeDebounceSpeed)),
                U(D(t), "getMaxSliderIndex", (function() {
                    return Array.isArray(t.state.productCards) ? Math.max(1, t.state.productCards.length - 1) : 1
                }
                )),
                U(D(t), "onSlideStart", (function(e) {
                    if (e.preventDefault(),
                    t.sliderActive = !0,
                    e.button >= 1)
                        t.onSlideEnd(e);
                    else {
                        var n = !!t.scrollArrowLeft.current && t.isClickWithinTargetElement(t.scrollArrowLeft, e)
                          , r = !!t.scrollArrowRight.current && t.isClickWithinTargetElement(t.scrollArrowRight, e)
                          , o = e.clientX || e.touches[0].clientX;
                        n || r || (t.drag.startX = o,
                        t.sliderOffsetBeforeInteraction = parseInt(t.sliderWindowInner.current.style.transform.match(/[-0-9.]+/)[0], 10)),
                        t.state.sliderIsMoving || t.setState({
                            sliderIsMoving: !0
                        })
                    }
                }
                )),
                U(D(t), "onSlideMove", (function(e) {
                    e.preventDefault();
                    var n = e.clientX || e.touches[0].clientX;
                    if (t.drag.endX = n,
                    "click" === e.type && e.preventDefault(),
                    t.drag.startX && t.sliderActive) {
                        var r = t.sliderWindowInner.current.clientWidth
                          , o = (t.drag.startX - n) / r * 100
                          , a = {
                            transform: "translateX(".concat(t.sliderOffsetBeforeInteraction - o, "%)")
                        };
                        t.setStyle(t.sliderWindowInner, a)
                    }
                    null !== t.state.activeArrow && t.setState({
                        activeArrow: null
                    })
                }
                )),
                U(D(t), "onSlideEnd", (function(e) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] && arguments[1]
                      , r = t.state.sliderIndexStart
                      , o = t.sliderComponent && t.sliderComponent.current && t.sliderComponent.current.contains(e.target)
                      , a = "click" === e.type;
                    o && a && e.preventDefault(),
                    t.setState({
                        sliderIsMoving: !1
                    });
                    var i, c = !!t.windowPadRight.current && t.isClickWithinTargetElement(t.windowPadRight, e), s = !!t.windowPadLeft.current && t.isClickWithinTargetElement(t.windowPadLeft, e), u = t.drag.startX - t.drag.endX || 0, l = t.sliderWindowInner.current.contains(e.target);
                    if (s || c || !l)
                        t.sliderWindowInner.current.style.transform = "translateX(".concat(t.calculateInnerWindowTransform(), ")");
                    else {
                        var d = t.sliderWindowInner.current.clientWidth
                          , f = t.getOneCardPercentageWidth() / 100 * d
                          , p = function(e) {
                            return e < 0 && e > -.5 ? Math.ceil(e) : Math.floor(e)
                        };
                        if (t.isSmallViewport()) {
                            var m = t.trackIndexesForSmall(e)
                              , h = m.lowerBoundIndex
                              , v = m.upperBoundIndex;
                            i = {
                                sliderIndexStart: h,
                                sliderIndexEnd: v
                            },
                            n || t.logSliderEvent(j.SLIDE_ON_MOBILE)
                        } else {
                            var y = Math.abs(u) < f / 3 ? 0 : p(u / f)
                              , b = u % f >= f / 3 ? 1 : 0
                              , g = r + y + b;
                            i = {
                                sliderIndexStart: t.constrainIndexWithinBounds(g),
                                sliderIndexEnd: null
                            },
                            n || t.logSliderEvent(j.SLIDE_ON_DESKTOP)
                        }
                        t.setState(k({}, i), (function() {
                            t.sliderWindowInner.current.style.transform = "translateX(".concat(t.calculateInnerWindowTransform(), ")")
                        }
                        ))
                    }
                    0 !== u && (t.sliderActive = !1),
                    t.drag = {}
                }
                )),
                U(D(t), "logSliderEvent", (function(e) {
                    return Object(L.a)(function(e) {
                        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        return C({}, e, {}, t)
                    }(e, {
                        track: t.props.track,
                        slider: t.props.title
                    }))
                }
                )),
                U(D(t), "onSlideLeave", (function(e) {
                    t.sliderActive && t.onSlideEnd(e, !0)
                }
                )),
                U(D(t), "trackIndexesForSmall", (function(e) {
                    var n = t.drag.startX - t.drag.endX || 0
                      , r = t.isCardPeeking(!0, t.indexOfTargetCard);
                    return r && e.preventDefault(),
                    t.trackInteractionsOnSmall(n, r)
                }
                )),
                U(D(t), "trackInteractionsOnSmall", (function(e, n) {
                    var r = t.state
                      , o = r.sliderIndexStart
                      , a = r.sliderIndexEnd
                      , i = t.getOneCardPercentageWidth() / 100 * t.sliderWindowInner.current.clientWidth
                      , c = Math.abs(e)
                      , s = c >= i / 3
                      , u = c < 10 && n
                      , l = t.indexOfTargetCard === a
                      , d = t.indexOfTargetCard === o
                      , f = {
                        lowerBoundIndex: o,
                        upperBoundIndex: a
                    };
                    return e > 10 && s || u && l ? (f = t.calculateNextIndexesOnSmall(1),
                    u && l && t.logSliderEvent(j.PEEKING_CARD_INCREMENT)) : (s || u && d) && (f = t.calculateNextIndexesOnSmall(-1),
                    u && d && t.logSliderEvent(j.PEEKING_CARD_DECREMENT)),
                    f
                }
                )),
                U(D(t), "calculateNextIndexesOnSmall", (function(e) {
                    var n = t.state
                      , r = n.sliderIndexStart
                      , o = n.sliderIndexEnd
                      , a = n.numberOfCardsToShow
                      , i = n.productCards
                      , c = t.getMaxSliderIndex()
                      , s = r + e
                      , u = r + e < 0 ? 0 : r + e
                      , l = o + e
                      , d = o + e > c ? c + a : o + e
                      , f = 0 === r && o === a
                      , p = r === c - a && o === c
                      , m = s < 0
                      , h = o === a + 1 && 0 === r && l < o
                      , v = r === c - (a + 1) && o === c && s > r
                      , y = i.length < t.sliderViewportSettings[S()]
                      , b = r
                      , g = o;
                    return !y && s <= r ? p ? b = u : h ? g = l : m || (b = s,
                    g = l) : y || (f ? g = d : v ? b = s : p || (b = g === d ? b : s,
                    g = d)),
                    {
                        lowerBoundIndex: b,
                        upperBoundIndex: g
                    }
                }
                )),
                U(D(t), "trackTargetCardIndex", (function(e) {
                    t.indexOfTargetCard = e
                }
                )),
                U(D(t), "captureCardWrapperInteraction", (function() {
                    setTimeout((function() {
                        t.state.sliderIsMoving && t.setState({
                            sliderIsMoving: !1
                        }, (function() {
                            t.drag = {},
                            t.sliderWindowInner.current.style.transform = "translateX(".concat(t.calculateInnerWindowTransform(), ")")
                        }
                        ))
                    }
                    ), 250)
                }
                )),
                U(D(t), "captureCardTouchEnd", (function(e) {
                    return t.onSlideEnd(e)
                }
                )),
                U(D(t), "captureCardClick", (function(e) {
                    var n = t.drag.startX - t.drag.endX || 0
                      , r = Math.abs(n) > 10;
                    !t.isSmallViewport() && r && (e.preventDefault(),
                    t.onSlideEnd(e)),
                    "touchend" !== e.type && (t.drag = {})
                }
                )),
                U(D(t), "isSmallViewport", (function() {
                    var e = S();
                    return e === E.EXTRA_SMALL || e === E.SMALL
                }
                )),
                U(D(t), "isClickWithinTargetElement", (function(e, t) {
                    return e.current.contains(t.target)
                }
                )),
                U(D(t), "constrainIndexWithinBounds", (function(e) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0
                      , r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : Math.max(0, t.state.productCards.length - t.state.numberOfCardsToShow);
                    return Math.min(Math.max(e, n), Math.ceil(r))
                }
                )),
                U(D(t), "setStyle", (function(e, t) {
                    Object.keys(t).forEach((function(n) {
                        e.current.style[n] = t[n]
                    }
                    ))
                }
                )),
                U(D(t), "decrementCardIndex", (function() {
                    return t.state.sliderIndexStart > 0 && t.setState({
                        sliderIndexStart: t.state.sliderIndexStart - 1
                    }, (function() {
                        return t.logSliderEvent(j.PEEKING_CARD_DECREMENT)
                    }
                    ))
                }
                )),
                U(D(t), "incrementCardIndex", (function() {
                    return t.state.sliderIndexStart + t.state.numberOfCardsToShow < t.state.productCards.length && t.setState({
                        sliderIndexStart: t.state.sliderIndexStart + 1
                    }, (function() {
                        return t.logSliderEvent(j.PEEKING_CARD_INCREMENT)
                    }
                    ))
                }
                )),
                U(D(t), "slideCardsRow", (function(e) {
                    return function() {
                        var n = t.state
                          , r = n.sliderIndexStart
                          , o = n.numberOfCardsToShow
                          , a = n.productCards.length - 1
                          , i = "left" === e ? r - o < 0 ? 0 : r - o : r + 2 * o > a ? a - o + 1 : r + o;
                        t.setState({
                            sliderIndexStart: i,
                            activeArrow: e
                        }, (function() {
                            return t.logSliderEvent(j.ARROW_FULL_SCROLL)
                        }
                        ))
                    }
                }
                )),
                U(D(t), "setAlternativeArrowFocus", (function(e) {
                    if (null !== e) {
                        var n = "left" === e ? "right" : "left"
                          , r = t.sliderComponent.current;
                        r.querySelector(".arrow.arrow-".concat(e, ":not(.visible)")) && r.querySelector(".arrow.arrow-".concat(n, ".visible")) && r.querySelector(".arrow.arrow-".concat(n, ".visible")).focus()
                    }
                }
                )),
                U(D(t), "isCardPeeking", (function(e, n) {
                    var r = t.state
                      , o = r.sliderIndexStart
                      , a = r.sliderIndexEnd
                      , i = r.numberOfCardsToShow
                      , c = r.productCards
                      , s = t.getMaxSliderIndex()
                      , u = 0 === o && a === i
                      , l = n === o && !u || n === a && !(a === s && o === s - i) || n === a && u
                      , d = o - (0 === o ? 0 : 1)
                      , f = o === c.length - i ? o + (i - 1) : o + i
                      , p = n === d && o > 0 || n === f && o < c.length - i;
                    return e ? l : p
                }
                )),
                U(D(t), "getOneCardPercentageWidth", (function() {
                    return 100 / t.state.productCards.length
                }
                )),
                U(D(t), "calculateInnerWindowWidthPercentage", (function() {
                    var e = t.state.productCards
                      , n = t.sliderViewportSettings[S()]
                      , r = e ? e.length / n * 100 : 0;
                    return "calc(".concat(r, "%)")
                }
                )),
                U(D(t), "calculateInnerWindowTransform", (function() {
                    var e = t.state
                      , n = e.sliderIndexStart
                      , r = e.sliderIndexEnd
                      , o = e.numberOfCardsToShow;
                    if (!e.productCards)
                        return 0;
                    var a = S()
                      , i = t.sliderViewportSettings[a] % 1
                      , c = t.getOneCardPercentageWidth()
                      , s = t.constrainIndexWithinBounds(Number.MAX_SAFE_INTEGER)
                      , u = r - o
                      , l = u === t.getMaxSliderIndex() - o && n === u
                      , d = 0 === u
                      , f = -c * n;
                    return a === E.SMALL || a === E.EXTRA_SMALL ? (f = -c * u,
                    d ? 0 : l ? "calc(".concat((f = -c * (u + 1)) + c * i, "%)") : "".concat(f + c * (i / 2), "%")) : 0 === n ? 0 : n === s ? "calc(".concat(f + c * i, "%)") : "".concat(f, "%")
                }
                )),
                U(D(t), "calculateFluidCardWidths", (function(e, t) {
                    return "".concat(e / t * 100, "%")
                }
                )),
                U(D(t), "linkToRVPage", (function() {
                    return t.logSliderEvent(j.TRIGGER_SEE_ALL_LINK)
                }
                )),
                U(D(t), "renderCards", (function() {
                    var e = t.state
                      , n = e.sliderIsMoving
                      , r = e.productCards
                      , a = e.sliderIndexStart
                      , i = e.numberOfCardsToShow
                      , c = t.sliderViewportSettings[S()];
                    return r && r.map((function(e, s) {
                        var u = t.isSmallViewport()
                          , l = {
                            width: t.calculateFluidCardWidths(c, r.length),
                            opacity: !n && t.isCardPeeking(u, s) ? .5 : 1
                        }
                          , d = 0
                          , f = "false";
                        return (s < a || s > a + i - 1) && (d = -1,
                        f = "true"),
                        o.a.cloneElement(e, {
                            cardStyles: l,
                            cardIndex: s,
                            trackTargetCardIndex: t.trackTargetCardIndex,
                            touchEndHandler: t.captureCardTouchEnd,
                            clickHandler: t.captureCardClick,
                            cardWrapperInteraction: t.captureCardWrapperInteraction,
                            cardsTotal: r.length,
                            tabIndex: d,
                            ariaHidden: f
                        })
                    }
                    ))
                }
                )),
                U(D(t), "renderSliderArrow", (function(e) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "left"
                      , a = t.state
                      , i = a.numberOfCardsToShow
                      , c = a.productCards
                      , s = c && c.length > i
                      , u = "left" === n ? e > 0 : c && c.length - e !== i;
                    return s && o.a.createElement(r.Fragment, null, o.a.createElement("button", {
                        "aria-label": "view ".concat("left" === n ? "previous" : "next"),
                        className: "arrow arrow-".concat(n).concat(u ? " visible" : ""),
                        ref: "left" === n ? t.scrollArrowLeft : t.scrollArrowRight,
                        onTouchEnd: t.slideCardsRow(n),
                        onClick: t.slideCardsRow(n)
                    }, o.a.createElement(l.ChevronIcon, null)))
                }
                )),
                t.sliderViewportSettings = {
                    "extra-small": 1.5,
                    small: 2.4,
                    medium: 3,
                    large: e.sliderViewportSettingLarge ? e.sliderViewportSettingLarge : 4,
                    "extra-large": e.sliderViewportSettingLarge ? e.sliderViewportSettingLarge : 4,
                    none: 4
                },
                t.drag = {},
                t.state = {
                    sliderIndexStart: 0,
                    sliderIndexEnd: null,
                    sliderIsMoving: !1,
                    numberOfCardsToShow: Math.floor(t.sliderViewportSettings[S()]),
                    productCards: o.a.Children.toArray(t.props.children),
                    breakpoint: E.NONE,
                    activeArrow: null
                },
                t
            }
            return t = c,
            (n = [{
                key: "componentDidMount",
                value: function() {
                    var e = this.state
                      , t = e.sliderIndexStart
                      , n = e.numberOfCardsToShow
                      , r = e.productCards
                      , o = {
                        isExtraWide: this.sliderComponent && this.sliderComponent.current.getBoundingClientRect().width > 1272,
                        breakpoint: S()
                    };
                    this.isSmallViewport() && r && 0 === t && (o = k({}, o, {
                        sliderIndexEnd: n
                    })),
                    this.setState(o),
                    window.addEventListener("resize", this.resizeListener)
                }
            }, {
                key: "componentWillUnmount",
                value: function() {
                    window.removeEventListener("resize", this.resizeListener)
                }
            }, {
                key: "componentDidUpdate",
                value: function(e, t) {
                    var n = o.a.Children.toArray(this.props.children);
                    n.length !== t.productCards.length && this.setState({
                        productCards: n
                    }),
                    !e.slatLoaded && this.props.slatLoaded && Object(d.a)(document.querySelector(".product-slider-window-outer"), {
                        selectors: "a.product-card"
                    }),
                    this.setAlternativeArrowFocus(this.state.activeArrow)
                }
            }, {
                key: "render",
                value: function() {
                    var e = this.state
                      , t = e.sliderIndexStart
                      , n = e.numberOfCardsToShow
                      , a = e.sliderIsMoving
                      , i = e.isExtraWide
                      , c = e.productCards
                      , l = e.breakpoint
                      , d = this.props
                      , f = d.title
                      , p = d.seeAllUrl
                      , m = d.seeAllText
                      , h = d.slatLoaded
                      , v = d.shouldFadeIn
                      , y = c && c.length >= n
                      , b = {
                        width: this.calculateInnerWindowWidthPercentage(),
                        transform: "translateX(".concat(this.calculateInnerWindowTransform(), ")")
                    }
                      , g = {
                        onMouseDown: this.onSlideStart,
                        onMouseMove: this.onSlideMove,
                        onMouseLeave: this.onSlideLeave,
                        onTouchStart: this.onSlideStart,
                        onTouchMove: this.onSlideMove
                    };
                    return o.a.createElement(s.a, {
                        ref: this.visibilitySensor,
                        partialVisibility: !0,
                        onChange: this.componentInViewport
                    }, o.a.createElement("section", {
                        ref: this.sliderComponent,
                        key: l,
                        role: "region",
                        "aria-label": "carousel",
                        className: "product-slider".concat(h ? " loaded" : "").concat(v ? " fade-in" : "")
                    }, o.a.createElement(r.Fragment, null, f && o.a.createElement("section", {
                        className: "product-slider-title-slat"
                    }, o.a.createElement("h2", {
                        className: "product-slider-title"
                    }, f), p && o.a.createElement(r.Fragment, null, o.a.createElement("div", {
                        className: "product-slider-title-divider"
                    }), o.a.createElement("div", {
                        className: "product-slider-see-all"
                    }, o.a.createElement("a", {
                        onClick: this.linkToRVPage,
                        href: p,
                        rel: "nofollow"
                    }, m ? o.a.createElement("p", null, m) : o.a.createElement("p", null, "See All", o.a.createElement("span", {
                        className: "screen-reader-only"
                    }, "(".concat(c.length, " ").concat(1 !== c.length ? "items" : "item", ")"))), o.a.createElement(u.LinkChevronIcon, {
                        "aria-hidden": "true"
                    }))))), y && o.a.createElement("section", {
                        className: "window-outer-pad",
                        ref: this.windowPadLeft,
                        onClick: this.decrementCardIndex
                    }), o.a.createElement("section", {
                        className: "product-slider-window-outer".concat(i ? " extra-large-bounds" : "")
                    }, this.renderSliderArrow(t, "left"), o.a.createElement("section", A({
                        ref: this.sliderWindowInner,
                        className: "product-slider-window-inner".concat(a ? " active" : "").concat(h ? " loaded" : ""),
                        style: b
                    }, g, {
                        role: "list",
                        title: "Recently Viewed Carousel"
                    }), this.renderCards()), this.renderSliderArrow(t, "right")), y && o.a.createElement("section", {
                        className: "window-outer-pad",
                        ref: this.windowPadRight,
                        onClick: this.incrementCardIndex
                    }))))
                }
            }]) && N(t.prototype, n),
            a && N(t, a),
            c
        }(r.Component);
        function W(e) {
            var t = e.productCards;
            return o.a.createElement(B, e, t.map((function(e) {
                return o.a.createElement(f.a, A({}, e, {
                    key: e.detailsUrl
                }))
            }
            )))
        }
        U(B, "propTypes", {
            title: i.a.string,
            threshold: i.a.number,
            easing: i.a.string,
            duration: i.a.number,
            resizeDebounceSpeed: i.a.number,
            seeAllUrl: i.a.string,
            seeAllText: i.a.string,
            shouldFadeIn: i.a.bool,
            slatLoaded: i.a.bool,
            track: i.a.string,
            sliderViewportSettingLarge: i.a.number
        }),
        U(B, "defaultProps", {
            threshold: 20,
            easing: "ease-out",
            duration: 200,
            resizeDebounceSpeed: 200,
            slatLoaded: !0,
            shouldFadeIn: !1,
            track: "rvslat"
        })
    },
    637: function(e, t, n) {},
    64: function(e, t, n) {
        "use strict";
        var r = n(8);
        t.a = function(e) {
            var t = Object(r.d)(e)
              , n = new XMLHttpRequest;
            return n.open("GET", "".concat("/api/public/log-client-event").concat(t)),
            n.send(),
            n
        }
    },
    65: function(e, t, n) {
        "use strict";
        var r = Object.prototype.hasOwnProperty
          , o = "~";
        function a() {}
        function i(e, t, n) {
            this.fn = e,
            this.context = t,
            this.once = n || !1
        }
        function c(e, t, n, r, a) {
            if ("function" != typeof n)
                throw new TypeError("The listener must be a function");
            var c = new i(n,r || e,a)
              , s = o ? o + t : t;
            return e._events[s] ? e._events[s].fn ? e._events[s] = [e._events[s], c] : e._events[s].push(c) : (e._events[s] = c,
            e._eventsCount++),
            e
        }
        function s(e, t) {
            0 == --e._eventsCount ? e._events = new a : delete e._events[t]
        }
        function u() {
            this._events = new a,
            this._eventsCount = 0
        }
        Object.create && (a.prototype = Object.create(null),
        (new a).__proto__ || (o = !1)),
        u.prototype.eventNames = function() {
            var e, t, n = [];
            if (0 === this._eventsCount)
                return n;
            for (t in e = this._events)
                r.call(e, t) && n.push(o ? t.slice(1) : t);
            return Object.getOwnPropertySymbols ? n.concat(Object.getOwnPropertySymbols(e)) : n
        }
        ,
        u.prototype.listeners = function(e) {
            var t = o ? o + e : e
              , n = this._events[t];
            if (!n)
                return [];
            if (n.fn)
                return [n.fn];
            for (var r = 0, a = n.length, i = new Array(a); r < a; r++)
                i[r] = n[r].fn;
            return i
        }
        ,
        u.prototype.listenerCount = function(e) {
            var t = o ? o + e : e
              , n = this._events[t];
            return n ? n.fn ? 1 : n.length : 0
        }
        ,
        u.prototype.emit = function(e, t, n, r, a, i) {
            var c = o ? o + e : e;
            if (!this._events[c])
                return !1;
            var s, u, l = this._events[c], d = arguments.length;
            if (l.fn) {
                switch (l.once && this.removeListener(e, l.fn, void 0, !0),
                d) {
                case 1:
                    return l.fn.call(l.context),
                    !0;
                case 2:
                    return l.fn.call(l.context, t),
                    !0;
                case 3:
                    return l.fn.call(l.context, t, n),
                    !0;
                case 4:
                    return l.fn.call(l.context, t, n, r),
                    !0;
                case 5:
                    return l.fn.call(l.context, t, n, r, a),
                    !0;
                case 6:
                    return l.fn.call(l.context, t, n, r, a, i),
                    !0
                }
                for (u = 1,
                s = new Array(d - 1); u < d; u++)
                    s[u - 1] = arguments[u];
                l.fn.apply(l.context, s)
            } else {
                var f, p = l.length;
                for (u = 0; u < p; u++)
                    switch (l[u].once && this.removeListener(e, l[u].fn, void 0, !0),
                    d) {
                    case 1:
                        l[u].fn.call(l[u].context);
                        break;
                    case 2:
                        l[u].fn.call(l[u].context, t);
                        break;
                    case 3:
                        l[u].fn.call(l[u].context, t, n);
                        break;
                    case 4:
                        l[u].fn.call(l[u].context, t, n, r);
                        break;
                    default:
                        if (!s)
                            for (f = 1,
                            s = new Array(d - 1); f < d; f++)
                                s[f - 1] = arguments[f];
                        l[u].fn.apply(l[u].context, s)
                    }
            }
            return !0
        }
        ,
        u.prototype.on = function(e, t, n) {
            return c(this, e, t, n, !1)
        }
        ,
        u.prototype.once = function(e, t, n) {
            return c(this, e, t, n, !0)
        }
        ,
        u.prototype.removeListener = function(e, t, n, r) {
            var a = o ? o + e : e;
            if (!this._events[a])
                return this;
            if (!t)
                return s(this, a),
                this;
            var i = this._events[a];
            if (i.fn)
                i.fn !== t || r && !i.once || n && i.context !== n || s(this, a);
            else {
                for (var c = 0, u = [], l = i.length; c < l; c++)
                    (i[c].fn !== t || r && !i[c].once || n && i[c].context !== n) && u.push(i[c]);
                u.length ? this._events[a] = 1 === u.length ? u[0] : u : s(this, a)
            }
            return this
        }
        ,
        u.prototype.removeAllListeners = function(e) {
            var t;
            return e ? (t = o ? o + e : e,
            this._events[t] && s(this, t)) : (this._events = new a,
            this._eventsCount = 0),
            this
        }
        ,
        u.prototype.off = u.prototype.removeListener,
        u.prototype.addListener = u.prototype.on,
        u.prefixed = o,
        u.EventEmitter = u,
        e.exports = u
    },
    66: function(e, t, n) {
        "use strict";
        var r = Object.getOwnPropertySymbols
          , o = Object.prototype.hasOwnProperty
          , a = Object.prototype.propertyIsEnumerable;
        function i(e) {
            if (null == e)
                throw new TypeError("Object.assign cannot be called with null or undefined");
            return Object(e)
        }
        e.exports = function() {
            try {
                if (!Object.assign)
                    return !1;
                var e = new String("abc");
                if (e[5] = "de",
                "5" === Object.getOwnPropertyNames(e)[0])
                    return !1;
                for (var t = {}, n = 0; n < 10; n++)
                    t["_" + String.fromCharCode(n)] = n;
                if ("0123456789" !== Object.getOwnPropertyNames(t).map((function(e) {
                    return t[e]
                }
                )).join(""))
                    return !1;
                var r = {};
                return "abcdefghijklmnopqrst".split("").forEach((function(e) {
                    r[e] = e
                }
                )),
                "abcdefghijklmnopqrst" === Object.keys(Object.assign({}, r)).join("")
            } catch (e) {
                return !1
            }
        }() ? Object.assign : function(e, t) {
            for (var n, c, s = i(e), u = 1; u < arguments.length; u++) {
                for (var l in n = Object(arguments[u]))
                    o.call(n, l) && (s[l] = n[l]);
                if (r) {
                    c = r(n);
                    for (var d = 0; d < c.length; d++)
                        a.call(n, c[d]) && (s[c[d]] = n[c[d]])
                }
            }
            return s
        }
    },
    67: function(e, t, n) {
        "use strict";
        e.exports = n(30)
    },
    69: function(e, t, n) {
        "use strict";
        function r(e) {
            return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function o(e) {
            return e && "object" === r(e) && "default"in e ? e : {
                default: e
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = o(n(0));
        t.ChevronIcon = function(e) {
            var t = e.className
              , n = void 0 === t ? "" : t
              , r = e["aria-hidden"]
              , o = void 0 !== r && r;
            return a.default.createElement("div", {
                className: "icon-component chevron ".concat(n),
                "aria-hidden": "".concat(o)
            }, a.default.createElement("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                width: "18",
                height: "8.28",
                viewBox: "0 0 18 8.28"
            }, a.default.createElement("path", {
                d: "M8.99 8.279L0 1.642 1.09 0 9 5.84 16.91 0 18 1.642 9.01 8.28 9 8.264z",
                fill: "#100e31"
            })))
        }
    },
    70: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return s
        }
        )),
        n.d(t, "b", (function() {
            return l
        }
        ));
        var r = n(8)
          , o = n(53);
        function a(e, t, n, r, o, a, i) {
            try {
                var c = e[a](i)
                  , s = c.value
            } catch (e) {
                return void n(e)
            }
            c.done ? t(s) : Promise.resolve(s).then(r, o)
        }
        function i(e) {
            return function() {
                var t = this
                  , n = arguments;
                return new Promise((function(r, o) {
                    var i = e.apply(t, n);
                    function c(e) {
                        a(i, r, o, c, s, "next", e)
                    }
                    function s(e) {
                        a(i, r, o, c, s, "throw", e)
                    }
                    c(void 0)
                }
                ))
            }
        }
        function c(e, t) {
            var n = document.createEvent("CustomEvent");
            n.initCustomEvent(e, !0, !0, {
                offerIdOrLD: t,
                detail: "ecommerce",
                canBubble: !0
            }),
            window.dispatchEvent(n)
        }
        function s(e, t) {
            return u.apply(this, arguments)
        }
        function u() {
            return (u = i(regeneratorRuntime.mark((function e(t, n) {
                var a = arguments;
                return regeneratorRuntime.wrap((function(e) {
                    for (; ; )
                        switch (e.prev = e.next) {
                        case 0:
                            if (!(a.length > 2 && void 0 !== a[2] && a[2])) {
                                e.next = 3;
                                break
                            }
                            return e.abrupt("return", Promise.resolve().then((function() {
                                return Object(o.c)()
                            }
                            )));
                        case 3:
                            return Object(o.c)(),
                            e.prev = 4,
                            c("add-to-wish-list", t),
                            e.next = 8,
                            r.b.post(n);
                        case 8:
                            return e.abrupt("return", e.sent);
                        case 11:
                            return e.prev = 11,
                            e.t0 = e.catch(4),
                            Object(o.b)(),
                            e.abrupt("return", Promise.resolve({
                                data: {
                                    success: !1
                                }
                            }));
                        case 15:
                        case "end":
                            return e.stop()
                        }
                }
                ), e, null, [[4, 11]])
            }
            )))).apply(this, arguments)
        }
        function l(e) {
            return d.apply(this, arguments)
        }
        function d() {
            return (d = i(regeneratorRuntime.mark((function e(t) {
                var n, a = arguments;
                return regeneratorRuntime.wrap((function(e) {
                    for (; ; )
                        switch (e.prev = e.next) {
                        case 0:
                            if (n = a.length > 1 && void 0 !== a[1] && a[1],
                            Object(o.b)(),
                            !n) {
                                e.next = 4;
                                break
                            }
                            return e.abrupt("return");
                        case 4:
                            return e.prev = 4,
                            e.next = 7,
                            r.b.delete(t);
                        case 7:
                            e.next = 13;
                            break;
                        case 9:
                            throw e.prev = 9,
                            e.t0 = e.catch(4),
                            Object(o.c)(),
                            e.t0;
                        case 13:
                        case "end":
                            return e.stop()
                        }
                }
                ), e, null, [[4, 9]])
            }
            )))).apply(this, arguments)
        }
    },
    71: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return r
        }
        ));
        var r = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
              , n = {
                size: "md",
                ratioName: "first"
            }
              , r = Object.assign({}, n, t)
              , o = {
                xs: 1,
                sm: 2,
                md: 3,
                lg: 4,
                xl: 0
            };
            if (r.numericalSize = o[r.size],
            "first" !== r.ratioName && "firstSquare" !== r.ratioName)
                throw new Error("ratioName: ".concat(r.ratioName, ' is invalid. ratioName must be either "first" or "firstSquare"'));
            if ("firstSquare" === r.ratioName && "xs" !== r.size && "xl" !== r.size)
                throw new Error('ratioName "firstSquare" is only compatible with sizes 0 and 1');
            if (!(r.numericalSize >= 0 && r.numericalSize < 5))
                throw new Error('Invalid size "'.concat(r.size, '". size must be one of: [xs, sm, md lg, xl]'));
            var a = "https://bnsec.bluenile.com/sgmdirect/photoID/".concat(e, "/nl/_").concat(r.numericalSize, "_").concat(r.ratioName, "_.jpg");
            return a
        }
    },
    77: function(e, t, n) {
        "use strict";
        function r(e) {
            return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function o(e) {
            return e && "object" === r(e) && "default"in e ? e : {
                default: e
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = o(n(0));
        t.LinkChevronIcon = function(e) {
            var t = e.className
              , n = void 0 === t ? "" : t
              , r = e["aria-hidden"]
              , o = void 0 !== r && r;
            return a.default.createElement("div", {
                className: "icon-component link-chevron ".concat(n),
                "aria-hidden": "".concat(o)
            }, a.default.createElement("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                width: "8",
                height: "14",
                viewBox: "0 0 8 14"
            }, a.default.createElement("path", {
                fill: "#100E31",
                fillRule: "evenodd",
                transform: "translate(-6 -3)",
                d: "M13.754 10l-6.25 6.25-.884-.884L11.986 10 6.62 4.634l.884-.884z"
            })))
        }
    },
    777: function(e, t, n) {
        n(31),
        n(29),
        e.exports = n(990)
    },
    8: function(e, t, n) {
        "use strict";
        n.d(t, "d", (function() {
            return d
        }
        )),
        n.d(t, "c", (function() {
            return f
        }
        )),
        n.d(t, "a", (function() {
            return p
        }
        )),
        n.d(t, "b", (function() {
            return h
        }
        ));
        var r = n(5)
          , o = n.n(r)
          , a = n(4)
          , i = n(3);
        function c(e, t) {
            return function(e) {
                if (Array.isArray(e))
                    return e
            }(e) || function(e, t) {
                if ("undefined" == typeof Symbol || !(Symbol.iterator in Object(e)))
                    return;
                var n = []
                  , r = !0
                  , o = !1
                  , a = void 0;
                try {
                    for (var i, c = e[Symbol.iterator](); !(r = (i = c.next()).done) && (n.push(i.value),
                    !t || n.length !== t); r = !0)
                        ;
                } catch (e) {
                    o = !0,
                    a = e
                } finally {
                    try {
                        r || null == c.return || c.return()
                    } finally {
                        if (o)
                            throw a
                    }
                }
                return n
            }(e, t) || function(e, t) {
                if (!e)
                    return;
                if ("string" == typeof e)
                    return s(e, t);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                "Object" === n && e.constructor && (n = e.constructor.name);
                if ("Map" === n || "Set" === n)
                    return Array.from(e);
                if ("Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))
                    return s(e, t)
            }(e, t) || function() {
                throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }()
        }
        function s(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = new Array(t); n < t; n++)
                r[n] = e[n];
            return r
        }
        function u(e) {
            return encodeURI(Object.keys(e).reduce((function(t, n, r) {
                var o = e[n];
                return "".concat(t).concat(0 === r ? "?" : "&").concat(n, "=").concat(o)
            }
            ), ""))
        }
        function l(e) {
            try {
                var t = c(e.split("?"), 2)
                  , n = t[0]
                  , r = t[1].split("&").reduce((function(e, t) {
                    var n = c(t.split("="), 2)
                      , r = n[0]
                      , o = n[1]
                      , a = Object.assign({}, e);
                    return r && o && (a[r] = o),
                    a
                }
                ), {});
                return "".concat(n).concat(u(r))
            } catch (t) {
                return e
            }
        }
        function d() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}
              , t = Object(i.a)()
              , n = t.countryCode
              , r = t.languageCode
              , o = t.currencyCode
              , a = t.productSet
              , c = Object.assign({}, e, {
                country: n,
                language: r,
                currency: o,
                productSet: a
            });
            return u(c)
        }
        function f(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
              , n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2];
            return "/api/".concat(window.location.host.indexOf("secure") >= 0 && !n ? "secure" : "public", "/").concat(e).concat(d(t))
        }
        function p() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : ""
              , t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}
              , n = u(t);
            return l("".concat(e).concat(e.indexOf("?") > -1 ? n.replace("?", "&") : n))
        }
        var m = Object(a.a)().pageId
          , h = o.a.create({
            headers: {
                "x-bn-pageid": m
            }
        })
    },
    80: function(e, t, n) {
        "use strict";
        n.d(t, "a", (function() {
            return s
        }
        )),
        n.d(t, "g", (function() {
            return u
        }
        )),
        n.d(t, "f", (function() {
            return l
        }
        )),
        n.d(t, "e", (function() {
            return d
        }
        )),
        n.d(t, "d", (function() {
            return f
        }
        )),
        n.d(t, "c", (function() {
            return p
        }
        )),
        n.d(t, "b", (function() {
            return b
        }
        ));
        var r, o = n(86), a = n.n(o), i = n(10);
        function c(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var s = {
            ALL: "all",
            SMALL: "small",
            MEDIUM: "medium",
            LARGE: "large",
            EXTRA_LARGE: "extra-large",
            NONE: "none"
        };
        function u() {
            return Object(i.a)() && window.matchMedia(a.a["query-small"]).matches
        }
        function l() {
            return Object(i.a)() && window.matchMedia(a.a["query-medium"]).matches
        }
        function d() {
            return Object(i.a)() && window.matchMedia(a.a["query-large"]).matches
        }
        function f() {
            return Object(i.a)() && window.matchMedia(a.a["query-extra-large"]).matches
        }
        function p() {
            return Object(i.a)() && window.matchMedia ? u() ? s.SMALL : !u() && l() ? s.MEDIUM : !l() && d() ? s.LARGE : !d() && f() ? s.EXTRA_LARGE : s.NONE : s.NONE
        }
        var m, h = (c(r = {}, s.ALL, []),
        c(r, s.SMALL, []),
        c(r, s.MEDIUM, []),
        c(r, s.LARGE, []),
        c(r, s.EXTRA_LARGE, []),
        r), v = p(), y = function() {
            clearTimeout(m),
            m = setTimeout((function() {
                var e = p();
                e !== v && [].concat(h[e]).concat(h[s.ALL]).forEach((function(e) {
                    return e()
                }
                )),
                v = p()
            }
            ), 100)
        };
        function b() {
            return {
                addFnForSmallBreakpoint: function(e) {
                    return h[s.SMALL].push(e)
                },
                addFnForMediumBreakpoint: function(e) {
                    return h[s.MEDIUM].push(e)
                },
                addFnForLargeBreakpoint: function(e) {
                    return h[s.LARGE].push(e)
                },
                addFnForExtraLargeBreakpoint: function(e) {
                    return h[s.EXTRA_LARGE].push(e)
                },
                addFnForAllBreakpoints: function(e) {
                    return h[s.ALL].push(e)
                },
                removeListener: function() {
                    return window.removeEventListener("resize", y)
                }
            }
        }
        Object(i.a)() && window.addEventListener("resize", y)
    },
    86: function(e, t) {
        e.exports = {
            small: 600,
            "query-small": "only screen and (max-width: ".concat(599.9.toFixed(1), "px)"),
            medium: 850,
            "query-medium": "only screen and (min-width: ".concat(600, "px)"),
            large: 1e3,
            "query-large": "only screen and (min-width: ".concat(850, "px)"),
            "query-extra-large": "only screen and (min-width: ".concat(1e3, "px)")
        }
    },
    990: function(e, t, n) {
        "use strict";
        n.r(t);
        var r = n(0)
          , o = n.n(r)
          , a = n(1)
          , i = n.n(a)
          , c = n(8)
          , s = n(269)
          , u = n.n(s)
          , l = n(599);
        function d(e) {
            return (d = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                return typeof e
            }
            : function(e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            }
            )(e)
        }
        function f() {
            return (f = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n)
                        Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            }
            ).apply(this, arguments)
        }
        function p(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function")
        }
        function m(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1,
                r.configurable = !0,
                "value"in r && (r.writable = !0),
                Object.defineProperty(e, r.key, r)
            }
        }
        function h(e, t) {
            return (h = Object.setPrototypeOf || function(e, t) {
                return e.__proto__ = t,
                e
            }
            )(e, t)
        }
        function v(e) {
            var t = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct)
                    return !1;
                if (Reflect.construct.sham)
                    return !1;
                if ("function" == typeof Proxy)
                    return !0;
                try {
                    return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}
                    ))),
                    !0
                } catch (e) {
                    return !1
                }
            }();
            return function() {
                var n, r = g(e);
                if (t) {
                    var o = g(this).constructor;
                    n = Reflect.construct(r, arguments, o)
                } else
                    n = r.apply(this, arguments);
                return y(this, n)
            }
        }
        function y(e, t) {
            return !t || "object" !== d(t) && "function" != typeof t ? b(e) : t
        }
        function b(e) {
            if (void 0 === e)
                throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }
        function g(e) {
            return (g = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
                return e.__proto__ || Object.getPrototypeOf(e)
            }
            )(e)
        }
        function w(e, t, n) {
            return t in e ? Object.defineProperty(e, t, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : e[t] = n,
            e
        }
        var E = function(e) {
            !function(e, t) {
                if ("function" != typeof t && null !== t)
                    throw new TypeError("Super expression must either be null or a function");
                e.prototype = Object.create(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }),
                t && h(e, t)
            }(s, e);
            var t, n, a, i = v(s);
            function s() {
                var e;
                p(this, s);
                for (var t = arguments.length, n = new Array(t), o = 0; o < t; o++)
                    n[o] = arguments[o];
                return w(b(e = i.call.apply(i, [this].concat(n))), "state", {
                    productCards: e.props.productCards || [],
                    slatLoaded: !1
                }),
                w(b(e), "visibilitySensor", Object(r.createRef)()),
                w(b(e), "componentInViewport", (function(t) {
                    !e.state.slatLoaded && t && (e.setState({
                        slatLoaded: !0
                    }),
                    e.props.onSlatLoaded(!0))
                }
                )),
                w(b(e), "fetchDataFromAPI", (function() {
                    var t = e.props
                      , n = t.apiUrl
                      , r = t.onProductCardsUpdate
                      , o = t.onSlatLoaded;
                    n && Object(c.b)(n).then((function(t) {
                        var n = t.data
                          , a = !(!e.visibilitySensor.current || !e.visibilitySensor.current.state.isVisible) && e.visibilitySensor.current.state.isVisible
                          , i = n.productCards
                          , c = n.title
                          , s = n.seeAllUrl;
                        i && e.setState({
                            productCards: i,
                            title: c,
                            seeAllUrl: s,
                            slatLoaded: a
                        }, (function() {
                            r(i),
                            o(e.state.slatLoaded)
                        }
                        ))
                    }
                    )).catch((function(e) {
                        return console.log(e)
                    }
                    ))
                }
                )),
                e
            }
            return t = s,
            (n = [{
                key: "componentDidMount",
                value: function() {
                    this.fetchDataFromAPI()
                }
            }, {
                key: "render",
                value: function() {
                    var e = this.state
                      , t = e.productCards
                      , n = e.title
                      , r = e.seeAllUrl
                      , a = e.slatLoaded;
                    return o.a.createElement(u.a, {
                        ref: this.visibilitySensor,
                        partialVisibility: !0,
                        onChange: this.componentInViewport
                    }, o.a.createElement(l.a, f({}, this.props, {
                        productCards: t,
                        title: n,
                        seeAllUrl: r,
                        slatLoaded: a,
                        shouldFadeIn: !0
                    })))
                }
            }]) && m(t.prototype, n),
            a && m(t, a),
            s
        }(r.Component);
        function O() {
            return (O = Object.assign || function(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = arguments[t];
                    for (var r in n)
                        Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                }
                return e
            }
            ).apply(this, arguments)
        }
        function S(e, t) {
            if (null == e)
                return {};
            var n, r, o = function(e, t) {
                if (null == e)
                    return {};
                var n, r, o = {}, a = Object.keys(e);
                for (r = 0; r < a.length; r++)
                    n = a[r],
                    t.indexOf(n) >= 0 || (o[n] = e[n]);
                return o
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var a = Object.getOwnPropertySymbols(e);
                for (r = 0; r < a.length; r++)
                    n = a[r],
                    t.indexOf(n) >= 0 || Object.prototype.propertyIsEnumerable.call(e, n) && (o[n] = e[n])
            }
            return o
        }
        w(E, "propTypes", {
            apiUrl: i.a.string,
            title: i.a.string,
            threshold: i.a.number,
            easing: i.a.string,
            duration: i.a.number,
            resizeDebounceSpeed: i.a.number,
            onSlatLoaded: i.a.func,
            onProductCardsUpdate: i.a.func
        }),
        w(E, "defaultProps", {
            onSlatLoaded: function() {},
            onProductCardsUpdate: function() {}
        });
        var x = n(13);
        Object(x.a)("react/components/product-slider/RVProductSlider", (function(e) {
            var t = e.rvApiUrl
              , n = S(e, ["rvApiUrl"]);
            return o.a.createElement(r.Fragment, null, o.a.createElement(E, O({}, n, {
                apiUrl: t
            })))
        }
        ))
    }
}, [[777, 1, 0]]]);
</script>





