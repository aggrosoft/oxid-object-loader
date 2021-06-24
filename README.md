# oxid-object-loader
Adds methods to load objects from db inside of templates, small wrapper around oxNew for template usage

## Usage

`[{assign var=someVar value=$oViewConf->loadObject('someclass', 'oxid')]`

## Example

Load article object with oxid 123456789 into variable $myarticle

`[{assign var=myarticle value=$oViewConf->loadObject('oxarticle', '123456789)}]`

