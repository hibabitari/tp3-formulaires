<?php

namespace App\Entity;

class Product
{
    private string $name = 'Premium Wireless Headphones';
    private float $price = 129.99;
    private string $description = 'Experience superior sound quality with our premium wireless headphones. Features active noise cancellation, 30-hour battery life, and premium comfort padding.';
    private string $brand = 'AudioTech';
    private string $color = 'Matte Black';
    private string $connectivity = 'Bluetooth 5.0';
    private string $batteryLife = '30 hours';
    private string $imageUrl = 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=800';

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getFormattedPrice(): string
    {
        return '$' . number_format($this->price, 2);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getConnectivity(): string
    {
        return $this->connectivity;
    }

    public function getBatteryLife(): string
    {
        return $this->batteryLife;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}