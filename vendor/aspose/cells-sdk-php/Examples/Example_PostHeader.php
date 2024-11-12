<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostHeaderRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PostHeaderRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setSection( 1);
$request->setScript( "Update add header");
$request->setIsFirstPage( 'true');
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->postHeader($request);