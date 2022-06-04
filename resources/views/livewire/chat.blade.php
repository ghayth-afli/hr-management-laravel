<div class="app-content content chat-application" wire:poll>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="body-content-overlay"></div>
            <!-- Main chat area -->
            <section class="chat-app-window">
                <!-- To load Conversation -->
                <div class="start-chat-area d-none">
                    <div class="mb-1 start-chat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h4 class="sidebar-toggle start-chat-text">Start Conversation</h4>
                </div>
                <!--/ To load Conversation -->

                <!-- Active Chat -->
                <div class="active-chat">
                    <!-- Chat Header -->
                    <div class="chat-navbar">
                        <header class="chat-header">
                            <div class="d-flex align-items-center">
                            <div class="avatar avatar-border user-profile-toggle m-0 me-1">
                                <img src="../../../app-assets/images/portrait/small/ama chat.png" alt="avatar" height="36" width="36">
                            </div>
                                <h6 class="mb-0">Ama Group Chat</h6>
                            </div>
                        </header>
                    </div>
                    <!--/ Chat Header -->

                    <!-- User Chat messages -->
                    <div class="user-chats ps ps--active-y">
                        <div class="chats">
                            <!--<div class="divider">
                                <div class="divider-text">Yesterday</div>
                            </div>-->
                            @forelse ($messages as $message)
                                @if($message->user->id == Auth::user()->id)
                                    <div class="chat">
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>{{ $message->message_text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <span class="avatar box-shadow-1 cursor-pointer">
                                                @if(file_exists($message->user->avatar))
                                                    <img src="{{ asset($message->user->avatar) }}" alt="avatar" height="36" width="36" />
                                                @else
                                                    <img src="{{ asset('img/config/nopic.png') }}" alt="avatar" height="36" width="36" />
                                                @endif
                                            </span>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>{{ $message->message_text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <h5 style="text-align: center;color:red">Le chat est vide</h5>
                            @endforelse
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px; height: 655px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 526px;"></div></div>
                    </div>
                    <!-- User Chat messages -->

                    <!-- Submit Chat form -->
                    <form class="chat-app-form" wire:submit.prevent="sendMessage">
                        <div class="input-group input-group-merge me-1 form-send-message">
                            <input type="text" class="form-control message" placeholder="Tapez votre message" wire:model.defer="messageText"/>
                        </div>
                        <button type="submit" class="btn btn-primary send waves-effect waves-float waves-light" onclick="enterChat();">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="14"
                                height="14"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-send d-lg-none"
                            >
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                            <span class="d-none d-lg-block">Envoyer</span>
                        </button>
                    </form>
                    <!--/ Submit Chat form -->
                </div>
                <!--/ Active Chat -->
            </section>
            <!--/ Main chat area -->

        </div>
    </div>
</div>
