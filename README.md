# Fluidbox

![fluidbox](fluidbox.png)  

## Installation
See [this instruction](http://fansoro.org/documentation/plugins/plugins-installation)

## Usage in page content

```
[![Image]({/path/to/thumbnail})](/path/to/image)
```

## Usage in template

```smarty
<a href="/path/to/image">
    <img src="/path/to/thumbnail" />
</a>
```

### Creating thumbnails with [Gregwar Image Plugin](https://github.com/fansoro/fansoro-plugin-gregwar-image)

```smarty
<a href="/path/to/image">
    <img src="{Image::open('/path/to/image')->resize(100, 100)}" />
</a>
```

## Demo
See [demo](http://terrymun.github.io/Fluidbox/demo/index.html)

## Options

| name  | value | description |
|---|---|---|
| enabled | true | or `false` to disable the plugin |
| types | [png,jpg,jpeg,gif] | Array of image types |
| immediateOpen | false | Determines if Fluidbox should be opened immediately on click. If set to yes, Fluidbox will open the ghost image and wait for the target image to load. If set to no, Fluidbox will wait for the target image to load, then open the ghost image. |
| loader | false | Determines if a loader will be added to the manipulated DOM. It will have the class of `.fluidbox__loader.` |
| maxWidth | 0 | Sets the maximum width, in screen pixels, that the ghost image will enlarge to. When set to zero this property is ignored. This property will not override the `viewportFill`. |
| maxHeight | 0 | Sets the maximum height, in screen pixels, that the ghost image will enlarge to. When set to zero this property is ignored. This property will not override the `viewportFill`. |
| resizeThrottle | 500 | Determines how much to throttle the viewport resize event that fires recomputing of Fluidbox dimensions and repositioning of the ghost image. |
| stackIndex | 1000 | Determines how high up the z-index will all Fluildbox elements be. Leave this option as default, unless you have other relatively or absolutely positioned elements on the page that is messing with Fluidbox appearance. |
| stackIndexDelta | 10 | Determines how much the z-index will fluctuate from `stackIndex` in order to allow visually-correct stacking of Fluidbox instances. With the default settings, this means that the effective range of z-indexes Fluidbox operates in will be between 990–1010. For elements that should go under the overlay, they should have a z-index of less than 1000. |
| viewportFill | 0.95 | Dictates how much the longest axis of the image should fill the viewport. The value will be coerced to fall between 0 and 1. |

## License
See [LICENSE](https://github.com/fansoro/fansoro-plugin-fluidbox/blob/master/LICENSE)
