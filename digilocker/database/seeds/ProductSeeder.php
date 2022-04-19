<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Travelling Cost',
            "price"=>"100000",
            "description"=>"Patient with one Family Member",
            "category"=>"State Government",
            "gallery"=>"https://thumbs.dreamstime.com/b/travel-airplane-e-ticket-27921262.jpg"
            ],
            [
            'name'=>'Gas or Fuel Offer',
            "price"=>"1000",
            "description"=>"Citizen Offer",
            "category"=>"Central Government",
            "gallery"=>"https://cdn.pixabay.com/photo/2021/01/17/13/09/gas-pump-5925098_1280.jpg"
            ],
            [
            'name'=>'DigitalId',
            "price"=>"10000",
            "description"=>"DigitalDocumentation",
            "category"=>"Private",
            "gallery"=>"https://thumbs.dreamstime.com/z/hand-using-creative-digital-id-finger-print-interface-blue-background-technology-innovation-concept-double-exposure-221208549.jpg"
            ],
            [
            'name'=>'DigiTalInfo',
            "price"=>"5000",
            "description"=>"Goverment Certified Digital Card",
            "category"=>"Central Government",
            "gallery"=>"https://securecdn.pymnts.com/wp-content/uploads/2019/07/digital-id-jumio-1000x600.jpg"
            ],
            [
            'name'=>'Tax Mergine',
            "price"=>"10000",
            "description"=>"Resdient Benefits",
            "category"=>"State Government",
            "gallery"=>"https://static1.bigstockphoto.com/8/3/3/large2/338843113.jpg"
            ],
            [
                'name'=>'Defence Scheme',
                "price"=>"100000",
                "description"=>"Ondian Army-Navy-Pilot-Police Benefits",
                "category"=>"Central Government",
                "gallery"=>"https://cdn.imgbin.com/21/25/21/imgbin-indian-army-national-defence-academy-indian-military-academy-siachen-glacier-army-ZK1A8ZkFxPqAvKTR8f4AhjWft.jpg"
            ],
            [
                'name'=>'Banking & Insurance',
                "price"=>"100000",
                "description"=>"Loan and FD",
                "category"=>"State Government",
                "gallery"=>"https://image.shutterstock.com/image-photo/businessman-holding-word-banking-hand-600w-1150180799.jpg"
            ],
            [
                'name'=>'Health Insurance',
                "price"=>"50000",
                "description"=>"Emergency Purpose",
                "category"=>"Central Government",
                "gallery"=>"https://thumbs.dreamstime.com/z/good-health-good-life-female-hand-chalk-writing-text-blue-background-97044786.jpg"
            ],
            [
                'name'=>'Education',
                "price"=>"100000",
                "description"=>"Educational Benefits",
                "category"=>"Central Government",
                "gallery"=>"https://thumbs.dreamstime.com/z/kid-creativity-education-concept-child-learning-art-mathematics-formula-school-boy-ideas-black-chalk-board-57852601.jpg"
            ],
            [
                'name'=>'Electricity and Internet Usage',
                "price"=>"1000",
                "description"=>"DigitalId Benefits",
                "category"=>"Private",
                "gallery"=>"https://thumbs.dreamstime.com/z/past-due-seal-stamped-electricity-bill-month-expenses-payment-services-past-due-seal-stamped-electricity-bill-month-146080940.jpg"
            ]
        ]);
    }
}
