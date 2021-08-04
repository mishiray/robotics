<div
    class="col-md-6 col-lg-4 d-flex"
    data-aos="fade-up"
    data-aos-delay="200"
>
    <div class="card">
        <a href=""{{ route('blog_info',['id'=>$r_post->id,'slug'=>$r_post->slug])}}">
            <img
                              src="{{ asset('post_images/'.$r_post->image) }}"
                                alt="{!! $r_post->title !!}"
                              class="card-img-top"
                            />
            </a>
                          <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between mb-3">
                              <div class="text-small d-flex">
                                <div class="mr-2">
                                </div>
                              </div>
                                <span data-toggle="tooltip" data-placement="top" title="March 24th, 2021" class="badge text-muted float-right">4 months ago</span>
                            </div>
                            <a href=""{{ route('blog_info',['id'=>$r_post->id,'slug'=>$r_post->slug])}}">
                              <h4>{!! $r_post->title !!}</h4>
                            </a>
                            <div class="d-flex align-items-center mt-3">
                              <div class="ml-1">
                                <span class="text-small">{{ date('M d, Y',strtotime($r_post->created_at)) }}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>   
