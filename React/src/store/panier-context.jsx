import { createContext, useReducer } from "react";
import { DUMMY_PRODUCTS } from "../MOCK_DATA";


export const PanierContext = createContext({
    items:[],
    addItemToCart:()=>{},
});

const cartReducer = (state, action) => {
    if(action.type==="AJOUTER_DANS_PANIER"){
        const updateShoppingCartItems = [...state.items];

        const existingElementIndex = updateShoppingCartItems.findIndex(
            (cartItem) => cartItem.id === action.payload.productId
        )

        const existingElement = updateShoppingCartItems[existingElementIndex];

        if(existingElement){

        }else{
            const product = DUMMY_PRODUCTS.find(
                (product) => product.id === action.payload.productId
            );
            if(product){
                updateShoppingCartItems.push({
                    id:product.id,
                    name:product.name,
                    quantity:1, 
                })
            }
        }
        return {items:updateShoppingCartItems};

    }
    return state;
};

export const PanierContextProvider = ({children}) =>{
    const [cartState, cartDispatch] = useReducer(cartReducer,{
        items:[],
    })

    const handleAddProductToCart = (productId) =>{
        console.log(productId);
        cartDispatch({
            type: "AJOUTER_DANS_PANIER",
            payload: {productId:productId},
        })
    }

    const initialValue = {
        items:cartState.items,
        addItemToCart:handleAddProductToCart,
    };
    return (
        <PanierContext.Provider value={initialValue}>
            {children}
        </PanierContext.Provider>
    );
}