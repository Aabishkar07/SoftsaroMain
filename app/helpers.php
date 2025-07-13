<?php

use App\Models\Blog;
use App\Models\Service;



// function getCategoriesFrontend($parent_id)
// {
//     return Category::where('parent_id', $parent_id)->where('is_featured', 1)->where('active', 1)->get();
// }



function getMetas($segment1, $segment2)
{
    if (!Request::segment(1)) {

        $meta = (object) [
            'title' => 'Softsaro Nepal',
            'description' => '"Discover top IT solutions including IT services, Display Marketing, and SEO services at Home/SoftSaro. Boost your business efficiency today!',
            'image' => 'images/defaultimage.png',
            'keywords' => 'Softsaro, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company',
        ];
        return $meta;
    }
    if (Request::segment(1) == 'service') {
        $service = Service::where('slug', $segment2)->first();

        $meta = (object) [
            'title' => $service->meta_title . ' | Softsaro Nepal',
            'description' => $service->meta_description,
            'image' => 'uploads/' . $service->image,
            'keywords' => $service->keywords,
        ];
        return $meta;
    } else if (Request::segment(1) == 'blog') {
        $blog = Blog::where('slug', $segment2)->first();
        $meta = (object) [
            'title' => $blog->meta_title . ' | Softsaro Nepal',
            'description' => $blog->meta_description,
            'image' => 'uploads/' . $blog->featured_image,
            'keywords' => $blog->keywords,

        ];
        return $meta;
    }
    elseif (Request::segment(1) == 'aboutus') {

        $meta = (object) [
            'title' => 'About Us | Softsaro Nepal ',
            'description' => '"Discover top IT solutions including IT services, Display Marketing, and SEO services at Home/SoftSaro. Boost your business efficiency today!',
            'image' => 'images/defaultimage.png',
            'keywords' => 'Softsaro, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company',
        ];
        return $meta;
    }
    elseif (Request::segment(1) == 'services') {

        $meta = (object) [
            'title' => 'Services | Softsaro Nepal ',
            'description' => '"Discover top IT solutions including IT services, Display Marketing, and SEO services at Home/SoftSaro. Boost your business efficiency today!',
            'image' => 'images/defaultimage.png',
            'keywords' => 'Softsaro, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company',
        ];
        return $meta;
    }
    elseif (Request::segment(1) == 'contact') {

        $meta = (object) [
            'title' => 'Contact | Softsaro Nepal',
            'description' => '"Discover top IT solutions including IT services, Display Marketing, and SEO services at Home/SoftSaro. Boost your business efficiency today!',
            'image' => 'images/defaultimage.png',
            'keywords' => 'Softsaro, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company',
        ];
        return $meta;
    } else {

        $meta = (object) [
            'title' => 'Softsaro Nepal',
            'description' => '"Discover top IT solutions including IT services, Display Marketing, and SEO services at Home/SoftSaro. Boost your business efficiency today!',
            'image' => 'images/defaultimage.png',
            'keywords' => 'Softsaro, software development, custom software solutions, IT services, SaaS development, mobile app development, cloud software, enterprise applications, software consulting, tech company',
        ];
        return $meta;

    }
}
