<?php

namespace App\DataFixtures;

use App\Entity\Allergen;
use App\Entity\Ingredient;
use App\Entity\Product;
use App\Entity\Tag;
use App\Entity\Unit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $allergen_title = ["gluten", "peanuts", "walnuts", "almonds", "macadamia nuts", "cashews", "hazelnuts", "pecans", "pisachios"];
        
        $allergens = [];

        foreach($allergen_title as $title){
            $allergen = new Allergen();
            $allergen->setTitle($title);
            $allergen->setCreatedAt(new \DateTime());
            $allergen->setEnabled(1);
            $manager->persist($allergen);
            $allergens[] = $allergen;
        }

        
        
        $tag_title = ["nuts-free", "low-calorie", "cocoa-free", "gluten-free"];
        $tags = [];

        foreach($tag_title as $title){
            $tag = new Tag();
            $tag->setTitle($title);
            $tag->setCreatedAt(new \DateTime());
            $tag->setEnabled(1);
            $manager->persist($tag);
            $tags[] = $tag;
        }

        $ingredient_title = ["gluten", "peanuts", "walnuts", "almonds", "macadamia nuts", "cashews", "hazelnuts", "pecans", "pisachios", "fruit", "berries", "raspberry", "strawberry"];
        $ingredients = [];

        foreach($ingredient_title as $title){
            $ingredient = new Ingredient();
            $ingredient->setTitle($title);
            $ingredient->setCreatedAt(new \DateTime());
            $ingredient->setEnabled(1);
            $manager->persist($ingredient);
            $ingredients[] = $ingredient;
        }

        $unit_title = ["per cake", "per cupcake", "per 5", "per 10", "per bar"];
        $units = [];

        foreach($unit_title as $title){
            $unit = new Unit();
            $unit->setTitle($title);
            $unit->setCreatedAt(new \DateTime());
            $unit->setEnabled(1);
            $manager->persist($unit);
            $units[] = $unit;
        }

        $product_title = ["Strawberry Cheesecake", "Peanut Butter Chocolate Cupcake", "Light Berry Cupcake", "Silky-Smooth Chocolate Cake", "Low-Calorie Chocolate Bites", "Mango-Turmeric Cupcake", "Plum Seed Cheesecake", "Lemon Cheesecake", "Tiger Nut Cheesecake", "Chocolate Coffee Cheesecake Bites", "Chocolate Raspberry Cake", "Espresso Coffee Cream Bars", "Peanut Butter Energy Balls", "Lime Cheesecake Bites", "Coco Balls", "Raspberry Chocolate Bars", "Creamy Bites with Raspberry Jelly", "Nuts and Chocolate Bites", "Minty Chocolate Truffles"];

        $product_short_description = [
            "Strawberry Cheesecake Short Description Placeholder Text", 
            "Peanut Butter Chocolate Cupcake Short Description Placeholder Text", 
            "Light Berry Cupcake Short Description Placeholder Text", 
            "Silky-Smooth Chocolate Cake Short Description Placeholder Text", 
            "Low-Calorie Chocolate Bites Short Description Placeholder Text", 
            "Mango-Turmeric Cupcake Short Description Placeholder Text", 
            "Plum Seed Cheesecake Short Description Placeholder Text", 
            "Lemon Cheesecake Short Description Placeholder Text", 
            "Tiger Nut Cheesecake Short Description Placeholder Text", 
            "Chocolate Coffee Cheesecake Bites Short Description Placeholder Text", 
            "Chocolate Raspberry Cake Short Description Placeholder Text", 
            "Espresso Coffee Cream Bars Short Description Placeholder Text", 
            "Peanut Butter Energy Balls Short Description Placeholder Text", 
            "Lime Cheesecake Bites Short Description Placeholder Text", 
            "Coco Balls Short Description Placeholder Text", 
            "Raspberry Chocolate Bars Short Description Placeholder Text", 
            "Creamy Bites with Raspberry Jelly Short Description Placeholder Text", 
            "Nuts and Chocolate Bites Short Description Placeholder Text", 
            "Minty Chocolate Truffles Short Description Placeholder Text"
            ];

        $product_long_description = [
            "Strawberry Cheesecake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Peanut Butter Chocolate Cupcake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Light Berry Cupcake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Silky-Smooth Chocolate Cake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Low-Calorie Chocolate Bites is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Mango-Turmeric Cupcake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Plum Seed Cheesecake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Lemon Cheesecake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Tiger Nut Cheesecake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Chocolate Coffee Cheesecake Bites is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Chocolate Raspberry Cake is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Espresso Coffee Cream Bars is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Peanut Butter Energy Balls is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Lime Cheesecake Bites is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Coco Balls is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Raspberry Chocolate Bars is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Creamy Bites with Raspberry Jelly is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Nuts and Chocolate Bites is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die.", 
            "Minty Chocolate Truffles is an incredibly yummy product that you won't want to miss out on. It will make you feel like you're walking on cloud nine, and it's good for your body, too! You will absolutely love it, we totally promise you that! Check the allergens list, however, we really don't want you to die."
            ];

        $types = ["cake", "chocolate"];

            for($i = 0; $i < 19; $i++){
                $product = new Product();
                $product->setTitle($product_title[$i]);
                $product->setShortDescription($product_short_description[$i]);
                $product->setLongDescription($product_long_description[$i]);
                shuffle($allergens);
                shuffle($tags);
                shuffle($ingredients);
                for($j = 0; $j < random_int(1 , 3); $j++){
                    $product->addAllergen($allergens[$j]);
                    $product->addTag($tags[$j]);
                    $product->addIngredient($ingredients[$j]);
                }
                if($i < 11){
                    $product->setType($types[0]);
                }else{
                    $product->setType($types[1]);
                }
                $product->setUnit($units[$i%5]);
                $product->setCreatedAt(new \DateTime());
                $product->setEnabled(1);
                $product->setPriceEuro(random_int(10 , 20));
                $product->setPriceCentime(random_int(0 , 99));
                $manager->persist($product);
            }
        $manager->flush();
    }
}
