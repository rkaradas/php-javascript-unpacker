# php-javascript-unpacker
This a ported unpacker for JavaScript files that were packed with Dean Edwards JavaScript's Packer.

## Basic usage
```
 // where $packedJS is the packed JavaScript that begins with eval(p,a,c,k,e,d) or eval(p,a,c,k,e,r)

 $unpacker = new JavaScriptUnpacker();
 $unpacker = $myPacker->Unpack($packedJs);
```