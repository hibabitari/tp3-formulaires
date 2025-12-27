<?php

namespace App\Controller;

use App\Form\ProductFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(Request $request): Response
    {
        $product = [
            'name' => 'Premium Wireless Headphones',
            'price' => 129.99,
            'formattedPrice' => '$129.99',
            'description' => 'Experience superior sound quality with our premium wireless headphones. Features active noise cancellation, 30-hour battery life, and premium comfort padding.',
            'brand' => 'AudioTech',
            'color' => 'Matte Black',
            'connectivity' => 'Bluetooth 5.0',
            'batteryLife' => '30 hours',
            'imageUrl' => 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=800'
        ];
        
        $form = $this->createForm(ProductFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Product added to cart!');
            return $this->redirectToRoute('app_product');
        }

        
        return $this->render('product/index.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }
}