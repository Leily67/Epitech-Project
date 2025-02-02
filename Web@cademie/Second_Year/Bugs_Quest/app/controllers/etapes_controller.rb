class EtapesController < ApplicationController

    def show
        @etape = Etape.find(params[:id])
    end
  
    def new
        @etape = Etape.new(quest_id: params[:quest_id])
        @quest = Quest.find(params[:quest_id])
        @pnjs = Pnj.all
    end
  
    def create
        @etape = Etape.new(etape_params)
        @quest = Quest.find(params[:quest_id])
        @pnjs = Pnj.all
          
      if @etape.save
        redirect_to [@quest,@etape], notice: 'l\'étape a été créé avec succès.'
      else
        puts(@etape.errors)
        render :new
      end
    end
  
    def edit
        @etape = Etape.find(params[:id])
    end
  
    def update
        @etape = Etape.find(params[:id])
  
        if @etape.update(etape_params)
          redirect_to @etape, notice: 'l\'étape a été mise à jour avec succès.'
        else
          render :edit
        end
    end
  
    def destroy
        @etape = Etape.find(params[:id])
        @etape.destroy
        redirect_to quest_path(params[:quest_id]), notice: 'l\'étape a été supprimé avec succès.'
    end
  
    private
  
    def etape_params
        params.require(:etape).permit(:question, :quest_id, :choix, :pnj_id, :reponse)
    end
      
  end
  