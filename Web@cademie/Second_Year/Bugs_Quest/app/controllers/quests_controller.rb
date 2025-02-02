class QuestsController < ApplicationController
    def index
      @quests = Quest.all
    end
  
    def show
      @quest = Quest.find(params[:id])
      @etapes = Etape.where(quest_id: params[:id])
    end
  
    def new
      @quest = Quest.new
    end
  
    def create
      @quest = Quest.new(quest_params)
  
      if @quest.save
        redirect_to @quest, notice: 'La quête a été créé avec succès.'
      else
        render :new
      end
    end
  
    def edit
      @quest = Quest.find(params[:id])
    end
  
    def update
      @quest = Quest.find(params[:id])
  
      if @quest.update(quest_params)
        redirect_to @quest, notice: 'La quête a été mise à jour avec succès.'
      else
        render :edit
      end
    end
  
    def destroy
      @quest = Quest.find(params[:id])
      @quest.destroy
      redirect_to quests_path, notice: 'La quête a été supprimé avec succès.'
    end
  
    private
  
    def quest_params
      params.require(:quest).permit(:name)
    end
      
  end
  