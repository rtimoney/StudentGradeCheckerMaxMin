<?php 



class ClassificationTest extends \PHPUnit\Framework\TestCase{


    public function testgetMaxMin()
    {

        $out = new \App\functions;

        $inputText = 'software engineering,99newlinedatabases,55newlineweb development,10newlinecomputing foundations,10newlinecloud computing,1';
        $result = $out->getMaxMin($inputText);

        $this->assertEquals('software engineering, 99newlinecloud computing, 1',$result);


}

        public function testgetMaxMinDoesSomething()
        {
            $out = new \App\functions;
            $inputText = 'software engineering,99newlinedatabases,55newlineweb development,10newlinecomputing foundations,10newlinecloud computing,1';
            $result = $out->getMaxMin($inputText);
            $this->assertNotEquals($inputText,$result);
        }

        public function testgetMaxMinIncompleteInputs()
        {

            $out = new \App\functions;

            $inputText = 'software engineering,99';
            $result = $out->getMaxMin($inputText);

            $this->assertEquals('software engineering, 99newlinesoftware engineering, 99',$result);


        }

        public function testService()
        {

            $out = new \App\functions;

            $URL = 'http://maxmin-40103299.40103299.qpc.hal.davecutting.uk/?input_text=softwareengineering,99newlinedatabases,55newlinewebdevelopment,10newlinecomputingfoundations,10newlinecloudcomputing,1';


            $result = file_get_contents($URL);

            $this->assertEquals('{"error":false,"string":"softwareengineering,99newlinedatabases,55newlinewebdevelopment,10newlinecomputingfoundations,10newlinecloudcomputing,1=softwareengineering, 99newlinecloudcomputing, 1","answer":"softwareengineering, 99newlinecloudcomputing, 1"}',$result);


        }

}?>