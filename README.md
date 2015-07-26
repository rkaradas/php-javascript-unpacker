# PHP JavaScript unpacker
This a ported unpacker for JavaScript files that were packed with Dean Edwards JavaScript's Packer. This package includes a testpage "index.php" and the actual JavaScriptUnpacker class "JavaScriptUnpacker.php".

## Basic usage

1. You can use the packer tool on [Dean Edwards Packer](http://dean.edwards.name/packer/) page to create a packed JavaScript
2. Pate the generated (packed) code into the textarea of the testpage.
3. Hit on submit to get the unpacked JavaScript

## Class usage
Actually the purpose of this script is not to unpack userinputs, it makes more sense to 
use it for automation, e.g. site scraping, where you need to get the unpacked version of 
a packed JavaScript to parse out link or something like that.

And here is how you can use the class
```
 // where $packedJS is the packed JavaScript that begins with 
 // eval(p,a,c,k,e,d) or eval(p,a,c,k,e,r)

 $unpacker = new JavaScriptUnpacker();
 $unpacked = $myPacker->Unpack($packedJs);
```