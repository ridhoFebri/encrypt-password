<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PutVerticalPageBreakRequest;

$cellsApi = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"),"v3.0",getenv("CellsCloudApiBaseUrl"));

$remoteFolder = "TestData/In";

$localName = "Book1.xlsx";
$remoteName = "Book1.xlsx";

CellsApiTestBase::ready(  $this->instance,$localName ,$remoteFolder . "/" . $remoteName ,  "");
 
$request = new PutVerticalPageBreakRequest();
$request->setName( $remoteName);
$request->setSheetName( "Sheet1");
$request->setCellname( "A1");
$request->setColumn( 1);
$request->setRow( 1);
$request->setStartRow( 1);
$request->setEndRow( 1);
$request->setFolder( $remoteFolder);
$request->setStorageName( "");
$$cellsApi->putVerticalPageBreak($request);